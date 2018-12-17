<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Level;
use App\Models\Kanji;

class FeedLevelCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'feed:level';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Insert level from old app';

    protected $url = 'https://api.baka-nano.com/api/level/kanji/';
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        for($i=1; $i<=49; $i++) {
            $this->info('Doing Level '.$i);

            $level = Level::firstOrCreate([
                'number' => $i,
                'name' => 'Level '.$i,
            ]);

            $json = json_decode(file_get_contents($this->url.$i), true);
            foreach ($json['data']['kanji'] as $kanji) {
                Kanji::where('kanji', $kanji['kanji'])->update(['id_level' => $level->id]);
            }

            $this->info('Level '.$i.' is donne');
        }
    }
}
