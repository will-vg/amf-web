<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        #Create a test order
        DB::table('orders')->insert([
            'user_id' => '1',
            'material' => 'Lab Safety Rules and Guidelines',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('orders')->insert([
            'user_id' => '1',
            'material' => 'The Simple Guide to HAZMAT Suits',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('orders')->insert([
            'user_id' => '2',
            'material' => 'Spooky Scary Skeletons 2: The Movie',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('orders')->insert([
            'user_id' => '2',
            'material' => 'Oh Brother, This Guy Stinks!, by Fishman',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('orders')->insert([
            'user_id' => '3',
            'material' => 'Accelerate, by Forsgren, Humble, and Kim',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('orders')->insert([
            'user_id' => '3',
            'material' => 'The DevOps Handbook, by Kim, Humble, Debois, & Willis',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('orders')->insert([
            'user_id' => '4',
            'material' => 'Kant: Good or Bad?, by Zizek',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('orders')->insert([
            'user_id' => '4',
            'material' => 'Das Kapital, All Volumes Collected in One Book, by Marx',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('orders')->insert([
            'user_id' => '5',
            'material' => 'What Time is It, by Efron',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('orders')->insert([
            'user_id' => '5',
            'material' => 'Baby (Times 3), by Bieber',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('orders')->insert([
            'user_id' => '6',
            'material' => 'This is a test',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('orders')->insert([
            'user_id' => '6',
            'material' => 'This is a second test',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('orders')->insert([
            'user_id' => '7',
            'material' => 'Instant coffee',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('orders')->insert([
            'user_id' => '7',
            'material' => 'Toilet paper',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('orders')->insert([
            'user_id' => '8',
            'material' => '3.5 inch hard drives',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('orders')->insert([
            'user_id' => '8',
            'material' => 'DDR3 RAM',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('orders')->insert([
            'user_id' => '9',
            'material' => 'Amazon Alexas',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('orders')->insert([
            'user_id' => '9',
            'material' => 'Google Home Minis',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('orders')->insert([
            'user_id' => '10',
            'material' => 'Boxes',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('orders')->insert([
            'user_id' => '10',
            'material' => 'Bags',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('orders')->insert([
            'user_id' => '11',
            'material' => 'Hawk Cards',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('orders')->insert([
            'user_id' => '11',
            'material' => 'Class notes',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('orders')->insert([
            'user_id' => '12',
            'material' => 'Frozen hamburgers',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('orders')->insert([
            'user_id' => '12',
            'material' => 'Hamburger buns',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('orders')->insert([
            'user_id' => '13',
            'material' => 'A whole grill',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('orders')->insert([
            'user_id' => '13',
            'material' => 'Charcoal',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('orders')->insert([
            'user_id' => '14',
            'material' => 'Drone blades',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('orders')->insert([
            'user_id' => '14',
            'material' => 'Drone remotes',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('orders')->insert([
            'user_id' => '15',
            'material' => 'A cure for coronavirus',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('orders')->insert([
            'user_id' => '15',
            'material' => 'An online commencement ceremony',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
