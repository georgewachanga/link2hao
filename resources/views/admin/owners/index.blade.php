@extends("layout.admin")

@section("content")

        <!-- main content start-->
<div class="main-content">
    <h1>Displaying all owners</h1>







    <table class="table">

        <thead>
        <tr>
            <th>ID</th>
            <th>IDNO</th>
            <th>PHONE</th>
            <th>LOCATION</th>


        </tr>
        </thead>
        <tbody>
        @foreach($owners as $owner)
            <tr>
                <td>{{$owner->id}}</td>
                <td>{{$owner->idno}}</td>
                <td>{{$owner->phone}}</td>
                <td>{{$owner->location}}</td>



            </tr>
            @endforeach

                    <!--tr class="success">
            <th scope="row">3</th>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>

        </tr-->

        </tbody>

    </table>












</div>

@endsection
