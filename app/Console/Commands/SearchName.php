<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\SAPController;

class SearchName extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'search {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command searchs SAP for a given name';

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
        $sap = new SAPController();
        $response = $sap->search($this->argument('name'));
        echo $response;
    }
}
