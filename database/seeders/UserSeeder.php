<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Testing\Fluent\Concerns\Has;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $adminRole = Role::where('name', 'admin')->first();
        $writerRole = Role::where('name', 'writer')->first();
        $userRole = Role::where('name', 'user')->first();

        // Admin Role

        $admin = new User;
        $admin->name = 'Admin';
        $admin->email = Str::random(10).'@gmail.com';
        $admin->password = Hash::make('xdemonx1234');
        $admin->save();
        $admin->roles()->attach($adminRole);

        // Writer Role

        $writer = new User;
        $writer->name = 'Creator';
        $writer->email = Str::random(10).'@gmail.com';
        $writer->password = Hash::make('xdemonx1234');
        $writer->save();
        $writer->roles()->attach($writerRole);

        // User Role

        $user = new User;
        $user->name = 'User';
        $user->email = Str::random(10).'@gmail.com';
        $user->password = Hash::make('xdemonx1234');
        $user->save();
        $user->roles()->attach($userRole);
    }
}
