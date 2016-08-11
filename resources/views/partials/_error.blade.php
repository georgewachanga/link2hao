@if(Session::has('message'))
    <div class='alert alert-info fade in alert-autoclose'>
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <h3 style="text-align: center">{{ Session::get('message') }}</h3>
    </div>
@endif
@if(Session::has('success'))
    <div class='alert alert-success fade in alert-autoclose'>
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <h3 style="text-align: center">{{ Session::get('success') }}</h3>
    </div>
@endif
@if(count($errors) > 0)
    <div class='alert alert-warning fade in'>
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        @foreach($errors->all() as $error )
            <h3 style="text-align: center">{{ $error }}</h3>
        @endforeach
    </div>

@endif
