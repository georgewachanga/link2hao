@extends("layout.admin")

@section("content")


    {!! Form::open(array('route' => 'owner.store')) !!}

    {!! Form::open([method=>'post', action=>'ownerController@store']) !!}
    {{Form::label('phone', 'phone no.') }}
    {{Form::text('phone', null, array('class'=>'form-control'))}}

    {{Form::label('idno', 'id no:') }}
    {{Form::text('idno', null, array('class'=>'form-control'))}}

    {{Form::label('location', 'location:') }}
    {{Form::text('location', null, array('class'=>'form-control'))}}


    {{Form::submit('send to database', array('class'=>'btn btn-success btn-lg btn-block '))}}
    {!! Form::close() !!}
@endsection

