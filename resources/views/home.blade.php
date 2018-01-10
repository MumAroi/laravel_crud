@extends('template.normal')
    @section('content_custom')
    <div class="container mar-top-30">
        <div class="row">
        <legend class="mar-bot-20">CRUD</legend>
            @if(session('info'))
            <div class="alert alert-dismissible alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>{{session('info')}}</strong>
            </div>
            @endif
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>description</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                @if(count($articles) > 0 )
                    @foreach($articles as $article)
                        <tr>
                            <td>{{$article->id}}</td>
                            <td>{{$article->title}}</td>
                            <td>{{$article->description}}</td>
                            <td>
                                <a href='{{ url("article/read/{$article->id}") }}' class="btn btn-primary btn-sm" >read</a>
                                <a href='{{ url("article/edit/{$article->id}") }}' class="btn btn-success btn-sm" >update</a>
                                <a href='{{ url("article/delete/{$article->id}") }}' class="btn btn-danger btn-sm" >delete</a>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
    @stop
