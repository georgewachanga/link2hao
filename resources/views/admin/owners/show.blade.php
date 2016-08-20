@extends("layout.admin")

@section("content")

    <div class="container">

        <div class="jumbotron">
            <h3>Name : <span style="padding-left: 4em;"></span>{{ $owner->fullname }}</h3>
            <hr>
            <h3>Phone : <span style="padding-left: 4em;"></span>{{ $owner->phone }}</h3>
            <hr>
            <h3><a href="/owner/{{ $owner->id }}/edit">Edit</a> </h3>
        </div>

    </div>
@endsection

