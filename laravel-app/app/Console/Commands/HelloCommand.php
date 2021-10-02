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
    // protected $signature = 'hello:class {name}';
    // protected $signature = 'hello:class {--switch}';
    protected $signature = 'hello:class';
    
    /**
     * The console command description.
     *
     * @var string
     */
    // protected $description = 'sample command (class)'; //コマンドの説明
    protected $description = 'sample command (class)';

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
        // $name = $this->argument('name');
        // $this->comment('Hello '.$name);
        // $this->comment('Hello class command');
        // $switch = $this->option('switch');
        // $this->comment('Hello '.($switch ? 'ON' : 'OFF'));
        return view('welcome');
    }
}
