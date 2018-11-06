<?php

use Illuminate\Database\Seeder;

class ParticipantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('participants')->insert([
            'name' => "Jim",
            'lastname' => "Jam",
            //'group_id' => DB::table('groups')->insert(['group_name' => 'Gryffindor'])->get('id'),
            'score' => 15
        ]);
        
    }
}
