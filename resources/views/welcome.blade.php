@extends('layout')

@section('title', 'CSS')

@section('stylesheet')
    <link rel="stylesheet" href="{{ mix('/css/welcome/welcome.css') }}">
@endsection

@section('content')
    <div class="welcome-header">
        <h1 class="heading-1">Advanced CSS and Sass: Flexbox, Grid, Animations and More!</h1>
        <p class="welcome-header__paragraph">https://www.udemy.com/advanced-css-and-sass</p>
    </div>

    <h2 class="heading-2">Projects</h2>
    <div class="projects">
        <a href="/natours/" class="project-card project-card--natours">
            <img src="/img/welcome/natours.png" alt="Natours Screenshot" class="project-card__img">
            <div class="project-card__description">
                <p>Custom float layouts, animations, Sass, BEM</p>
            </div>
        </a>
        <a href="/trillo/" class="project-card project-card--trillo">
            <img src="/img/welcome/trillo.png" alt="Trillo Screenshot" class="project-card__img">
            <span class="project-card__description">Flex</span>
        </a>
        <a href="/nexter/" class="project-card project-card--nexter">
            <img src="/img/welcome/nexter.png" alt="Nexter Screenshot" class="project-card__img">
            <span class="project-card__description">
                <span>Grid</span>
            </span>
        </a>
    </div>
@endsection