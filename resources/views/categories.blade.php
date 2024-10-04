
@extends('layouts.main')

@section('container')
   <h1 class="mb-5">{{ $title }}</h1>
   @foreach ($content as $cont)
   <ul>
      <li><h2><a href="/categories/{{ $cont->slug }}">{{ $cont->name }}</a></h2></li>
   </ul>
   @endforeach
@endsection