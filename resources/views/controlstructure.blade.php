@extends('layout.layout')

@section("page_title", 'Control Structure')

@section('content')
    @if ($grade == 75)
    <p class="text-medium font-normal tracking-wide">You passed but the equivalent is 3.00</p>
    @elseif ($grade < 79)
    <p class="text-medium font-normal tracking-wide">You passed but the equivalent is 2.75</p>
    @elseif ($grade >= 79 && $grade <= 81)
    <p class="text-medium font-normal tracking-wide">You passed but the equivalent is 2.50</p>
    @elseif ($grade >= 82 || $grade <= 84)
    <p class="text-medium font-normal tracking-wide">You passed but the equivalent is 2.25</p>
    @elseif ($grade >= 88 || $grade <= 90)
    <p class="text-medium font-normal tracking-wide">You passed but the equivalent is 1.75</p>
    @elseif ($grade >= 91 || $grade <= 93)
    <p class="text-medium font-normal tracking-wide">You passed but the equivalent is 1.50</p>
    @elseif ($grade >= 94 || $grade <= 96)
    <p class="text-medium font-normal tracking-wide">You passed but the equivalent is 1.25</p>
    @elseif ($grade >= 97 || $grade <= 100)
    <p class="text-medium font-normal tracking-wide">You passed but the equivalent is 1.00</p>
    @elseif ($grade == 0 && grade <= 74)
    <p class="text-medium font-normal tracking-wide">You passed but the equivalent is 5.00</p>
    @else
    <h1 class="font-bold text-red-500">Invalid grade input</h1>
    @endif
    
@endsection

@section('contents')
    @for ($i = 5; $i >= 1; $i--) 
        @for ($j = 5; $j >= $i; $j--)
        {{$j}}
        @endfor
        <br>
    @endfor
@endsection



