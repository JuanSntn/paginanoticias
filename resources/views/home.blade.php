<!-- resources/views/home.blade.php -->
@extends('layouts.master')

@section('title', 'Inicio') <!-- Título de la página -->

@section('content')

    @php
        $cards = [
            ['title' => 'Card 1', 'content' => 'Contenido de la tarjeta 1'],
            ['title' => 'Card 2', 'content' => 'Contenido de la tarjeta 2'],
            ['title' => 'Card 3', 'content' => 'Contenido de la tarjeta 3'],
            ['title' => 'Card 4', 'content' => 'Contenido de la tarjeta 4'],
        ];
    @endphp
    @include('components.carousel')

    <div class="container pt-4">
        <!-- Grid de tarjetas -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach ($cards as $card)
                @include('components.cardNew', [
                    'title' => $card['title'],
                    'content' => $card['content'],
                ])
            @endforeach
        </div>
    </div>
@endsection
