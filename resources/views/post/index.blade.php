@extends('layouts.app')

@section('title', 'All Posts')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @include('messages.alerts')
        </div>
        <div class="col-md-12">         
            <a class="btn btn-primary mb-3 float-right" href="{{ url('post/create') }}" >
                Create
            </a>
        </div>
    </div>
    <div class="row">
        @foreach ($posts as $post)
        <div class="col-md-12 mb-3">
            <div class="card">
                <div class="card-header">
                    {{ $post->title }}
                </div>
                <div class="card-body">
                    {{ str_limit($post->content, 100) }}
                </div>
                <div class="card-footer text-right">
                    <a href="{{ url("post/$post->id") }}" class="btn btn-primary">
                        View
                    </a>
                    <a href="{{ url("post/$post->id/edit") }}" class="btn btn-success">
                        Edit
                    </a>
                    <a href="{{ url("post/$post->id/delete") }}" class="btn btn-danger">
                        Delete
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection