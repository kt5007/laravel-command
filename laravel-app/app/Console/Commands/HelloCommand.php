<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class HelloCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hello:class'; // コマンド名

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'sample command (class)'; //コマンドの説明

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
    public function handle() // コマンドの実行内容
    {
        $this->comment('Hello class command');
    }
}
