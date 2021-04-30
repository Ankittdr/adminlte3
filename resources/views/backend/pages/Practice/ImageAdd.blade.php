@extends('backend.layouts.master')
@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title" >Add New Product </h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    {{--name diena bhane form bata data pathaudina--}}
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Name">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="name" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Product Price</label>
                                    <input type="number" class="form-control" id="" placeholder="" name="product_price" required>
                                </div>
                                <div class="form-group">
                                    <label for="sales price">Sales price</label>
                                    <input type="number" class="form-control" id="" placeholder="Enter " name="sales_price" >
                                </div>
                                <div class="form-group">
                                    <label for="">Tag type</label>
                                    <input type="text" class="form-control" id="" placeholder="Enter " name="tag_type" required>
                                </div>
                                <div class="form-group">
                                    <label for="">SKU</label>
                                    <input type="text" class="form-control" id="" placeholder="Enter " name="sku" required>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <br>
                                    <input type="radio" class="" id="user status" name="status" value="1">Active
                                    <input type="radio" class="" id="user status" name="status" value="0">Deactive
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Quantity</label>
                                    <input type="number" class="form-control" id="quatity" name="quantity" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea class="form-control" name="description" STYLE="height: 200px;" required></textarea>
                                </div>

                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Features Description</label>
                                    <textarea class="form-control" id="mytexteditor" name="features" required> </textarea>
                                </div>

                            </div>



                            <div class="col-md-12">

                                <table class="table table-bordered table-colors">
                                    <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Quantity</th>
                                        <th>Color</th>
                                        <th>Size</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    <tfoot>
                                    <tr style="color: #ccc;">
                                        <th>Example</th>
                                        <th>eg.2</th>
                                        <th>eg.white</th>
                                        <th>eg.XL</th>
                                        <th>
                                            <a href="javascript:void(0)"
                                               class="btn btn-danger btn-sm btn-add-color">Add New</a>
                                        </th>
                                    </tr>
                                    </tfoot>
                                </table>

                            </div>
                        </div>


                        <input type="submit" value="Submit" class="btn btn-sm btn-primary">
                        <button onclick="" type="button" class="btn btn-sm btn-danger">Cancel</button>
                    </form>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->



            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
</section>
<!-- /.content -->
    @endsection
