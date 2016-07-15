<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Careers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'careers:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This is just to  finalize the last steps of career panel in laravel panel';

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
        $this->info('        [+] [ This is the final steps of your Career installation ]       ');
        $this->call('migrate');
        $this->call('panel:install');

        $link = new \Serverfireteam\Panel\Link();
        $link->getAndSave('Career', 'Careers');
        $link->save();
    }
}
