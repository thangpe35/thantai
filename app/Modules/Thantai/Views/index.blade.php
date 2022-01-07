<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/backend/css/btn.css">
    <title>Thần tài</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap');
</style>

<body>
    <div class="container-fluid" style="height: auto; width: auto;">
        <div class="row">
            <!-- <div class="d-lg-flex gt-5"> -->
            <div class="col-12 col-lg-6">
                <div class="text-center">
                    <img src="./img/abcd.png " alt="" style="width: 150px; height: 192px;">
                </div>
                <p class="text-center text-uppercase text-light h3">Rước lộc thần tài - khai xuân đại phát</p>
                <h1>
                    <p class="text-center text-uppercase text-warning display-2">Ngày vía thần tài</p>
                </h1>
                <p class="text-center text-light h3" style="font-family:Dancing Script;">Mùng 10 tháng giêng</p>
                <p class="text-center text-light h3" style="font-size: 30px;">Đặt trước Online không phải xếp hàng</p>
                <p class="text-center text-light h3" style="font-size: 30px;"> <i>Thời gian: 06/01-10/01 Âm lịch(17/02-21/02 Dương Lịch)</i></p>

            </div>
            <div class="col-12 col-lg-6">
                <h3>
                    <p class="text-center text-uppercase text-warning h3">Đặt trước ngay</p>
                </h3>
                <p class="text-center text-light h4">Nhanh lên thôi, thời gian đặt trước chỉ còn</p>
                <div class="mb-4 countDown d-flex justify-content-center " id="countDown">
                    <div class="dayCountDown bg-light d-flex justify-content-center align-items-center " id="dayCountDown" style="height: 50px; width: 50px; margin-right: 10px;">
                        <h3></h3>
                    </div>
                    <div class="hourCountDown bg-light d-flex justify-content-center align-items-center " id="hourCountDown" style="height: 50px; width: 50px; margin-right: 10px;"></div>
                    <div class="minuteCountDown bg-light d-flex justify-content-center align-items-center " id="minuteCountDown" style="height: 50px; width: 50px; margin-right: 10px;"></div>
                    <div class="secondCountDown bg-light d-flex justify-content-center align-items-center " id="secondCountDown" style="height: 50px; width: 50px; margin-right: 10px;"></div>
                </div>
                <div class="mb-3 d-flex justify-content-center text-light">
                    <div class="h5" style="margin-right: 10px;">Ngày</div>
                    <div class="h5" style="margin-right: 10px;">Giờ</div>
                    <div class="h5" style="margin-right: 10px;">Phút</div>
                    <div class="h5" style="margin-right: 10px;">Giây</div>
                </div>
                <form action="{{url('order')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4 d-flex justify-content-center">
                        <input type="text" class="col-form-label " style="width: 300px;" id="name" name="name" placeholder="Họ và tên">
                        @if($errors->has('name'))
                        {{$errors->first('name')}}
                        @endif
                    </div>
                    <div class="mb-4 d-flex justify-content-center">
                        <input type="text" class="col-form-label" style="width: 300px;" id="address" name="address" placeholder="Địa chỉ">
                        @if($errors->has('address'))
                        {{$errors->first('address')}}
                        @endif
                    </div>
                    <div class="mb-4 d-flex justify-content-center">
                        <input type="number" class="col-form-label" style="width: 300px;" id="telephoneNumber" name="telephonenumber" placeholder="Số điện thoại">
                        @if($errors->has('telephonenumber'))
                        {{$errors->first('telephonenumber')}}
                        @endif
                    </div>
                    <div class="mb-4 d-flex justify-content-center">
                        <input type="date" class="col-form-label " style="width: 300px;" id="date" name="date" value="<?php echo date('d-m-Y');?>">
                    </div>
                    <div class="mb-4 d-flex justify-content-center">
                        <select class="form-select" aria-label="Default select example" style="width: 300px;" name="branch">
                            <option selected>Chọn chi nhánh</option>
                            <option value="1">Chi nhánh 1</option>
                            <option value="2">Chi nhánh 2</option>
                            <option value="3">Chi nhánh 3</option>
                        </select>
                    </div>
                    <div class="form-floating mb-4 d-flex justify-content-center">
                        <textarea class="col-form-label" style="width: 300px;" placeholder="Để lại lời nhắn cho chúng tôi" id="floatingTextarea2" name="textarea" style="height: 100px"></textarea>
                    </div>
                    <div class="mb-4 d-flex justify-content-center">
                        <div class="d-flex flex-row justify-content-center ">
                            <div class="d-flex flex-row">
                                <div class="element p-2 bd-highlight">
                                    <img src="./img/thantai.jpg" class="img-fluid" name="img">
                                    <p class="font-product">10 Chỉ nhẫn ép tròn</p>
                                    <div class="d-flex justify-content-center">
                                        <div class="buttons_added">
                                            <input class="minus is-form decrement-btn" type="button" value="-">
                                            <input aria-label="quantity" class="input-qty" max="10" min="1" type="number" value="1" id="textbox" name="qty_input" style="width: 50px;">
                                            <input class="plus is-form increment-btn" type="button" value="+">
                                        </div>
                                    </div>
                                </div>
                                <div class="element p-2 bd-highlight">
                                    <img src="./img/thantai.jpg" class="img-fluid ">
                                    <p class="font-product">10 Chỉ nhẫn ép tròn</p>
                                    <div class="d-flex justify-content-center">
                                        <div class="buttons_added">
                                            <input class="minus is-form decrement-btn" type="button" value="-">
                                            <input aria-label="quantity" class="input-qty" max="10" min="1" type="number" value="1" id="textbox" name="qty-input" style="width: 50px;">
                                            <input class="plus is-form increment-btn" type="button" value="+">
                                        </div>
                                    </div>
                                </div>
                                <div class="element p-2 bd-highlight">
                                    <img src="./img/thantai.jpg" class="img-fluid ">
                                    <p class="font-product">10 Chỉ nhẫn ép tròn</p>
                                    <div class="d-flex justify-content-center">
                                        <div class="buttons_added">
                                            <input class="minus is-form decrement-btn" type="button" value="-">
                                            <input aria-label="quantity" class="input-qty" max="10" min="1" type="number" value="1" id="textbox" name="qty-input" style="width: 50px;">
                                            <input class="plus is-form increment-btn" type="button" value="+">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="mb-4 d-flex justify-content-center">
                        <div class="d-flex flex-row justify-content-center ">
                            <div class="d-flex flex-row">
                                <div class="element p-2 bd-highlight">
                                    <img src="./img/thantai.jpg" class="img-fluid ">
                                    <p class="font-product">10 Chỉ nhẫn ép tròn</p>
                                    <div class="d-flex justify-content-center">
                                        <div class="buttons_added">
                                            <input class="minus is-form decrement-btn" type="button" value="-">
                                            <input aria-label="quantity" class="input-qty" max="10" min="1" type="number" value="1" id="textbox" name="qty-input" style="width: 50px;">
                                            <input class="plus is-form increment-btn" type="button" value="+">
                                        </div>
                                    </div>
                                </div>
                                <div class="element p-2 bd-highlight">
                                    <img src="./img/thantai.jpg" class="img-fluid ">
                                    <p class="font-product">10 Chỉ nhẫn ép tròn</p>
                                    <div class="d-flex justify-content-center">
                                        <div class="buttons_added">
                                            <input class="minus is-form decrement-btn" type="button" value="-">
                                            <input aria-label="quantity" class="input-qty" max="10" min="1" type="number" value="1" id="textbox" name="qty-input" style="width: 50px;">
                                            <input class="plus is-form increment-btn" type="button" value="+">
                                        </div>
                                    </div>
                                </div>
                                <div class="element p-2 bd-highlight">
                                    <img src="./img/thantai.jpg" class="img-fluid ">
                                    <p class="font-product">10 Chỉ nhẫn ép tròn</p>
                                    <div class="d-flex justify-content-center">
                                        <div class="buttons_added">
                                            <input class="minus is-form decrement-btn" type="button" value="-">
                                            <input aria-label="quantity" class="input-qty" max="10" min="1" type="number" value="1" id="textbox" name="qty-input" style="width: 50px;">
                                            <input class="plus is-form increment-btn" type="button" value="+">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="mb-4 d-flex justify-content-center">
                        <div class="d-flex flex-row justify-content-center ">
                            <div class="d-flex flex-row">
                                <div class="element p-2 bd-highlight">
                                    <img src="./img/thantai.jpg" class="img-fluid ">
                                    <p class="font-product">10 Chỉ nhẫn ép tròn</p>
                                    <div class="d-flex justify-content-center">
                                        <div class="buttons_added">
                                            <input class="minus is-form decrement-btn" type="button" value="-">
                                            <input aria-label="quantity" class="input-qty" max="10" min="1" type="number" value="1" id="textbox" name="qty-input" style="width: 50px;">
                                            <input class="plus is-form increment-btn" type="button" value="+">
                                        </div>
                                    </div>
                                </div>
                                <div class="element p-2 bd-highlight">
                                    <img src="./img/thantai.jpg" class="img-fluid ">
                                    <p class="font-product">10 Chỉ nhẫn ép tròn</p>
                                    <div class="d-flex justify-content-center">
                                        <div class="buttons_added">
                                            <input class="minus is-form decrement-btn" type="button" value="-">
                                            <input aria-label="quantity" class="input-qty" max="10" min="1" type="number" value="1" id="textbox" name="qty-input" style="width: 50px;">
                                            <input class="plus is-form increment-btn" type="button" value="+">
                                        </div>
                                    </div>
                                </div>
                                <div class="element p-2 bd-highlight">
                                    <img src="./img/thantai.jpg" class="img-fluid ">
                                    <p class="font-product">10 Chỉ nhẫn ép tròn</p>
                                    <div class="d-flex justify-content-center">
                                        <div class="buttons_added">
                                            <input class="minus is-form decrement-btn" type="button" value="-">
                                            <input aria-label="quantity" class="input-qty" max="10" min="1" type="number" value="1" id="textbox" name="qty-input" style="width: 50px;">
                                            <input class="plus is-form increment-btn" type="button" value="+">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 d-flex justify-content-center">
                        <div class="d-flex flex-row justify-content-center ">
                            <div class="d-flex flex-row">
                                <div class="element p-2 bd-highlight">
                                    <img src="./img/thantai.jpg" class="img-fluid ">
                                    <p class="font-product">10 Chỉ nhẫn ép tròn</p>
                                    <div class="d-flex justify-content-center">
                                        <div class="buttons_added">
                                            <input class="minus is-form decrement-btn" type="button" value="-">
                                            <input aria-label="quantity" class="input-qty" max="10" min="1" type="number" value="1" id="textbox" name="qty-input" style="width: 50px;">
                                            <input class="plus is-form increment-btn" type="button" value="+">
                                        </div>
                                    </div>
                                </div>
                                <div class="element p-2 bd-highlight">
                                    <img src="./img/thantai.jpg" class="img-fluid ">
                                    <p class="font-product">10 Chỉ nhẫn ép tròn</p>
                                    <div class="d-flex justify-content-center">
                                        <div class="buttons_added">
                                            <input class="minus is-form decrement-btn" type="button" value="-">
                                            <input aria-label="quantity" class="input-qty" max="10" min="1" type="number" value="1" id="textbox" name="qty-input" style="width: 50px;">
                                            <input class="plus is-form increment-btn" type="button" value="+">
                                        </div>
                                    </div>
                                </div>
                                <div class="element p-2 bd-highlight">
                                    <img src="./img/thantai.jpg" class="img-fluid ">
                                    <p class="font-product">10 Chỉ nhẫn ép tròn</p>
                                    <div class="d-flex justify-content-center">
                                        <div class="buttons_added">
                                            <input class="minus is-form decrement-btn" type="button" value="-">
                                            <input aria-label="quantity" class="input-qty" max="10" min="1" type="number" value="1" id="textbox" name="qty-input" style="width: 50px;">
                                            <input class="plus is-form increment-btn" type="button" value="+">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-grid gap-2 warning mb-4 d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary text-uppercase text-danger" style="background: #faf01d; width: 300px;">Đặt trước ngay</button>
                    </div>
                </form>
            </div>
            <!-- </div> -->
        </div>
    </div>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{asset('backend/js/index.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>