@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Attributes Options List <a href="/attributes-options/create" class="btn btn-success ml-3">Add New</a></div>

                <div class="card-body">
                    @include('menu')
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th>Name</th>
                                    <th>Attribute</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($attributeOptions->count() > 0)
                                    @foreach ($attributeOptions as $attributeOption)
                                        <tr>
                                            <td>{{$attributeOption->id}}</td>
                                            <td>{{$attributeOption->name}}</td>
                                            <td>{{$attributeOption->attribute->name}}</td>
                                            <td>
                                                <a href="/attributes-options/delete/{{$attributeOption->id}}" class="btn btn-sm btn-danger">Delete</a>
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
