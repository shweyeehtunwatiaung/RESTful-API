@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                       
                        RESTful Api
                </div>

                <div class="card-body">
                    <a href="{{ url('/post') }}">    
                        <h3> Post </h3>
                           
                    </a>
                    &&
                    <a href="{{ url('api/post') }}">    
                        <h3> Api Post </h3>
                    </a>
                </div>
                    <div class="card-footer">
                    This is RESTful Api!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
