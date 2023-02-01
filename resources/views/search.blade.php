@extends('layouts.master')
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
@section('content')

<div class="container border border-dark rounded">
  
<div class="row"><div class="col"><h1>Forum Posts</h1> </div><div class="col">
@if(auth()->check() )
 <a href="post"><button type="submit" class="create-post btn btn-info">Create a new post</button></a>
 @endif
</div></div>
  <hr>
    <div class="border border-dark rounded">
    <br>
    <div class="form-group"><a href="?sort=created_at&dir=desc"><span>Recent posts</span></a> - <a href="?sort=created_at&dir=asc"><span>oldest posts</span></a>
    
    </div>
    <hr>
    <form  method="GET" action="/search">
    <div class="form-group">
    <label for="query">Search by title</label>
    <input type="text" class="form-control" id="query" name="query" placeholder="Enter title" value="{{$query}}">
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  
</form>
    
  </div>
  <br>
<table class="table table-bordered table-hover table-sm table-responsive rounded-top" >
  <thead class="thead-dark">
    <tr>
      <th>User</th>
      <th>Title<a href="?sort=title&dir=asc&query={{$query}}"><span class="material-symbols-outlined">
      arrow_upward
</span></a><a href="?sort=title&dir=desc&query={{$query}}"><span class="material-symbols-outlined">
      arrow_downward
</span></a></th>
      <th>Content</th>
      <th>Image</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $item)
    <tr>
      
      <td><img src="{{ asset('img/portrait.jpg')}}" class="img-thumbnail"> {{$item->username }}<br>{{ $item->created_at }}</td>

      <td class="align-middle"><a href="thread?id={{$item->id}}" class="alert-link text-primary">{{ $item->title }}</a></td>
      <td class="align-middle"><a href="thread?id={{$item->id}}">{{ $item->content }}</td>
      <td><img src="{{ asset($item->image_src)}}" alt=""></td>

    </tr>
    @endforeach
  </tbody>
</table>
{{-- Pagination --}}
        <div class="d-flex justify-content-center">
        {{ $data->appends($_GET)->links() }}
        </div>
        <br>
</div>
@endsection

