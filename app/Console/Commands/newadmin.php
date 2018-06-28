<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Hash;
use App\Admin;

class newadmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'newadmin:createadmin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $admin = new Admin;

        $admin->name = $this->ask('Enter your Name');
        $admin->email = $this->ask('Enter your email');
        $admin->password = Hash::make($this->secret('Enter your Password'));

        if($this->confirm('Do You wish to continue..?'))
        {
            $admin->save();
            $this->info('Admin Added Successfully');
        }
        else{
            $this->error('Failed to create');
        }
    }
}
