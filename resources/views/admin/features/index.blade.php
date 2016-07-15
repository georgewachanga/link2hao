@extends("layout.admin")

@section("content")

        <!-- main content start-->
<div class="main-content">
    <h1>Displaying all owners</h1>







    <table class="table">

        <thead>
        <tr>
            <th>FEATURE ID</th>
            <th>NAME</th>



        </tr>
        </thead>
        <tbody>
        @foreach($features as $feature)
            <tr>
                <td>{{$feature->id}}</td>
                <td>{{$feature->name}}</td>




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
