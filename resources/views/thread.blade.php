@extends('layouts.master')
@section('content')
<link href="{{ asset('css/thread.css') }}" rel="stylesheet">

<div class="container border border-dark rounded">
    <br>

<div class="row">
    <div class="col-sm-10">
        <h3>Thread #{{$topic->id}}</h3>
    </div>
    <div class="col-sm-2">
    @if(auth()->check() )
 <a href="response?id={{$topic->id}}"><button type="submit" class="create-post btn btn-info">reply to thread</button></a>
 @endif
    </div>
</div>
<hr>
<div class="row"><div class="col-sm-2"><img src="{{ asset('img/portrait.jpg')}}" class="img-thumbnail"> {{$topic->username }}<br>{{ $topic->created_at }}</div>
<div class="col-sm-7 border rounded"><p><b>{{ $topic->title }}</b></p>
<p>{{ $topic->content }}</p>
</div>
<div class="col-sm-3 border "><img src="{{ asset($topic->image_src)}}" alt=""></div>
</div>

<hr>
    
    <table class="table table-bordered table-hover table-sm table-responsive rounded-top" >
  <thead class="thead-dark">
    <tr>
      <th colspan="3">Replies</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($answers as $answer)
    <tr>
      
      <td class="user"><img src="{{ asset('img/portrait.jpg')}}" class="img-thumbnail"> {{$answer->username }}<br>{{ $answer->created_at }}</td>

      @if($answer->image_src != 'no_image')
      <td class="align-middle reply">{{ $answer->content }}</td>
      
      <td class="image"><img src="{{ asset($answer->image_src)}}" alt=""></td>
      @else
      <td class="align-middle reply" colspan="2">{{ $answer->content }}</td>
      @endif
    </tr>
    @endforeach
  </tbody>
</table>
{{ $answers->appends($_GET)->links() }}
</div>


@endsection