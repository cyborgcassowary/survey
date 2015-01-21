<?php namespace Survey\Forms;

use Laracasts\Validation\FormValidator;

class addSurveyForm extends FormValidator {

    protected $rules = [
        'survey-question-1-hidden' => 'required:survey',
        'survey-question-2-hidden' => 'required:survey',
        'survey-question-3-hidden' => 'required:survey',
        'survey-question-4-hidden' => 'required:survey',
        'email' => 'required|email|unique:survey'
    ];

}