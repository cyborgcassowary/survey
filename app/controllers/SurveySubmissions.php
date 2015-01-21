<?php

use Survey\Forms\addSurveyForm;
use Laracasts\Flash\Flash;

class SurveySubmissions extends \BaseController {

    private $addSurveyForm;

    function __construct(addSurveyForm $addSurveyForm){
        $this->addSurveyForm = $addSurveyForm;
    }

	public function index()
	{
        return View::make('pages.survey');
	}


	public function create()
	{

       $this->addSurveyForm->validate(Input::all());


       Survey::create(

            Input::only('survey-question-1-hidden', 'survey-question-2-hidden', 'survey-question-3-hidden', 'survey-question-4-hidden', 'email' )

        );

//        Survey::create([
//            'question1' => 'dark1,milk1',
//            'question2' => 'np2,dark1',
//            'question3' => 'milk3,dark3',
//            'question4' => 'np4,dark4',
//            'email' => 'jeff@example.com'
//        ]);


        Flash::overlay('Your survey has been completed. ' );

        return Redirect::to('/complete')->with('flash_message', 'Your survey has been completed.');
	}




}