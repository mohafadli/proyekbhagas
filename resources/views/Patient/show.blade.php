@extends('layout.app')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="box box-widget">
                <div class="box-header with-border">
                    <div class="user-block">
                        <img class="img-circle" src="https://dimg.voot.com/include/user-images/blank-user.jpg"
                             alt="User Image">
                        <span class="username"><strong>Mami Tutik</strong></span>
                        <span class="description">7:30 PM Today</span>
                    </div>
                </div>
                <div class="box-body">
                    <h4><strong>{{$patient->name}}</strong></h4>
                    <h2><strong>Age: {{$patient->age()}}</strong></h2>
                    <p>{{$patient->complaints}}</p>
                </div>

            </div>

            <div class="pull-right">
                <div class="btn-group">
                    <a href="{{url('patients/'.$patient->id.'/edit')}}" class="btn btn-warning">Edit</a>
                    <button type="button" class="btn btn-danger" onclick="event.preventDefault();
                    document.getElementById('delete-patient').submit()">Delete</button>
                </div>
            </div>

            <form id="delete-patient" method="post" action="{{url('patients/'.$patient->id)}}">
                {{csrf_field()}}
                {{method_field('delete')}}

            </form>

            <a class="btn btn-default" href="{{url('patients')}}">Back</a>
        </div>
    </div>

@endsection