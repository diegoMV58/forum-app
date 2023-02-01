@extends('layouts.master')

<link href="{{ asset('css/home.css') }}" rel="stylesheet">
@section('content')

<div class="container border border-dark rounded">
  
  <h1>Recent posts</h1>
  <hr>
<table class="table table-bordered table-hover table-sm table-responsive rounded-top" >
  <thead class="thead-dark">
    <tr>
      <th>User</th>
      <th>Title</th>
      <th>Content</th>
      <th>Image</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $item)
    <tr>
      
      <td><img src="{{ asset('img/portrait.jpg')}}" class="img-thumbnail"> {{$item->username }}<br>{{ $item->created_at }}</td>

      <td class="align-middle"><a href="#" class="alert-link text-primary">{{ $item->title }}</a></td>
      <td class="align-middle"><a href="#">{{ $item->content }}</td>
      <td><img src="{{ asset($item->image_src)}}" alt=""></td>

    </tr>
    @endforeach
  </tbody>
</table>
{{-- Pagination --}}
        <div class="d-flex justify-content-center">
            {!! $data->links() !!}
        </div>
</div>

@endsection

