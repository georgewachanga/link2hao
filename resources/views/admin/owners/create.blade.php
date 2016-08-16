@extends("layout.admin")

@section("content")

    <div class="container">

        {!! Form::open(array('route' => 'owner.store')) !!}




        {{Form::label('fullname', 'full Name') }}
        {{Form::text('fullname', null, array('class'=>'form-control'))}}

        {{Form::label('phone', 'Phone') }}
        {{Form::text('phone', null, array('class'=>'form-control'))}}

        {{Form::submit('create a new owner', array('class'=>'btn btn-success btn-lg btn-block '))}}
        {!! Form::close() !!}

    </div>
@endsection

