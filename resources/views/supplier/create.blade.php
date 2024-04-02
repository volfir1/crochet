<!-- resources/views/supplier/create.blade.php -->
@extends('supplier.css.createsuppliercss')
@extends('layouts.app') <!-- Assuming you have a layout file -->

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                

                <div class="card-body">
                <div class="card-header">Create Supplier</div>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <div class="formpos">
                    <form method="POST" action="{{ route('supplier.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group1">
                            <label for="name">Supplier Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>

                        <div class="form-group2">
                            <label for="email">Supplier Email</label>
                            <textarea class="form-control" id="email" name="email" rows="3" required></textarea>
                        </div>

                        <div class="form-group3">
                            <label for="contactno">Contact Number</label>
                            <input type="text" class="form-control" id="contactno" name="contactno" required>   
                        </div>

                        <div class="form-group4">
                            <label for="img">Images</label>
                            <input type="file" class="form-control-file" id="img" name="img[]" multiple required accept="image/*">
                        </div>

                        <button type="submit" class="btn btn-primary" id="form-button">Create Supplier</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection