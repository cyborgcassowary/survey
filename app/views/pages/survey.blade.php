@extends('layouts.master')

@section('content')



{{ Form::open(array('action' => 'SurveySubmissions@create', 'id'=>'chocolate')) }}

<div class="site-wrapper parallax-window" id="intro">
<div class="site-wrapper-inner">
    <div class="cover-container">
        <div class="inner cover">

            <div class="row">
            <div class="col-sm-6 ">
                <h1>Chocolate survey</h1>
                <p class="lead">Complete the chocolate survey so we can tailor our email campaigns to your interests. The first 100 participants will receive chocolate.</p>
                <div class="nojavascriptnoshow">
                    <p><a class="btn btn-primary" href="#survey-question-1" id="scroll-q-1">Begin the survey.</a></p>
                    <p>For each question, you will only be able to choose 2 of the 3 options.</p>
                    <p>Choose wisely my friend. </p>
                </div>
                <noscript>
                    <p class="bg-danger lead text-center">OH NO! You have your javascript turned off.  </p>
                </noscript>
            </div>

            <div class="col-sm-6">

                    <img src="/images/chocolate.jpg" class="img-responsive" />
            </div>

            </div>


        </div>
    </div>
</div>
</div>

<!-- beginning of question 1 -->

<div class="site-wrapper parallax-window" id="survey-question-1">
    <div class="site-wrapper-inner">
        <div class="cover-container">
            <div class="inner cover">

                <div class="col-sm-3">
            <h1 class="big">1</h1>
                </div>

                <div class="col-sm-9">
<h2>What chocolate would you prefer most?</h2>
                 <div class="row">
                    <div class="form-group col-sm-6">
                    {{-- Form::hidden('survey-question-1-hidden', "Test 1"  ) --}}

                    {{ Form::checkbox('q-1[mc]', 'Milk Chocolate for question 1', false, ['class' => 'checkbox']) }}
                    {{ Form::label('q-1[mc]', 'Milk Chocolate') }}

                <ul>
                    <li><strong>Color:</strong> Milk</li>
                    <li><strong>Taste:</strong> Chewy</li>
                    <li><strong>Nuts:</strong> No Nuts </li>
                    <li><strong>Price:</strong> $3.99</li>

                </ul>


            </div>
            <div class="form-group col-sm-6">

                {{ Form::checkbox('q-1[dc]', 'Dark Chocolate for question 1', false, ['class' => 'checkbox']) }}

                {{ Form::label('q-1[dc]', 'Dark Chocolate') }}

                <ul>
                    <li><strong>Color:</strong> Dark</li>
                    <li><strong>Taste:</strong> Soft </li>
                    <li><strong>Nuts:</strong> No Nuts </li>
                    <li><strong>Price:</strong> $5.99</li>

                </ul>
            </div>
                 </div>

                    <div class="row">
            <div class="form-group col-sm-6">

                {{ Form::checkbox('q-1[np]', 'No Purchase for question 1', false, ['class' => 'checkbox']) }}

                 {{ Form::label('q-1[np]', 'No Purchase') }}

            </div>

            <div class="form-group col-sm-6">
                <p><a class="btn btn-primary" href="#survey-question-2" id="scroll-q-2">Continue</a></p>
            </div>

                    </div>

                </div>
        </div>
    </div>
</div>
</div>

<!-- end of question 1-->


<!-- beginning of question 2 -->

<div class="site-wrapper parallax-window" id="survey-question-2">
    <div class="site-wrapper-inner">
        <div class="cover-container">
            <div class="inner cover">

                <div class="col-sm-3">
                    <h1 class="big">2</h1>
                </div>

                <div class="col-sm-9">
                    <h2>What chocolate would you prefer most?</h2>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            {{-- Form::hidden('survey-question-2-hidden', "Test 2"  ) --}}

                            {{ Form::checkbox('q-2[mc]', 'Milk Chocolate for question 2', false, ['class' => 'checkbox']) }}
                            {{ Form::label('q-2[mc]', 'Milk Chocolate') }}

                            <ul>
                                <li><strong>Color:</strong> Milk</li>
                                <li><strong>Taste:</strong> Chewy</li>
                                <li><strong>Nuts:</strong> No Nuts </li>
                                <li><strong>Price:</strong> $3.99</li>

                            </ul>


                        </div>
                        <div class="form-group col-sm-6">

                            {{ Form::checkbox('q-2[dc]', 'Dark Chocolate for question 2', false, ['class' => 'checkbox']) }}

                            {{ Form::label('q-2[dc]', 'Dark Chocolate') }}

                            <ul>
                                <li><strong>Color:</strong> Dark</li>
                                <li><strong>Taste:</strong> Soft </li>
                                <li><strong>Nuts:</strong> No Nuts </li>
                                <li><strong>Price:</strong> $5.99</li>

                            </ul>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-6">

                            {{ Form::checkbox('q-2[np]', 'No Purchase for question 2', false, ['class' => 'checkbox']) }}

                            {{ Form::label('q-2[np]', 'No Purchase') }}

                        </div>

                        <div class="form-group col-sm-6">
                            <p><a class="btn btn-primary" href="#survey-question-3" id="scroll-q-3">Continue</a></p>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- end of question 2 -->


