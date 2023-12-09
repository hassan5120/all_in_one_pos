@extends('layouts.app')
@section('title', 'City Area')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>City Area
        <small>List</small>
    </h1>
    <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
    </ol> -->
</section>

<!-- Main content -->
<section class="content">
  
                <div class="box-tools">
                    <a type="button" class="btn btn-block btn-primary" href="{{route('create.area');}}">
                        <i class="fa fa-plus"></i> Add City Area</a>
                </div>
          
            <div class="table-responsive">
                <table class="table table-bordered table-striped" >
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>City</th>
                            <th>Area</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($cities as $city)
                      <tr>
                          <td>{{$city->id}}</td>
                          <td>{{$city->name}}</td>
                          <td>{{$city->area}}</td>
                          <td>

                          <a href="{{route('destory.area',['id'=>$city->id])}}" class="btn btn-danger">Delete</a>
                          </td>
                      </tr>
                      @endforeach
                    </tbody>
                </table>
            </div>
    

    <div class="modal fade brands_modal" tabindex="-1" role="dialog" 
    	aria-labelledby="gridSystemModalLabel">
    </div>

</section>
<!-- /.content -->

@endsection
