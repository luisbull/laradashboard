@extends('layouts.plantilla')

@section('title', 'Curso ' . $curso->name)

@section('content')
  <h1>Bienvenido al curso {{ $curso->name }}</h1>
  <a href="{{ route('cursos.index') }}">back</a><br>
  <a href="{{ route('cursos.edit', $curso) }}">edit</a>
  <p><strong>Categoria: </strong>{{ $curso->category }}</p>
  <p>{{ $curso->description }}</p>
  <br><br>
  <form action="{{ route('cursos.destroy', $curso) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">delete</button>
  </form>
@endsection