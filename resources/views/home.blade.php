@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!<br>
                    <a href='{{route('blogetc.index')}}'
                    class='btn border  btn-outline-primary btn-sm '>
                    <i class="fa fa-cogs" aria-hidden="true"></i>Go to Blog</a>
                    <br>

                    <a href='{{route("blogetc.admin.index")}}'
                        class='btn border  btn-outline-primary btn-sm '>
                            <i class="fa fa-cogs" aria-hidden="true"></i>
                    Go To Blog Admin Panel</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
