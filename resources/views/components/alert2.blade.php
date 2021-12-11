@props(['color' => 'blue', 'title' => 'titulo por defecto']) {{-- declare default values if they were NOT assigned in blade file --}}
<div role="alert" {{$attributes}}> {{-- {{$attributes allow to read more than one attribute assigned in blade file. this case mb-4}} --}}
    <div class="bg-{{$color}}-500 text-white font-bold rounded-t px-4 py-2">
        {{$title}}
    </div>
    <div class="border border-t-0 border-{{$color}}-400 rounded-b bg-{{$color}}-100 px-4 py-3 text-{{$color}}-700">
        <p>{{$slot}}</p>
    </div>

</div>
