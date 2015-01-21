<?php

class Survey extends \Eloquent {

	protected $fillable = ['survey-question-1-hidden', 'survey-question-2-hidden', 'survey-question-3-hidden', 'survey-question-4-hidden', 'email'];
    protected $table = 'survey';

}