@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">

                <div class="card-body">

                    @foreach($questions as $question)
                        <div class="media">
                            <div class="media-body">
                                <h3> {{ $question->title }} </h3>
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