<!-- beginning of question 3 -->

<div class="site-wrapper parallax-window" id="survey-question-3">
    <div class="site-wrapper-inner">
        <div class="cover-container">
            <div class="inner cover">

                <div class="col-sm-3">
                    <h1 class="big">3</h1>
                </div>

                <div class="col-sm-9">
                    <h2>What chocolate would you prefer most?</h2>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            {{-- Form::hidden('survey-question-3-hidden', "Test 3"  ) --}}

                            {{ Form::checkbox('q-3[mc]', 'Milk Chocolate for question 3', false, ['class' => 'checkbox']) }}
                            {{ Form::label('q-3[mc]', 'Milk Chocolate') }}

                            <ul>
                                <li><strong>Color:</strong> Milk</li>
                                <li><strong>Taste:</strong> Chewy</li>
                                <li><strong>Nuts:</strong> No Nuts </li>
                                <li><strong>Price:</strong> $3.99</li>

                            </ul>


                        </div>
                        <div class="form-group col-sm-6">

                            {{ Form::checkbox('q-3[dc]', 'Dark Chocolate for question 3', false, ['class' => 'checkbox']) }}

                            {{ Form::label('q-3[dc]', 'Dark Chocolate') }}

                            <ul>
                                <li><strong>Color:</strong> Dark</li>
                                <li><strong>Taste:</strong> Soft </li>
                                <li><strong>Nuts:</strong> No Nuts </li>
                                <li><strong>Price:</strong> $5.99</li>

                            </ul>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-6">

                            {{ Form::checkbox('q-3[np]', 'No Purchase for question 3', false, ['class' => 'checkbox']) }}

                            {{ Form::label('q-3[np]', 'No Purchase') }}

                        </div>

                        <div class="form-group col-sm-6">
                            <p><a class="btn btn-primary" href="#survey-question-4" id="scroll-q-4">Continue</a></p>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- end of question 3 -->



<!-- beginning of question 4  -->

<div class="site-wrapper parallax-window" id="survey-question-4">
    <div class="site-wrapper-inner">
        <div class="cover-container">
            <div class="inner cover">

                <div class="col-sm-3">
                    <h1 class="big">4</h1>
                </div>

                <div class="col-sm-9">
                    <h2>What chocolate would you prefer most?</h2>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            {{-- Form::hidden('survey-question-4-hidden', "Test 4"  ) --}}

                            {{ Form::checkbox('q-4[mc]', 'Milk Chocolate for question 4', false, ['class' => 'checkbox']) }}
                            {{ Form::label('q-4[mc]', 'Milk Chocolate') }}


                            <ul>
                                <li><strong>Color:</strong> Milk</li>
                                <li><strong>Taste:</strong> Soft</li>
                                <li><strong>Nuts:</strong> Nuts </li>
                                <li><strong>Price:</strong> $4.99</li>

                            </ul>


                        </div>
                        <div class="form-group col-sm-6">

                            {{ Form::checkbox('q-4[dc]', 'Dark Chocolate for question 4', false, ['class' => 'checkbox']) }}

                            {{ Form::label('q-4[dc]', 'Dark Chocolate') }}

                            <ul>
                                <li><strong>Color:</strong> Dark</li>
                                <li><strong>Taste:</strong> Chewy </li>
                                <li><strong>Nuts:</strong> No Nuts </li>
                                <li><strong>Price:</strong> $5.99</li>

                            </ul>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-6">

                            {{ Form::checkbox('q-4[np]', 'No Purchase for question 4', false, ['class' => 'checkbox']) }}

                            {{ Form::label('q-4[np]', 'No Purchase') }}

                        </div>

                        <div class="form-group col-sm-6">
                            <p><a class="btn btn-default" href="#conclusion" id="scroll-q-5">Continue</a></p>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<!--  end of question 4  -->


<div class="site-wrapper parallax-window" id="conclusion">
    <div class="site-wrapper-inner">
        <div class="cover-container">
            <div class="inner cover">
                <div class="row">
            <div class="form-group col-sm-8 col-sm-offset-2">
                <h1>Thank you for your participation</h1>

                <p class="lead">To save your results, please enter your email address below and submit your survey.</p>

                {{ Form::label('email', 'Email') }}
                {{ Form::email('email', null, $attributes = array('class' => 'emailInput', 'placeholder' => 'ex@example.com')) }}


                {{ Form::submit('Submit', ['class' => 'btn btn-default', 'id' => 'submitSubmission']) }}
            </div>
                </div>

            </div>
        </div>
    </div>
</div>


{{ Form::close() }}

@stop