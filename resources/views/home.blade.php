@php
    $cards = [
        [
            'image' => asset('images/person_1.jpg'),
            'title' => 'Nancy Carrol',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit 1.',
            'socials' => [
                'facebook' => '#face_link_1',
                'inst' => '#inst_link_1',
            ],
        ],
        [
            'image' => asset('images/person_2.jpg'),
            'title' => 'Adam Tile',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit 2.',
            'socials' => [
                'facebook' => '#face_link_2',
                'inst' => '#inst_link_2',
            ],
        ],
        [
            'image' => asset('images/person_3.jpg'),
            'title' => 'Sarah Laws',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit 3.',
            'socials' => [
                'facebook' => '#face_link_3',
                'inst' => '#inst_link_3',
            ],
        ],
        [
            'image' => asset('images/person_4.jpg'),
            'title' => 'Amanda Pitt',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit 4.',
            'socials' => [
                'facebook' => '#face_link_4',
                'inst' => '#inst_link_4',
            ],
        ],
    ];
@endphp
@extends('layouts.app')

@section('content')
    @include('partials.header-gradient')
    @section('header-content')
    @endsection

    <nav class="breadcrumb">
        <a href="/">Home</a>
        <span class="breadcrumb-separator">
            <img src="{{ asset('images/arrow_right.svg') }}" alt="Breadcrumb separator">
        </span>
        <span>@yield('breadcrumb-title')</span>
    </nav>

    <section class="main-content">
        @yield('main-content')
    </section>

    <section class="cards-section">
        <h2>Our Editorial Team</h2>
        <div class="cards-container-wrapper">
            <div class="cards-container">
                @foreach ($cards as $card)
                    @include('components.card', $card)
                @endforeach
            </div>
        </div>
    </section>
@endsection
