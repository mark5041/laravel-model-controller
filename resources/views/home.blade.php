
@extends('layouts.base')

@section('content')
    <div class="container">
        <div class="row gy-3">
            @foreach ($movies as $element)
            <div class="col-4" p-2">
                
                <div class="card p-2">
                    <h2 class="text-center px-4 py-3">{{ $element->title }}</h2>
                    <span>Original title: {{ $element->original_title }}</span>
                    <span>Language: {{ $element->nationality }}</span>
                    <span>Date: {{ $element->date }}</span>
                    <span>Vote: {{ $element->vote }}</span>
                </div>

            </div>
            @endforeach
        </div>
    </div>
@endsection
