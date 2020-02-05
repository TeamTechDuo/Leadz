@extends('dashboard.index')
@section('content')
<!-- Sidebar  -->
 
<!-- Page Content  -->


<div class="container-fluid">

    <!-- Breadcrumbs-->
        @include('country.partials.breadcrumbs')

    <div class="row">
    <div class="col-md-4">
        <div class="form-group">
        <label>Name</label>
        <input class="form-control" type="text" placeholder="Enter Country Name">
        </div>
    </div>
    <div class="col-md-2">
        <label>&nbsp</label>
        <button type="button" class="btn btn-outline-primary w-100">Upload</button>
    </div>
</div>

    <!-- DataTables Example -->
    
<!-- /.container-fluid -->
@include('country.partials.datatable')
<!-- Sticky Footer -->

@endsection