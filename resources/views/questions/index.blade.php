@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">

                <div class="card-body">

                    @foreach($questions as $question)
                        <div class="media">

                            <div class="d-flex flex-column counter">

                                <div class="votes">

                                    <strong> {{ $question->votes }} </strong> {{ str_plural('vote', $question->votes) }}

                                </div>
                                <div class="status {{ $question->status }}">

                                    <strong> {{ $question->answers }} </strong> {{ str_plural('answer', $question->answers) }}

                                </div>
                                <div class="views">

                                    {{ $question->views . ' ' . str_plural('view', $question->views) }}

                                </div>

                            </div>
                            <div class="media-body">
                                <h3>
                                    <a href="{{ $question->url }}"> {{ $question->title }} </a>
                                </h3>
                                <p class="font-weight-bold"> 
                                    asked by 
                                    <a href="{{ $question->user->url }}"> {{ $question->user->name }} </a>                                     {{ $question->created_date }}  
                                </p>
                                <p> {{ str_limit($question->body, 200) }} </p>
                            </div>
                        </div>
                        <hr>
                    @endforeach

                    {{ $questions->links() }}
                </div>
            
            </div>
        </div>
    </div>

@endsection
