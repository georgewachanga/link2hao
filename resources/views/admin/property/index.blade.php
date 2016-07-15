@extends("layout.admin")

@section("content")

        <!-- main content start-->
<div class="main-content">
   <h1>Displaying all properties</h1>







    <table class="table">

        <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>DESCRIPTION</th>
            <th>PRICE</th>
            <th>LOCATION</th>
            <th>CATEGORY</th>

        </tr>
        </thead>
        <tbody>
        @foreach($properties as $property)
        <tr>
            <td>{{$property->id}}</td>
            <td>{{$property->name}}</td>
            <td>{{$property->description}}</td>
            <td>{{$property->price}}</td>
            <td>{{$property->location}}</td>
            <td>{{$property->category}}</td>



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
