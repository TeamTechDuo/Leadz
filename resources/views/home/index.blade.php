@extends('dashboard.index')
@section('content')
<!-- Sidebar  -->
 @include('home.partials.sidebar')
<!-- Page Content  -->
<div id="content">
    @include('home.partials.nav')


    <div id="content-wrapper">

        <div class="container-fluid">
    
            <!-- Breadcrumbs-->
             @include('home.partials.breadcrumbs')
    
            <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                <label>Particular</label>
                <input class="form-control" type="text" placeholder="Particular">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                <label>Excel</label>
                <input type="file" class="form-control-file border rounded py-1 px-1" id="exampleFormControlFile1">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                <label>PDF</label>
                <input type="file" class="form-control-file border rounded py-1 px-1" id="exampleFormControlFile1">
                </div>
            </div>
            <div class="col-md-2">
                <label>.</label>
                <button type="button" class="btn btn-outline-primary w-100">Upload</button>
            </div>
            </div>
    
            <!-- DataTables Example -->
           
        <!-- /.container-fluid -->
        @include('home.partials.datatable')
        <!-- Sticky Footer -->
        <footer>
            <div class="text-center mt-5">
                <span>Copyright © Data Resource BD 2019</span>
            </div>
        </footer>
    
    </div>
    <!-- /.content-wrapper -->
</div>
@endsection