@extends('layout.admin')
@section('content')
    <div class="col-md-6">

        <link href="/css/dropzone.css" rel="stylesheet">

        <div class="adminn">

            {!! Form::open(array( 'action' => "PropertyController@storeImages", 'class' => 'dropzone', 'id' => 'my-dropzone','files' => true)) !!}
                <div class="fallback">
                    <input name="file" type="file"/>
                </div>
            {!! Form::hidden('property_id',$property->id, array('id' => 'property_id')) !!}
            {!! Form::close() !!}

            {!! Form::hidden('csrf-token', csrf_token(),['id' => 'csrf-token']) !!}
        </div>
        <script src="/js/dropzone.js" type="text/javascript"></script>
        <script type="text/javascript">

            Dropzone.options.myDropzone = {

                addRemoveLinks:true,
                dictRemoveFile: 'Remove',

                //setting up the dz
                init:function() {
                    this.on('removedfile', function(file){
                        $.ajax({
                           type: 'POST',
                            url: '/upload/delete',
                            data: {id: file.new_name, _token: $('#csrf-token').val()},
                            dataType: 'html',
                            success: function(data){
                                var rep = JSON.parse(data);
                                if(rep.code == 200)
                                {
                                    console.log(rep.message);
                                }
                            }
                        });
                    });

                    $.ajax({
                        type: 'GET',
                        url: '/property/' + $('#property_id').val() + "/images",
                        success: function ( data) {
                            //var repe = JSON.parse(data);
                            var images = data;
                            if(images.length > 0){
                                var dz = Dropzone.forElement('#my-dropzone');
                                for(var i = 0; i <images.length; i++)
                                {
                                    image = { name: images[i], new_name : images[i]};
                                    image.accepted = true;
                                    dz.files.push(image);
                                    dz.emit('addedfile', image);
                                    dz.createThumbnailFromUrl(image, '/uploads/' + image.name);
                                    dz.emit('complete', image);
                                }
                            }
                        }
                    });
                },

                success:function(file, response) {
                    file.new_name = response.image_name;
                }
            }

            $('myDropZone').on("sending", function(file, xhr, formData){
                formData.append('property_id', $('property_id').val());
            });
            $('myDropZone').on("error", function(){
                Array.prototype.slice.call(arguments);
                console.log(args);
            });
        </script>
        <div>


        </div>
    </div>
@endsection