@extends('template.normal')
    @section('content_custom')
    <div class="container mar-top-30">
        <div class="row">
            <div class="col-md-6">
            {{csrf_field()}}
                <fieldset>
                    <legend class="mar-bot-20">CRUD</legend>
                    <div class="form-group">
                        <label for="exampleInputTitle">Title</label>
                        <input type="text" name="title" class="form-control" readonly id="exampleInputTitle" placeholder="Title"  value="{{ $articles->title }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDescription">Description</label>
                        <textarea  name="description" class="form-control"  readonly id="exampleInputDescription" placeholder="Description" cols="30" rows="5">{{ $articles->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <div class="col-md-2">
                            <a href="{{ url('/')}}" class="btn btn-secondary">Back</a>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
    @stop