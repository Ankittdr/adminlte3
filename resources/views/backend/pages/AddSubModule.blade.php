@extends('backend.layouts.master')
@section('content')
    <div class="row">
    <div class="col-lg-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Sub Module</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
                {{--name diena bhane form bata data pathaudina--}}
                <form action="{{route('backend.submodule.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="Name">Title</label>
                                <input type="text" class="form-control" id="title" placeholder="Add title here" name="title" required>
                            </div>
                            {{--<div class="form-group">
                                <label for="">Product Price</label>
                                <input type="text" class="form-control" id="" placeholder="" name="product_price" required>
                            </div>--}}
                            <div class="form-group">
                                <label for="">Module</label>
                                <select class="form-control select2" name="module_id" >
                                    <option value="" >Select module</option>
                                    @foreach($modules as $module)
                                        <option value="{{$module->module_id}}">{{$module->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{--<div class="form-group">
                                <label for="">Image</label>
                                <input type="file" class="form-control" id="" placeholder="" name="image" required>
                            </div>--}}
                            <div class="form-group">
                                <label for="">Features Description of image</label>
                                <textarea class="form-control"  id="editor1" name="features" required > </textarea>
                            </div>
                            <input type="submit" value="Submit" class="btn btn-sm btn-primary">
                        </div>
                    </div>
                </form>
                <!-- /.box-body -->
            </div>

        </div>
    </div>
    </div>
    @endsection