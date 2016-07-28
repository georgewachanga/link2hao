@extends("layout.admin")

@section("content")


    <div id="page-wrapper">
        <div class="graphs">
            <h3 class="blank1">SHOWING INFORMATION ABOUT ALL REGISTERED  PROPERTIES</h3>
            <div class="xs tabls">

                <div class="bs-example4" data-example-id="simple-responsive-table">
                    <div class="table-responsive">


                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>CATEGORY</th>
                                <th>LOCATION</th>
                                <th>PRICE</th>
                                <th>DESCRIPTION</th>
                                <th>OWNER ID</th>
                                <th>ACTION</th>
                            </tr>
                            </thead>
                            <tbody>
                        @foreach($properties as $property)
                            <tr>
                                <th scope="row">{{$property->id}}</th>
                                <td>{{$property->name}}</td>
                                <td>{{$property->category}}</td>
                                <td>{{$property->location}}</td>
                                <td>{{$property->price}}</td>
                                <td>{{$property->description}}</td>
                                <td>{{$property->ownerIdNo}}</td>
                                <td>..ACTIONS...</td>
                            </tr>
                        @endforeach
                            </tbody>
                        </table>

                    </div><!-- /.table-responsive -->

                </div>
            </div>
        </div>
    </div>
    </div>

@endsection