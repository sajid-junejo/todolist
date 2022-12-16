@extends('layouts.app')

@section('content')
<h1> Edit Todo </h1>
<form method="Post" action="/todos/{{ $todo->id }}">
    @csrf
    @method('put')
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" value="{{ $todo->title }}">
    </div>

    <div class="form-group">
        <label for="content">Content</label>
        <input type="text" width="" class="form-control" id="title" name="content" placeholder="Enter Content" value="{{ $todo->content }}">
      </div>

      <div class="form-group">
        <label for="due">Due</label>
        <input type="text" width="" class="form-control" id="content" name="due" placeholder="Enter Due" value="{{ $todo->due }}">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection