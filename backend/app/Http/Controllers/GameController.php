<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

use Google\Cloud\Storage\StorageClient;

use Google\Cloud\TextToSpeech\V1\AudioConfig;
use Google\Cloud\TextToSpeech\V1\AudioEncoding;
use Google\Cloud\TextToSpeech\V1\SynthesisInput;
use Google\Cloud\TextToSpeech\V1\TextToSpeechClient;
use Google\Cloud\TextToSpeech\V1\VoiceSelectionParams;

use App\Models\Language;
use App\Models\Sentence;
use App\Models\Level;
use App\Models\Kanji;

use DB; 

class GameController extends Controller {

    /**
     * Create a new KanjiController instance.
     *
     * @return void
     */
    public function __construct() { }

    /**
     * get all languages
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getLanguages(Request $request) {
        $languages = Language::get();

        return response([
            'type' => 'succes',
            'title' => 'This is all the available languages',
            'data' => $languages,
            'message' => 'See you !'
        ], 200);
    }

    /**
     * get kanji
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getKanji(Request $request, $kanji) {
        $kanji = Kanji::where('kanji', $kanji)->firstOrFail();

        return response([
            'type' => 'succes',
            'title' => 'Here is your kanji',
            'data' => $kanji,
            'message' => 'See you !'
        ], 200);
    }

    /**
     * get all level with kanji
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getLevels(Request $request) {
        $levels = DB::table('level')
            ->select('level.id', 'level.number', 'level.name', 'level.description', DB::raw('group_concat(kanji.kanji) as kanji'))
            ->join('kanji', 'kanji.id_level', '=', 'level.id', 'left outer')
            ->groupBy('id_level')
            ->get();

        return response([
            'type' => 'succes',
            'title' => 'This is all the levels available',
            'data' => $levels,
            'message' => 'Bye bye !'
        ], 200);
    }

    /**
     * get sentence for level and language 
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getSentences(Request $request, $level, $language) {  
        $validator = Validator::make(['level' => $level, 'language' => $language], [
            'language' => 'integer|exists:language,id',
            'level' => 'integer|exists:level,id'
        ]);

        if ($validator->fails()) {
            return response([
                'title' => 'NAnnniiiii?!',
                'message' => 'Omae wa mo shindeiru !',
                'errors' => $validator->messages()
            ], 422);
        }

        $sentences = Sentence::where('id_level', $level)
            ->where('id_language', 2)
            ->whereHas('translations', function($query) use ($language) {
               return $query->where('id_language', $language);
            })
            ->with(['translations' => function($query) use ($language) {
                return $query->where('id_language', $language);
            }])
            ->orderByRaw("RAND()")
            ->take(200)
            ->get();

        return response([
            'type' => 'succes',
            'title' => 'Here is your data',
            'data' => $sentences,
            'message' => 'Mataneee!'
        ], 200);
    }

    /**
     * Play sentence !
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function playSentence(Request $request, $id) {
        $validator = Validator::make(['id' => $id], [
            'id' => 'required|exists:sentence,id'
        ]);

        if ($validator->fails()) {
            return response([
                'title' => 'NAnnniiiii ?',
                'message' => 'Omae wa mo shindeiru !',
                'errors' => $validator->messages()
            ], 422);
        }

        $sentence = Sentence::findOrFail($id);

        if ($sentence->id_language != 2) {
            return response([
                'title' => 'NAnnniiiii ?',
                'message' => 'Omae wa mo shindeiru !',
            ], 422);
        } 

        $textToSpeechClient = new TextToSpeechClient([
            'credentials' => base_path('googlecloud.json')
        ]);

        $input = new SynthesisInput();
        $input->setText($sentence->sentence);
        $voice = new VoiceSelectionParams();
        $voice->setLanguageCode('ja-JP');
        $voice->setName('ja-JP-Wavenet-A');
        $audioConfig = new AudioConfig();
        $audioConfig->setSpeakingRate(0.9);
        $audioConfig->setPitch(0.0);
        $audioConfig->setAudioEncoding(AudioEncoding::MP3);

        $resp = $textToSpeechClient->synthesizeSpeech($input, $voice, $audioConfig);
        $textToSpeechClient->close();

        return response([
            'type' => 'succes',
            'title' => 'All good !',
            'data' => ['audio' => base64_encode($resp->getAudioContent())],
            'message' => 'Coin coin !'
        ], 200);
    }
}
