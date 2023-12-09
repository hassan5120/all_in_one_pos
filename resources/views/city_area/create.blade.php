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
                    <a type="button" class="btn btn-block btn-primary btn-modal" href="">
                        <i class="fa fa-plus"></i> Add City Area</a>
                </div>
          
                
                {!! Form::open(['url' => action([\App\Http\Controllers\CityAreaController::class, 'store']), 'method' => 'post', 'id' => 'city_area', 'files' => false ]) !!}

                <div class="box box-solid">
                  <div class="box-body">
                          <div class="row">
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label>Cities</label>
                              <select class='form-control select2' name="city_id">

                                <option value="">Select City</option>
                                @foreach($cities as $city)
                                <option value="{{$city->id}}">{{$city->name}}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label>Area</label>
                              <input type="text" class="form-control" placeholder="Area" name="area"/>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group">
                                <input type="submit" class="form-control btn-primary" value="Save"/>
                            </div>
                          </div>
                          </div>
                    </div>
                </div>

                {!! Form::close() !!}
    

    <div class="modal fade brands_modal" tabindex="-1" role="dialog" 
    	aria-labelledby="gridSystemModalLabel">
    </div>

</section>
<!-- /.content -->
@endsection