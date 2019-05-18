<?php

use Illuminate\Database\Seeder;

class StudentsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
		DB::table('students').insert([
			'fullname' 		=> '',
			'country'  		=> '',
			'detail'		=> ''
		]);

    }
}
