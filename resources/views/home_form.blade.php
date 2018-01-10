@extends('template.normal')
    @section('content_custom')
        <div class="container mar-top-30">
            <div class="row">
                <div class="col-md-6">
                    <form action="{{ ($form_type=='create')?url('/article/store'):url('/article/update', array($articles->id)) }}" method="post">
                        {{csrf_field()}}
                        <fieldset>
                            <legend class="mar-bot-20">{{($form_type=='create')?'CREATE':'UPDATE'}}</legend>
                            <div class="form-group {{$errors->has('title')?'has-danger':''}}">
                                <label for="title">Title</label>
                                <input type="text" class="form-control {{$errors->has('title')?'is-invalid':''}} " name="title" id="title"  placeholder="Title" value="{{ isset($articles->title)?$articles->title:'' }}">
                                <div class="invalid-feedback">{{$errors->has('title')?$errors->first('title'):''}}</div>
                            </div>
                            <div class="form-group {{$errors->has('description')?'has-danger':''}}">
                                <label for="description">Description</label>
                                <textarea  name="description" class="form-control {{$errors->has('title')?'is-invalid':''}} " id="description" placeholder="Description" cols="30" rows="5">{{ isset($articles->description)?$articles->description:'' }}</textarea>
                                <div class="invalid-feedback">{{$errors->has('description')?$errors->first('description'):''}}</div>
                            </div>
                            <div class="form-group">
                                <div class="row justify-content-md-center">
                                    <div class="col-md-2">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                    <div class="col-md-2">
                                        <a href="{{ url('/')}}" class="btn btn-secondary">Back</a>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    @stop