@extends('layouts.master')

@section('content')
<link href="{{ asset('css/upload.css') }}" rel="stylesheet">
<div class="container">
  <div class="form-box">
    <h1>reply to post # {{$topic->id}}</h1>
    <br>
  <form action="/response" method="post" enctype="multipart/form-data">
    @csrf


    <div class="form-group">
        <label for="reply">Reply</label>
        <textarea name="reply" id="reply" rows="10" class="form-control" required></textarea>
    </div>

    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image" id="image" class="form-control">
    </div>
    <input type="hidden" name="id" id="id" class="form-control" value="{{$topic->id}}">
    <button type="submit" class="btn btn-primary">Save</button>
</form>
</div>
</div>

@endsection