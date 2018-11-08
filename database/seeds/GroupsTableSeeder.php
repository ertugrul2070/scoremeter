<?php

use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert([
            'group_name' => "Gryffindor"
        ]);
        
        DB::table('groups')->insert([
            'group_name' => "Ravenclaw"
        ]);
        
        DB::table('groups')->insert([
            'group_name' => "Hufflepuff"
        ]);
        
        DB::table('groups')->insert([
            'group_name' => "Slytherin"
        ]);
    }
}
