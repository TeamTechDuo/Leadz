@extends('dashboard.index')
@section('content')
<!-- Sidebar  -->
 
<!-- Page Content  -->


<div class="container-fluid">

    <!-- Breadcrumbs-->
        @include('country.partials.breadcrumbs')

        <form action="{{route('countries.store')}}" method="POST"> 
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" type="text" name="name" placeholder="Enter Country Name" value="{{old('name')}}" required>
                    </div>
                </div>
                <div class="col-md-2">
                    <label>&nbsp</label>
                    <button type="submit" class="btn btn-outline-primary w-100">Submit</button>
                </div>
            </div>
        </form>

    <!-- DataTables Example -->
    
<!-- /.container-fluid -->
@include('country.partials.datatable')
<!-- Sticky Footer -->

@endsection