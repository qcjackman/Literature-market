@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @include('editor::head')
                    <!-- 若使用了 laravelcollective/html package -->
                    <div class="editor">
                        <!-- 若使用html标签 ，直接使用textarea -->
                        <textarea id='myEditor'></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
