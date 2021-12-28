@extends('Admin::admin')

@section('content')
<div class="form-w3layouts">
    <!-- page start -->
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm sản phẩm
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="{{url('add_category_product')}}" enctype="multipart/form-data" method="POST">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label for="name">Tên sản phẩm</label>
                            <input type="text" class="form-control"  placeholder="Nhập tên sản phẩm" name="name">
                        </div>
                        <div class="form-group">
                            <label for="name">Giá sản phẩm</label>
                            <input type="number" class="form-control"  placeholder="Nhập giá sản phẩm" name="nameprice">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" id="exampleInputFile" name="image">
                        </div>
                        <button type="submit" class="btn btn-info">Thêm</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
    <!-- page end-->
</div>
@endsection