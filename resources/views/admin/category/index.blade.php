@extends("layout.admin")

@section("content")


    <div id="page-wrapper">
        <div class="graphs">
            <h3 class="blank1">SHOWING ALL CATEGORIES</h3>
            <div class="xs tabls">

                <div class="bs-example4" data-example-id="simple-responsive-table">
                    <div class="table-responsive">


                        <table class="table">
                            <thead>
                            <tr>
                                <th>CATEGORY id</th>
                                <th>CATEGORY NAME</th>
                                <th>ACTION</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <th scope="row">{{$category->id}}</th>
                                    <td>{{$category->name}}</td>

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