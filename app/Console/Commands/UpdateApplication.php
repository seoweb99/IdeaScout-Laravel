<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class UpdateApplication extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-application';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    // app/Console/Commands/UpdateApplication.php
protected function handle()
{
    // Back up the database
    $this->info('Backing up database...');
    
    // Run migrations to update schema
    $this->call('migrate');
    
    // Clear caches
    $this->call('cache:clear');
    $this->call('view:clear');
    
    $this->info('Application updated successfully!');
}
}
