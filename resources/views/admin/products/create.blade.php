@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Add New Product <a href="/products" class="btn btn-success ml-3">Back to List</a></div>

                <div class="card-body">
                    @include('menu')
                    <form action="" method="post">
                        @csrf
                        <div class="form-input">
                            <label><strong>Name:</strong></label>
                            <input type="text" class="form-control" name="name" />
                        </div>
                        <div class="form-input mt-3">
                            <label><strong>Attributes:</strong></label>
                            <select name="attributes[]" class="form-control" multiple>
                                @if($attributes->count() > 0)
                                    @foreach ($attributes as $attribute)
                                        <optgroup label="{{$attribute->name}}">
                                            @if($attribute->options->count() > 0)
                                                @foreach ($attribute->options as $option)
                                                    <option value="{{$option->id}}">{{$option->name}}</option>
                                                @endforeach
                                            @endif
                                        </optgroup>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="form-input mt-3">
                            <button class="btn btn-success" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
