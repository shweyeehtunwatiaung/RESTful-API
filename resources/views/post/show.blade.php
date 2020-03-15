@extends('layouts.app')

@section('title')
    {{ $post->title }}
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mb-3">
            <div class="card">
                <div class="card-header">
                    {{ $post->title }}
                </div>
                <div class="card-body">
                    {{ $post->content }}
                </div>
                <div class="card-footer text-right">
                    <a href="{{ url("post") }}" class="btn btn-primary">
                        Back
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection