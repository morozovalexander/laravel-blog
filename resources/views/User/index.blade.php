@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h2><b>{{ $user->name }}</b>'s articles</h2>
                @if (count($user->articles) > 0)
                    @foreach ($user->articles as $article)
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3>
                                    <a href="{{ route('show_article', ['id' => $article->id]) }}">
                                        {{ $article->title }}
                                    </a>
                                </h3>
                            </div>
                            <div class="panel-body">
                                <p>{{ $article->article }}</p>
                            </div>
                            <div class="panel-footer">
                                <div class="text-right">
                                    by <a href="{{ route('user_index', ['id' => $article->id]) }}">
                                        {{ $user->name }}
                                    </a> at {{ $article->created_at}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    no articles yet
                @endif
            </div>
        </div>
    </div>
@endsection
