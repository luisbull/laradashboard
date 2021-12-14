<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Tailwind</title>

    <style>
        /* .container{
            background-color: red;
        } */

    </style>
</head>

@php
$color = 'green';
$alert = 'alert';
@endphp

<body>

    <div class="container mx-auto">
        <x-alert :color="$color" class="mb-8">
            <x-slot name="title">
                Title 1
            </x-slot>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus qui quas nisi, nulla, odio eos minus nam
            ullam tempore alias itaque perspiciatis amet asperiores, architecto dicta? Dignissimos neque dicta iste.
        </x-alert>

        <x-alert color="orange">
            <x-slot name="title">
                Title 2
            </x-slot>
            Hello world
        </x-alert>

        <x-alert color="violet">
            <x-slot name="title">
                Title 3
            </x-slot>
            Hello world 3
        </x-alert>

        {{-- Components Anonim --}}
        <x-alert2 :color="$color" class="mb-4">
            <x-slot name="title">
                Titulo de prueba
            </x-slot>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem at unde consectetur non exercitationem.
            Quis dolore dolorum laboriosam doloribus ut accusamus labore, culpa odit esse officia nihil voluptates
            architecto veritatis!
        </x-alert2>

        <x-alert2 class="mx-6">
        </x-alert2>
        {{-- END Components Anonim --}}

        {{-- Components Dynamic --}}
        <x-dynamic-component :component="$alert" :color="$color">
            <x-slot name="title">
            Title 1
            </x-slot>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus qui quas nisi, nulla, odio eos minus nam
            ullam tempore alias itaque perspiciatis amet asperiores, architecto dicta? Dignissimos neque dicta iste.
        </x-dynamic-component>
        {{-- ENDComponents Dynamic --}}

        <br>
        {{-- <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 "> --}}
        <div class="grid grid-cols-4 grid-rows-3 gap-4 ">
            <h1 class="bg-blue-200 sm:col-span-2 md:col-span-3 lg:col-span-4">1 Hola mundo</h1>
            <h2 class="bg-blue-300 col-start-1">2 Hola mundo</h2>
            <h3 class="bg-blue-400 row-span-3">3 Hola mundo</h3>
            <h4 class="bg-blue-500">4 Hola mundo</h4>
            <h5 class="bg-blue-600">5 Hola mundo</h5>
            <h6 class="bg-blue-700">6 Hola mundo</h6>
        </div>
        <br>
        <div class="grid grid-flow-col">
            <div class="bg-blue-100">1</div>
            <div class="bg-blue-200">2</div>
            <div class="bg-blue-300">3</div>
            <div class="bg-blue-400">4</div>
            <div class="bg-blue-500">5</div>
            <div class="bg-blue-600">6</div>
            <div class="bg-blue-700">7</div>
            <div class="bg-blue-800">8</div>
            <div class="bg-blue-900">9</div>
        </div>
        <br>
        {{-- <div class="grid grid-flow-col grid-rows-3"> --}}
        <div class="grid grid-flow-col grid-rows-3 grid-cols-4">
            <div class="bg-blue-100">1</div>
            <div class="bg-blue-200">2</div>
            <div class="bg-blue-300">3</div>
            <div class="bg-blue-400">4</div>
            <div class="bg-blue-500">5</div>
            <div class="bg-blue-600">6</div>
            <div class="bg-blue-700">7</div>
            <div class="bg-blue-800">8</div>
            <div class="bg-blue-900">9</div>
        </div>
    </div>

</body>

</html>