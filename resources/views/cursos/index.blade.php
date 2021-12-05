@extends('layouts.plantilla')

@section('title', 'Cursos')

@section('content')
  <h1>Bienvenido a la pagina cursos</h1>
  <a href="{{ route('cursos.create') }}">Create course</a>
  @foreach($cursos as $curso)
      <ul>
          <li>
              <a href="{{ route('cursos.show' , $curso) }}">{{ $curso->name }}</a>
              <br>
          </li>
      </ul>
      @endforeach

      {{ $cursos->links() }}

@endsection