@extends('layout.admin')
@section('content')
    <div class="col-md-6">

        <link href="/css/dropzone.css" rel="stylesheet">

        <div class="adminn">

            {!! Form::open(array( 'url' => "/storeImage", 'method' => 'POST', 'files' => true , 'class' => 'dropzone', 'id' => 'headache')) !!}
            {!! Form::close() !!}

        </div>
        <script src="/js/dropzone.js"></script>
        <div>


        </div>
    </div>
@endsection