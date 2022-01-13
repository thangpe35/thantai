@extends('Admin::admin')

@section('content')
<div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Liệt kê sản phẩm
            </header>
        </section>
    </div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tên sản phẩm</th>
            <th scope="col">Ảnh sản phẩm</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 0;
        ?>
        @foreach($admin as $value)
        <tr>
            <th scope="row">{{$i}}</th>
            <?php
            $i++;
            ?>
            <td>{{$value->name}}</td>
            <td><img src="{{asset('uploads/'.$value->img)}}" style="width: 100px;" alt=""></td>
            <td>
                <a href="{{url('create_category_product/'. $value->id)}}" class="btn btn-primary" style="margin-bottom: 10px;">Sửa sản phẩm</a>
                <form action="{{(url('all_category_product/'.$value->id))}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-success">Xóa sản phẩm</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection