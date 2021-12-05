@extends('layouts.plantilla')

@section('title', 'Cursos edit')

@section('content')
  <h1>Editar curso</h1>
  <form action="{{ route('cursos.update', $curso) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="">
      Nombre:<br>
      <input type="text" name="name" value="{{ old('name', $curso->name) }}">
    </label><br>
    @error('name')
        {{ $message }}
    @enderror
    <br><br>
    <label for="">
      Description:<br>
      <textarea name="description" rows="10">{{ old('description', $curso->description) }}</textarea>
    </label><br>
    @error('description')
        {{ $message }}
    @enderror
    <br><br>
    <label for="">
      Category:<br>
      <input type="text" name="category" value="{{ old('category', $curso->category) }}">
    </label><br>
    @error('category')
        {{ $message }}
    @enderror
    <br><br>
    <button type="submit">Save</button>
    <a href="{{ route('cursos.show', $curso) }}">Back</a>
  
  </form>
@endsection