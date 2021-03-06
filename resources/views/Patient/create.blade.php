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
            <h1>New Patient</h1>
            <br>
            <div class="box box-success">
                <div class="box-body">
                    <form role="form" method="post" action="{{url('patients')}}">
                        {{csrf_field()}}
                        <!-- Name -->
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Enter name" name="name">
                        </div>

                        <!-- Date of Birth -->
                        <div class="form-group">
                            <label>Date of Birth</label>
                            <input type="date" class="form-control" name="date_of_birth">
                        </div>

                        <!-- Address -->
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" placeholder="Enter address" name="address">
                        </div>

                        <!-- Complaints -->
                        <div class="form-group">
                            <label>Complaints</label>
                            <textarea class="form-control" rows="4" placeholder="Enter complaints" name="complaints"></textarea>
                        </div>

                        <div class="form-group">
                            <input class="btn btn-success btn-block" type="submit" value="Submit Patient">
                        </div>

                    </form>
                </div>
            </div>

            <a href="{{url('patients')}}" class="btn btn-default">Back</a>

        </div>
    </div>

@endsection