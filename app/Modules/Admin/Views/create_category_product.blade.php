@extends('Admin::admin')

@section('content')
<div class="form-w3layouts">
    <!-- page start -->
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Sửa sản phẩm sản phẩm
            </header>
            <div class="panel-body">
                <div class="position-center">
                    
                    <form role="form" action="{{url('create_category_product/'.$admin->id)}}" enctype="multipart/form-data" method="POST">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label for="name">Tên sản phẩm</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"  name="name" value="{{$admin->name}}">
                        </div>
                        <div class="form-group">
                            <label for="name">Giá sản phẩm</label>
                            <input type="number" class="form-control" id="exampleInputEmail1"  name="name" value="{{$admin->nameprice}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" id="exampleInputFile" name="image">
                            <img src="{{asset('uploads/'.$admin->img)}}" style="width: 100px;" alt="">
                        </div>
                        <button type="submit" class="btn btn-info">Sửa</button>
                    </form>
                    
                </div>
            </div>
        </section>
    </div>
    <!-- page end-->
</div>
@endsection