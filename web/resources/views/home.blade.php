@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1>Hello, Literature!</h1>
                <p>Help you quickly find the documents you want</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <div class="caption">
                    <h3><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> Read</h3>
                    <p>Browse numerous professional literature</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <div class="caption">
                    <h3><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Writing</h3>
                    <p>Create your own work</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <div class="caption">
                    <h3><span class="glyphicon glyphicon-share" aria-hidden="true"></span> Share</h3>
                    <p>Share your knowledge and experience</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
