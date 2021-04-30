@extends('backend.layouts.master')
@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-xs-10">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title" style="display: block;text-align: center;font-weight:bold" >Table</h3>
                        <br>
                        <a href="{{route('backend.module.add')}}" class="btn btn-sm btn-info pull-right " >+ Add New Module</a>
                    </div>
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Sn</th>
                                <th>Title</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($modules as $module)
                                <tr>
                                    <td>{{ $loop->iteration}}</td>
                                    <td>{{ $module->title }}</td>
                                    {{--<td>{!! $product->features_description!!}</td>--}}
                                    <td>
                                        <form action="{{route('backend.module.delete')}}" method="post" style="display: inline-block">
                                            @csrf
                                            <input type="hidden" name="module_id" value="{{$module->module_id}}">
                                            <button class="btn btn-danger"><i class="fa fa-minus"></i></button>
                                        </form>
                                        <a type="button" href="{{--{{route('backend.product.edit',$product->product_id)}}--}}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>

                        </table>
                        <div class="pull-right">

                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    @endsection
