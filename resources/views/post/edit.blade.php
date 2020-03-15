@extends('layouts.app')

@section('title', 'Create Post')

@section('content')
<div class="container">
    <div class="col-md-12">
        @include('messages.alerts')
        <div class="card">
            <div class="card-header">Update Post</div>
            <div class="card-body">
                <form action="{{ url("post/$post->id/edit") }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" value="{{ $post->title }}">
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea class="form-control" name="content" rows="3">
                            {{ $post->content }}
                        </textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection