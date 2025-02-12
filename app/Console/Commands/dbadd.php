<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;



class dbadd extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:testdb';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'run db test';

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
     * @return int
     */
    public function handle()
    {
        // $this->line("Some text");
        // $this->info("Hey, watch this !");
        // $this->comment("Just a comment passing by");
        // $this->question("Why did you do that?");
        // $this->error("Ops, that should not happen.");

        $this->comment("start..");
        sleep(1);







        $this->comment("Preliminary review ...");
        Artisan::call('migrate');
        usleep(70000);
        $this->comment("Ongoing rollback");
        Artisan::call('migrate:rollback');
        usleep(70000);
        Artisan::call('migrate');






        usleep(10000);
        $this->info("done successfully!✔️");

    }
}
