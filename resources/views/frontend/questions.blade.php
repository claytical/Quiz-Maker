@extends('layouts.master')
            
            @section('column-a')
              <div class="col-md-6">

                <h2>New Quiz Question</h2>
                    {!! Form::open(array('url' => '/questions', 'files' => true)) !!}
                    {!! Form::text('question') !!}
                    {!! Form::text('points') !!}
                    {!! Form::submit('Create Question'); !!}
                    {!! Form::close() !!}
                </div>
            @stop
            
            @section('column-b')
        
            <div class="col-md-6">
                <h2>Existing Quiz Questions</h2>
                @foreach($questions as $question)
                    <h5>{!! $question->question !!}</h5>
                    <h6>{!! $question->points !!}</h6>
                @endforeach
            </div>
            @stop
