<?php
use App\Movie;
use Illuminate\Validation\Rules\Exists;

$insertMovie = new Movie();

$insertMovie->title = "Attack on Titan: The Roar of Awakening";
$insertMovie->original_title = "劇場版 進撃の巨人 覚醒の咆哮";
$insertMovie->nationality = "japanese";
$insertMovie->date = "2018-01-13";
$insertMovie->vote = 8.4;

foreach($movies as $element)
{
    if($element->title == $insertMovie->title && $element->original_title == $insertMovie->original_title)
    {
        $find = true;
        break;
    }
}

if(!isset($find) || $find != true)
{
    $insertMovie->save();
    $find = false;
}
else
{
    var_dump("il dato è già presente nel database");
}

?>

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
