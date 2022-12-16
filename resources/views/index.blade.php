@extends('layouts.app')

@section('content')
<h1> Todos </h1>
@if (count($todos)>0)
   @foreach($todos as $todo)
     <div class="card m-2">
        <h2><a href="todo/{{ $todo->id }}">{{ $todo->title }} </a></h2>
        <h2> {{ $todo->content }} </h2>
        <span class="badge bg-danger">{{ $todo->due }}</span>
        {{-- <h2>{{ $todo->due }}</h2> --}}
     </div>
    
   @endforeach
@endif
@endsection