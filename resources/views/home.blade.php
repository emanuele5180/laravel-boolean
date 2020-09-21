@extends('layouts.main-layout')


@section('content')

  {{-- <h1>{{$data[0]['titolo']}}</h1> --}}
  @foreach ($data as $pasta)

    @if ($pasta['tipo'] == 'lunga')
      <div class="imgbox">
        <img src="{{$pasta['src']}}" alt="pasta lunga">        
      </div>
    @endif
  @endforeach

@endsection


@section('content1')

  {{-- <h1>{{$data[0]['titolo']}}</h1> --}}
  @foreach ($data as $pasta)

    @if ($pasta['tipo'] == 'corta')
      <div class="imgbox">
        <img src="{{$pasta['src']}}" alt="pasta corta">
      </div>
    @endif
  @endforeach

@endsection



@section('content2')

  {{-- <h1>{{$data[0]['titolo']}}</h1> --}}
  @foreach ($data as $pasta)

    @if ($pasta['tipo'] == 'cortissima')
      <img src="{{$pasta['src']}}" alt="pasta cortissima">
    @endif
  @endforeach

@endsection
