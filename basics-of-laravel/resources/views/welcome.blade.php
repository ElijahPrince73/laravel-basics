@extends('layout')


@section('title', 'Welcome')

@section('content')
  <h1>Welcome Page</h1>

  {{-- Regular way --}}
  <?php foreach ($tasks as $task): ?>
    <li><?= $task ?></li>
  <?php endforeach; ?>

  {{-- Blade way --}}
  @foreach ($tasks as $task)
    <li>{{$task}}</li>
  @endforeach
@endsection