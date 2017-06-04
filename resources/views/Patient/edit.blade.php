@extends('layout.app')

@section('content')

    <div class="row">
        <div class="col-md-12">
            @if($errors->first())
                <div class="alert alert-dismissible alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h4><i class="icon fa fa-times"></i> Alert!</h4>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="col-md-8 col-md-offset-2">
            <h1>Edit Patient</h1>
            <br>
            <div class="box box-warning">
                <div class="box-body">
                    <form role="form" method="post" action="{{url('patients/'.$patient->id)}}">
                        {{csrf_field()}}
                        {{method_field('put')}}
                        <!-- name -->
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" value="{{$patient->name}}" placeholder="Enter name" name="name">
                        </div>

                        <!-- date of birth -->
                        <div class="form-group">
                            <label>Date of Birth</label>
                            <input type="date" class="form-control" value="{{$patient->date_of_birth}}" name="date_of_birth">
                        </div>

                        <!-- address -->
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" value="{{$patient->address}}" placeholder="Enter address" name="address">
                        </div>

                        <!-- complaints -->
                        <div class="form-group">
                            <label>Complaints</label>
                            <textarea class="form-control" rows="4" placeholder="Enter complaints" name="complaints">{{$patient->complaints}}</textarea>
                        </div>

                        <div class="form-group">
                            <input class="btn btn-warning btn-block" type="submit" value="Update Patient">
                        </div>

                    </form>
                </div>
            </div>

            <a href="{{url('patients/'.$patient->id)}}" class="btn btn-default">Back</a>

        </div>
    </div>

@endsection