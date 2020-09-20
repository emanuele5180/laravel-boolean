@extends('layouts.main-layout')


@section('content')

  <h1>{{$data[0]['titolo']}}</h1>
  @foreach ($data as $pasta)

    @if ($pasta['tipo'] == 'corta')
      <img src="{{$pasta['src']}}" alt="">
    @endif
  @endforeach

@endsection
