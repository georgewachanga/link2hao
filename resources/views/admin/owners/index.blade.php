@extends("layout.admin")

@section("content")


    <div id="page-wrapper">
        <div class="graphs">
            <h3 class="blank1">SHOWING INFORMATION ABOUT ALL REGISTERED  OWNERS</h3>
            <div class="xs tabls">

                <div class="bs-example4" data-example-id="simple-responsive-table">
                    <div class="table-responsive">


                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>FNAME</th>
                                <th>LNAME</th>
                                <th>OWNER ID</th>
                                <th>EMAIL</th>
                                <th>PASSWORD</th>
                                <th>ACTION</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($owners as $owner)
                                <tr>
                                    <th scope="row">{{$owner->id}}</th>
                                    <td>{{$owner->fname}}</td>
                                    <td>{{$owner->lname}}</td>
                                    <td>{{$owner->idno}}</td>
                                    <td>{{$owner->email}}</td>
                                    <td>{{$owner->password}}</td>
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