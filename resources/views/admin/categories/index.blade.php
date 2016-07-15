@extends("layout.admin")

@section("content")

        <!-- main content start-->
<div class="main-content">
    <h1>Displaying all owners</h1>







    <table class="table">

        <thead>
        <tr>
            <th>CATEGORY ID</th>
            <th>NAME</th>



        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>



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
