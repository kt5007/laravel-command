<?php

namespace App\Console\Commands;

use App\UseCases\ExportOrdersUseCase;
use Illuminate\Console\Command;
use Carbon\Carbon;

class ExportOrdersCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:export-orders {date} {--output=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '個人情報を出力する';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(ExportOrdersUseCase $useCase)
    {
        parent::__construct();
        $this->useCase = $useCase;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $date = $this->argument('date');
        $targetDate=Carbon::createFromFormat('Ymd',$date);
        $tsv = $this->useCase->run($targetDate);
        $outputFilePath=$this->option('output');
        if(is_null($outputFilePath)){
            echo $tsv;
            return;
        }
        file_put_contents($outputFilePath,$tsv);
        echo $tsv;
        // $this->info('Hello');
    }
}