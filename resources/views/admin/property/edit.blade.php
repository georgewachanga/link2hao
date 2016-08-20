@extends('layout.admin')
@section('content')
    <div class="col-md-6">

        <link href="/css/dropzone.css" rel="stylesheet">

        <div class="adminn">

            {!! Form::model($property, array('method' => 'put', 'route' => ['property.update', $property->id], 'class' => 'form')) !!}

            {{Form::label('name', 'propety Name') }}
            {{Form::text('name', null, array('class'=>'form-control'))}}

            {{Form::label('category', 'prop category') }}
            {{Form::select('category', $categories, null, array('class'=>'form-control'))}}

            {{Form::label('location', 'property Location') }}
            {{Form::select('location', $locations, null, array('class'=>'form-control'))}}

            {!! Form::label('Features') !!}
            {{ Form::select('features', $features, null, array('multiple'=>'multiple','name'=>'features[]', 'class' => 'form-control')) }}

            {{Form::label('description', 'property desc:') }}
            {{Form::text('description', null, array('class'=>'form-control'))}}

            {{Form::label('price', 'property price') }}
            {{Form::text('price', null, array('class'=>'form-control'))}}

            {{Form::label('owner fullname', 'owner name') }}
            {{Form::text('fullname', null, array('class'=>'form-control'))}}

            {{Form::label('owner number', 'owner mobile') }}
            {{Form::text('phone', null, array('class'=>'form-control'))}}

            {{Form::label('units', 'number of units available') }}
            {{Form::text('units', null, array('class'=>'form-control'))}}

            {!! Form::label('profile images') !!}
            {!! Form::file('images[]',array('multiple'=>true, 'id' => 'images_holder')) !!}
            {{Form::submit('update property', array('class'=>'btn btn-success btn-lg btn-block '))}}
            {!! Form::close() !!}

        </div>

        <div>


        </div>
    </div>
@endsection