@extends('layout.admin')
@section('content')
    <div class="col-md-6">

        <link href="/css/dropzone.css" rel="stylesheet">

        <div class="adminn">

            {!! Form::open(array('route' => 'property.store', 'method' => 'POST', 'files' => true , 'class' => 'dropzone')) !!}




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

            {{Form::label('price', 'propty price') }}
            {{Form::text('price', null, array('class'=>'form-control'))}}

            {{Form::label('ownerIdNo', 'owner id no') }}
            {{Form::text('ownerIdNo', null, array('class'=>'form-control'))}}

            {!! Form::label('profile images') !!}
            {!! Form::file('images[]',array('multiple'=>true, 'id' => 'images_holder')) !!}
            <button type="button" onclick="add_more()" class="btn btn-default">Add more</button>
            <div id="dvFile">
            </div>

            {{Form::submit('create a new property', array('class'=>'btn btn-success btn-lg btn-block '))}}
            {!! Form::close() !!}

        </div>




        <script type="text/javascript">
            var i = 1;
            function add_more()
            {

                var input_txt = '<br><label for="fileInput">CHOOSE FILE<input name="images[]" multiple type="file" id="fileInput' + i + '" style="position: fixed; top: -100em;" onload="clickIt(event)" onchange="doSomething(event)"></label>';
                document.getElementById("dvFile").innerHTML += input_txt;

                document.getElementById("fileInput" + i).click();

                i ++;
            }
        </script>
        <script src="/js/dropzone.js"></script>
<div>


</div>
    </div>
    @endsection