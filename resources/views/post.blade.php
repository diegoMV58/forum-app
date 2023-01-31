@extends('layouts.master')

@section('content')
<link href="{{ asset('css/upload.css') }}" rel="stylesheet">
<div class="container">
  <div class="form-box">
    <h1>Create a new post</h1>
    <br>
  <form action="/post" method="post" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="content">Content</label>
        <textarea name="content" id="content" rows="10" class="form-control" required></textarea>
    </div>

    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image" id="image" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
</form>
</div>
</div>

@endsection