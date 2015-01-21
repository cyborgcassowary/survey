<?php

class SurveyTableSeeder extends Seeder {

	public function run()
	{
        Survey::create([
            'question1' => 'dark1,milk1',
            'question2' => 'np2,dark1',
            'question3' => 'milk3,dark3',
            'question4' => 'np4,dark4',
            'email' => 'jeff@example.com'
        ]);
	}

}