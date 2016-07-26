@extends("layout.admin")

@section("content")
    <div class="container">

        {!! Form::open(array('route' => 'category.store')) !!}




        {{Form::label('name', 'Category Name') }}
        {{Form::text('name', null, array('class'=>'form-control'))}}



        {{Form::submit('create a new category', array('class'=>'btn btn-success btn-lg btn-block '))}}
        {!! Form::close() !!}

    </div>

@endsection

