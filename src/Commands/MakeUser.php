<?php

namespace BinaryCabin\LaravelToolbelt\Commands;

use Illuminate\Console\Command;

class MakeUser extends Command
{

    protected $signature = 'make:user {--email=} {--password=} {--name=} {--role=}';

    protected $description = 'Create a new user in the database';

    public function handle()
    {
        $email = $this->option('email');
        if(empty($email)){
            $email = $this->ask('email');
        }
        $password = $this->option('password');
        if(empty($password)){
            $password = $this->ask('password');
        }
        $name = $this->option('name');
        if(empty($name)){
            $name = $email;
        }
        $role = $this->option('role');
        $user = \App\User::create([
            'name' => $name,
            'email' => $email,
            'password' => \Hash::make($password),
        ]);
        if(!empty($role)){
            $user->assignRole('admin');
        }
    }

}