@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Add New Attribute <a href="/attributes" class="btn btn-success ml-3">Back to List</a></div>

                <div class="card-body">
                    @include('menu')
                    <form action="" method="post">
                        @csrf
                        <div class="form-input">
                            <label><strong>Name:</strong></label>
                            <input type="text" class="form-control" name="name" />
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

