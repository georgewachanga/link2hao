@extends("layout.admin")

@section("content")

    <div class="container">

        {!! Form::model($owner, array('method' => 'put', 'route' => ['owner.update', $owner->id], 'class' => 'form')) !!}

        {{Form::label('fullname', 'full Name') }}
        {{Form::text('fullname', null, array('class'=>'form-control'))}}

        {{Form::label('phone', 'Phone') }}
        {{Form::text('phone', null, array('class'=>'form-control'))}}

        {{Form::submit('edit owner', array('class'=>'btn btn-success btn-lg btn-block '))}}
        {!! Form::close() !!}

    </div>
@endsection

