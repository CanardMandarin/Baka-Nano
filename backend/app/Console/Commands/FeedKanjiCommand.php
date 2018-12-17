<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Kanji;
use File;

class FeedKanjiCommand extends Command {
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'feed:kanji {file}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Giv\'me a file';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle() {
        $file = $this->argument('file');

        if ( !File::exists($file) ) return $this->error('Error : File not found');
        $this->info('File : ' .$file);

        $fd = fopen($file, "r");
        while (($data = fgetcsv($fd, 2000, ",")) !== FALSE) {
            Kanji::create([
                'kanji' => $data[0],
                'kname' => (int) $data[1],
                'kstroke' =>(int) $data[2], 
                'grade' => (int) $data[4],
                'meaning' => $data[3],
                'kunyomi' => $data[5],
                'onyomi' => $data[7],
                'examples' => $data[9]
            ]);
        }
        fclose($fd);
    }
}
