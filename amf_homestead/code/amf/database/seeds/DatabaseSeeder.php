<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        #Create roles
        DB::table('roles')->insert([
            'id' => '1',
            'name' => 'Admin',
        ]);

        DB::table('roles')->insert([
            'id' => '2',
            'name' => 'User',
        ]);

        #Create users
        #1-5
        DB::table('users')->insert([
            'name' => 'Bill',
            'email' => 'bill@bill.com',
            'password' => Hash::make('password'),
            'role_id' => '1',
        ]);

        DB::table('users')->insert([
            'name' => 'James',
            'email' => 'james@james.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Tom',
            'email' => 'tom@tom.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Phil',
            'email' => 'phil@phil.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Rich',
            'email' => 'rich@rich.com',
            'password' => Hash::make('password'),
        ]);

        #6-10
        DB::table('users')->insert([
            'name' => 'Xavier',
            'email' => 'xavier@xavier.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Max',
            'email' => 'max@max.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Bohdan',
            'email' => 'bohdan@bohdan.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Jon',
            'email' => 'jon@jon.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Jose',
            'email' => 'jose@jose.com',
            'password' => Hash::make('password'),
        ]);

        #11-15
        DB::table('users')->insert([
            'name' => 'Jane',
            'email' => 'jane@jane.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Brittany',
            'email' => 'brittany@brittany.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Jennifer',
            'email' => 'jennifer@jennifer.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Diane',
            'email' => 'diane@diane.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Matthew',
            'email' => 'matthew@matthew.com',
            'password' => Hash::make('password'),
        ]);

        #Create locations -- not used currently
        #DB::table('location')->insert([
        #
        #]);

        $this->call([
            OrderSeeder::Class,
        ]);
    }
}