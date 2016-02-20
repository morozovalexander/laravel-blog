@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>
                            {{ $article->title }}
                        </h3>
                    </div>
                    <div class="panel-body">
                        <p>{{ $article->article }}</p>
                    </div>
                    <div class="panel-footer">
                        <div class="text-right">
                            by <b>{{ $article->user->name }}</b> at {{ $article->date }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
