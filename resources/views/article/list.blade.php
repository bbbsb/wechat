@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table">
            <tr>
                <td>文章名称</td>
                <td>文章封面</td>
                <td>编辑文章</td>
            </tr>
            @if(empty($articles->all()))
                <tr>
                    <td colspan="3" style="text-align: center"><h2>还未创建文章</h2></td>
                </tr>
            @else
                @foreach($articles->all() as $item)
                    <tr>
                        <td>{{$item->title}}</td>
                        <td>{{$item->image}}</td>
                        <td>
                                <a class="btn btn-info" href="{{url('/home/editArticle/'.$item->id)}}">编辑</a>
                                <a class="btn btn-danger" href="{{url('/home/deleteArticle/'.$item->id)}}">删除</a>
                        </td>
                    </tr>
                @endforeach
            @endif

        </table>
    </div>
@endsection