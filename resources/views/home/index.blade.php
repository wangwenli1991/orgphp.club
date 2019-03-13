@extends('home.header')

@section('content')


section content

@foreach($articles as $article)

   标题: {{ $article->h1  }}



@endforeach

@endsection


