@extends('layouts.plantilla')

@section('title', 'Cursos create')

@section('content')
  <h1>Bienvenido a la pagina crear curso</h1>
  <form action="{{ route('cursos.store') }}" method="POST">
    @csrf
    
    <label for="">
      Nombre:<br>
      <input type="text" name="name" value="{{ old('name') }}">
    </label><br>
    @error('name')
        {{ $message }}
    @enderror
    <br><br>
    <label for="">
      Description:<br>
      <textarea name="description" rows="10">{{ old('name') }}</textarea>
    </label><br>
    @error('description')
        {{ $message }}
    @enderror
    <br><br>
    <label for="">
      Category:<br>
      <input type="text" name="category" value="{{ old('category') }}">
    </label><br>
    @error('category')
        {{ $message }}
    @enderror
    <br><br>
    <button type="submit">Create</button>
    <a href="{{ route('cursos.index') }}">Back</a>
  
  </form>
@endsection