<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ImportArticles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'article:import {fileName : File name to be imported.}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Imports an article file in JSON format.';

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
        $fileName = $this->argument('fileName');

        $this->validateFileName($fileName);
    }

    protected function validateFileName($fileName)
    {
        $this->info("Validating input file name.");

        $input = explode("-", $fileName);

        if (count($input) != 2) {
            $this->error("Error: Incorrect file name.");
            $this->error("Correct format: 'yymm-x'.");
            exit();
        }

        $folder = (int)$input[0];
        $file = (int)$input[1];

        $this->info("folder = $input[0] & file = $input[1].json");
    }
}
