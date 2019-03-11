<?php

namespace BinaryCabin\LaravelToolbelt\Commands;

use Illuminate\Console\Command;
use Spatie\Permission\Models\Role;

class InitiateRoles extends Command
{

    protected $signature = 'init:roles';

    protected $description = 'Add all default roles in db from \App\Options\Role';

    public function handle()
    {
        foreach(\App\Options\Role::get() as $roleKey => $roleLabel){
            $role = Role::where('name',$roleKey)->first();
            if(!$role){
                $role = Role::create(['name' => $roleKey]);
            }
        }
    }

}