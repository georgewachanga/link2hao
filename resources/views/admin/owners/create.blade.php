@extends("layout.admin")

@section("content")

    <div class="container">

        {!! Form::open(array('route' => 'owner.store')) !!}




        {{Form::label('fname', 'first Name') }}
        {{Form::text('fname', null, array('class'=>'form-control'))}}

        {{Form::label('lname', 'last Name') }}
        {{Form::text('lname', null, array('class'=>'form-control'))}}

        {{Form::label('idno', 'idno') }}
        {{Form::text('idno', null, array('class'=>'form-control'))}}

        {{Form::label('email', 'email') }}
        {{Form::text('email', null, array('class'=>'form-control'))}}


        {{Form::label('password', 'password') }}
        {{Form::text('password', null, array('class'=>'form-control'))}}



        {{Form::submit('create a new locaton', array('class'=>'btn btn-success btn-lg btn-block '))}}
        {!! Form::close() !!}

    </div>
@endsection

