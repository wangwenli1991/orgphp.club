@extends('home.header')

@section('content')


    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>

                        <br>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">title</th>
                                <th scope="col">keywords</th>
                                <th scope="col">h1</th>
                                <th scope="col">author</th>
                                <th scope="col">content</th>
                                <th scope="col">created_at</th>
                                <th scope="col">updated_at</th>
                                <th scope="col">修改</th>
                                <th scope="col">删除</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($articles as $article)
                            <tr>
                                <th scope="row">{{ $article->id  }}</th>
                                <td>{{ $article->title  }}</td>
                                <td>{{ $article->keywords  }}</td>
                                <td>{{ $article->h1  }}</td>
                                <td>{{ $article->author  }}</td>
                                <td>{{ $article->h1  }}</td>
                                <td>{{ $article->created_at  }}</td>
                                <td>{{ $article->updated_at  }}</td>
                                <td><a href="">点击修改</a></td>
                                <td><a href="/delete/{{ $article->id }}">点击删除</a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>





                    @endguest
                </ul>
            </div>
        </div>
    </nav>



@endsection


