@extends('home.header')

@section('content')


{{--{{ dd($articles) }}--}}
<ul class="list-group">


    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">2013</a></li>
        <li class="active">十一月</li></ol>

@foreach($articles as $article)


{{--   标题: {{ $article->h1  }}--}}

      <li class="list-group-item">
         <b>title:</b>{{ $article->title }}
         <b>关键词:</b>{{ $article->keywords  }}
         <b><span class="badge">标题:</span></b>{{ $article->h1 }}
         <b>作者:</b> {{ $article->author  }} <b>关键词:</b>{{ $article->keywords  }}
         <span class="badge">新</span>
      </li>

@endforeach
</ul>


@endsection


