<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class ModulePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artisan::call('make:permission Post --all');
        Artisan::call('make:permission Category --all');
        Artisan::call('make:permission Poster --all');
    }
}
