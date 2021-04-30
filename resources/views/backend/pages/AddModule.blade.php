@extends('backend.layouts.master')
@section('content')
        <div class="col-md-4">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Main module</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                    {{--name diena bhane form bata data pathaudina--}}
                    <form action="{{route('backend.module.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="Name">Title</label>
                                    <input type="text" class="form-control" id="title" placeholder="title" name="title" required>
                                </div>
                                <input type="submit" value="Submit" class="btn btn-sm btn-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
<script>
    $(function () {
        $.ajax({
            type:'GET',
            url:'/module',
            data: {
                name: name,
                colour: "red"
            },
            success: function( data ){

                console.log(data);
            },
        })
    })
</script>