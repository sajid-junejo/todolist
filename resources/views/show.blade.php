@extends('layouts.app')

@section('content')
<a href="/" class="btn btn-secondary mt-2">Go Back</a>
<h1> {{ $todos->title }} </h1>
<div class="badge bg-danger">{{ $todos->due }}</div>
<hr>
<h2> {{ $todos->content }} </h2>
<a href="/todos/{{ $todos->id }}/edit" class="btn btn-primary mt-2">Edit</a>
<Form method="post"  action="/todos/{{ $todos->id }}">
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Delete </button>
</Form>
{{-- <a href="/todos/{{ $todos->id }}/edit" class="btn btn-primary mt-2 float-right">Delete</a> --}}
@endsection