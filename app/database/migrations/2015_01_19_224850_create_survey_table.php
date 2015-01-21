<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//

        Schema::create('survey', function(Blueprint $table){
            $table->increments('id');
            $table->string('survey-question-1-hidden');
            $table->string('survey-question-2-hidden');
            $table->string('survey-question-3-hidden');
            $table->string('survey-question-4-hidden');
            $table->string('email')->unique();
            $table->timestamps();
        });

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
        Schema::drop('survey');
	}

}
