@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Product Attributes Task</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @include('menu')
                    <div class="text-center">
                        <img src="{{url('db.png')}}" class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
