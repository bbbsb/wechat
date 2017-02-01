@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
                <div class="panel-body">
                    <a href="{{url('/home/createArticle')}}">创建文章</a>
                </div>
                <div class="panel-body">
                    <a href="{{url('/home/articleList')}}">文章列表</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
