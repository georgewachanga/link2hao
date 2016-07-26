@extends("layout.admin")

@section("content")



    <div class="container">

        {!! Form::open(array('route' => 'location.store')) !!}




        {{Form::label('name', 'Location Name') }}
        {{Form::text('name', null, array('class'=>'form-control'))}}



        {{Form::submit('create a new locaton', array('class'=>'btn btn-success btn-lg btn-block '))}}
        {!! Form::close() !!}

    </div>





@endsection

