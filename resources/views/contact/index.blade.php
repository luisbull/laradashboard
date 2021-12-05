@extends('layouts.plantilla')

@section('title', 'Contact')

@section('content')
  <h1>Leave your message</h1>


  @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>{{ session('success')}}</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif


  <form action="{{ route('contact.store') }}" method="POST">
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
      Email:<br>
      <input type="text" name="email" value="">
    </label><br>
    @error('email')
        {{ $message }}
    @enderror
    <br><br>

    <label for="">
      Subject:<br>
      <input type="text" name="subject" value="{{ old('subject') }}">
    </label><br>
    @error('subject')
        {{ $message }}
    @enderror
    <br><br>

    <label for="">
      Message:<br>
      <textarea name="message" rows="10">{{ old('message') }}</textarea>
    </label><br>
    @error('message')
        {{ $message }}
    @enderror
    <br><br>
    
    <button type="submit">Create</button>
    <a href="{{ route('home') }}">Back</a>
  
  </form>

@endsection