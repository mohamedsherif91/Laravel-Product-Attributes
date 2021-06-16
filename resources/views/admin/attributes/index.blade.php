@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Attributes List <a href="/attributes/create" class="btn btn-success ml-3">Add New</a></div>

                <div class="card-body">
                    @include('menu')
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th>Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($attributes->count() > 0)
                                    @foreach ($attributes as $attribute)
                                        <tr>
                                            <td>{{$attribute->id}}</td>
                                            <td>{{$attribute->name}}</td>
                                            <td>
                                                <a href="/attributes/delete/{{$attribute->id}}" class="btn btn-sm btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
