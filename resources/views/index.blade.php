@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <!-- Blog articles -->
                @if (count($articles) > 0)
                    @foreach ($articles as $article)
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
                                    by <a href="{{ route('user_index', ['id' => $article->user->id]) }}">
                                        {{ $article->user->name }}
                                    </a> at {{ $article->created_at}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
