@extends('layouts.app')
@section('title', 'Tasks list')
@section('content')
    @forelse($tasks as $task)
        <a href="{{route('tasks.show',['id' => $task->id])}}">{{$task -> title}}</a><br>
    @empty
        <h2>There are no tasks</h2>
    @endforelse

@endsection
