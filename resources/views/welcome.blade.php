@section('title', 'Home')
@section('css')
    <link rel="stylesheet" href="{{ mix('css/welcome.css') }}">
@endsection

@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12" id="introduction">
        
        <div class="welcome">
            <h2 class="welcome-headline">Hi. &nbsp; I'm Henrik</h2>
            <p class="welcome-intro">
                Developer, opensource & privacy advocate, <br> and curious by nature 
                <span class="blink"></span>
            </p>
        </div>

    </div>
</div>
@endsection