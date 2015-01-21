<?php namespace iRun4Life\Submission;

class SubmissionRepository {
    public function save(\Survey $survey){
        return $survey->save();
    }
}