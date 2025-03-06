<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class InstallApplication extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:install-application';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
 // app/Console/Commands/InstallApplication.php
protected function handle()
{
    // Create database if using SQLite
    if (!file_exists(database_path('database.sqlite'))) {
        file_put_contents(database_path('database.sqlite'), '');
        $this->info('Database file created.');
    }
    
    // Run migrations
    $this->call('migrate');
    
    // Seed with default categories and phrases
    $this->call('db:seed');
    
    // Create storage link
    $this->call('storage:link');
    
    // Set application key
    $this->call('key:generate');
    // During installation
  //Artisan::call('key:generate'); during installation users should be able to set the application key
    
    $this->info('Application installed successfully!');
}
}
