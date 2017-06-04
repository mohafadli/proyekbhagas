<!-- This is patient index -->
@extends('layout.app')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Patients</h1>
            <hr>

            @foreach($patients as $items)
                <div class="attachment-block clearfix">
                    <img class="attachment-img"
                         src="https://thumb7.shutterstock.com/display_pic_with_logo/2266028/282784619/stock-vector-newspaper-icon-282784619.jpg"
                         alt="Attachment Image">

                    <div class="attachment-pushed">
                        <h4 class="attachment-heading"><a href="{{url('patients/'.$items->id)}}">{{$items->name}}</a>
                        </h4>

                        <div class="attachment-text">
                            <h5>Age: {{$items->age()}}</h5>
                        </div>
                    </div>
                </div>
            @endforeach

            <hr>
            <a href="{{url('patients/create')}}" class="btn btn-success btn-block">New Patient</a>
        </div>
    </div>

@endsection