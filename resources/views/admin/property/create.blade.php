@extends('layout.master')
@section('content')
    <div>

        <div>

            {!! Form::open(array('route' => 'property.store', 'method' => 'POST', 'files' => true )) !!}




            {{Form::label('name', 'propety Name') }}
            {{Form::text('name', null, array('class'=>'form-control'))}}

            {{Form::label('category', 'prop category') }}
            {{Form::select('category', $categories, null, array('class'=>'form-control'))}}

            {{Form::label('location', 'propty Location') }}
            {{Form::select('location', $locations, null, array('class'=>'form-control'))}}

            {!! Form::label('Features') !!}
            {{ Form::select('features', $features, null, array('multiple'=>'multiple','name'=>'features[]', 'class' => 'form-control')) }}

            {{Form::label('description', 'property desc:') }}
            {{Form::text('description', null, array('class'=>'form-control'))}}

            {{Form::label('price', 'propty price') }}
            {{Form::text('price', null, array('class'=>'form-control'))}}

            {{Form::label('ownerIdNo', 'owner id no') }}
            {{Form::text('ownerIdNo', null, array('class'=>'form-control'))}}

            {!! Form::label('profile images') !!}
            {!! Form::file('images[]',array('multiple'=>true)) !!}

            {{Form::submit('create a new property', array('class'=>'btn btn-success btn-lg btn-block '))}}
            {!! Form::close() !!}

        </div>
<div>


</div>
    </div>
    @endsection