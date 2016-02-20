@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <h3>Write an article</h3>
                <form action="{{ url('/article/new') }}" method="POST" class="form-horizontal">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="title" class="col-sm-3 control-label">Title</label>

                        <div class="col-sm-6">
                            <input type="text" name="title" id="title" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="article" class="col-sm-3 control-label">Article</label>

                        <div class="col-sm-6">
                            <input type="text" name="article" id="article" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-plus"></i> Create an article
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
