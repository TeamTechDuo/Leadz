@extends('dashboard.index')
@section('content')
<!-- Sidebar  -->
 
<!-- Page Content  -->


<div class="container-fluid">

    <!-- Breadcrumbs-->
        @include('country.partials.breadcrumbs')

        <form action="{{route('country.update', $country->id)}}" method="POST"> 
            @csrf
            @method('patch')
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" type="text" name="name" placeholder="Enter Country Name" value="{{$country->name}}" required>
                    </div>
                </div>
                <div class="col-md-2">
                    <label>&nbsp</label>
                    <button type="submit" class="btn btn-outline-primary w-100">Submit</button>
                </div>
            </div>
        </form>

@endsection