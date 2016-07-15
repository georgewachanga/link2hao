
 @extends("layout.admin")

@section("content")

        <!-- main content start-->
<div class="main-content">
    <h1>all locations here</h1>

    <table class="table">

        <thead>
        <tr>
            <th>LOCATION  ID</th>
            <th>NAME</th>



        </tr>
        </thead>
        <tbody>
        @foreach($locations as $location)
            <tr>
                <td>{{$location->id}}</td>
                <td> {{$location->name}}</td>



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


