<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/backend/css/btn.css">
    <link rel="stylesheet" href="../css/fonts.css">
    <title>Thần tài</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap');
</style>

<body>
    <div class="container-fluid" style="height: auto; width: auto;">
        <!-- <div class="row"> -->
        <div class="d-flex row ">
            <div class="d-flex col-lg-8 mobile-col">
                <div class=" col-lg-6">
                    <div class="text-center dss">
                        <img src="./img/abcd.png " alt="" style="width: 150px; height: 192px;">
                    </div>
                    <p class="text-center text-res text-uppercase h5 pt-5">Rước lộc thần tài - khai xuân đại phát</p>
                    <h1>
                        <p class="text-center text-res text-uppercase display-5">Ngày vía thần tài</p>
                    </h1>
                    <p class="text-center text-res h6" style="font-family:Dancing Script;">Mùng 10 tháng giêng</p>
                    <p class="text-center text-res h4">Đặt trước Online không phải xếp hàng</p>
                    <p class="text-center text-res h4"> <i>Thời gian: 06/01-10/01 Âm lịch (17/02-21/02 Dương Lịch)</i></p>
                </div>
                <div class=" col-lg-6">
                    <h3>
                        <p class="text-center text-res text-uppercase h3">Đặt trước ngay</p>
                    </h3>
                    <p class="text-center text-res h4">Nhanh lên thôi, thời gian đặt trước chỉ còn</p>
                    <div class="mb-4 countDowns d-flex justify-content-center " id="countDown">
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
                    <form class="validate" action="{{url('thantai/them')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="mb-4 ">
                            <input type="text" class="col-form-label " style="width: 300px;" id="name" name="name" placeholder="Họ và tên *" require>
                            @if($errors->has('name'))
                            <p class="text-warning">{{$errors->first('name')}}</p>
                            @endif
                        </div>
                        <div class="mb-4 ">
                            <input type="text" class="col-form-label" style="width: 300px;" id="address" name="address" placeholder="Địa chỉ">
                            @if($errors->has('address'))
                            <p class="text-warning">{{$errors->first('address')}}</p>
                            @endif
                        </div>
                        <div class="mb-4">
                            <input type="number" class="col-form-label" style="width: 300px;" id="telephoneNumber" name="telephonenumber" placeholder="Số điện thoại">
                            @if($errors->has('telephonenumber'))
                            <p class="text-warning"> {{$errors->first('telephonenumber')}}</p>
                            @endif
                        </div>
                        <div class="mb-4 " style="font-family:SVN Gotham ;color: white; font-size:3vh">Thời gian giao hàng </div>
                        <div class="mb-4 ">
                            <!-- <input type="datetime" class="col-form-label " style="width: 300px;" id="date" name="date"> -->
                            <input type="datetime-local" name="date" id="" class="col-form-label " style="width: 300px;">
                        </div>
                        <div class="mb-4 ">
                            <select class="form-select" aria-label="Default select example" style="width: 300px;" name="branch">
                                <option value="" selected require>Chọn chi nhánh</option>
                                <option value="1">CH1</option>
                                <option value="2">CH2</option>
                                <option value="3">CH3</option>
                                <option value="4">CH4</option>
                            </select>
                            @if($errors->has('branch'))
                            <p class="text-warning">{{$errors->first('branch')}}</p>
                            @endif
                        </div>

                        <div class="form-floating mb-4 ">
                            <textarea class="col-form-label" style="width: 300px;" placeholder="Để lại lời nhắn cho chúng tôi" id="floatingTextarea2" name="textarea" style="height: 100px"></textarea>
                        </div>
                </div>
            </div>

            <div class="col-lg-4">
                <span class="mb-6 d-flex justify-content-center text-gold h3 " style="font-family:SVN Gotham ;color:white">Sản phẩm</span>
                <div class="mb-4 d-flex justify-content-center">
                    <div class="d-flex flex-row justify-content-center ">
                        <div class="d-flex flex-row">
                            <div class="element p-1 bd-highlight">
                                <img src="./img/thantai.jpg" class="img-fluid" name="img">
                                <p class="font-product">10 Chỉ nhẫn ép tròn</p>
                                <p class="font-product h6">Mã sản phẩm: MH-3</p>
                                <div class="d-flex justify-content-center">
                                    <div class="buttons_added">
                                        <input class="minus is-form decrement-btn" type="button" value="-">
                                        <input aria-label="quantity" class="input-qty" max="10" min="1" type="number" value="1" id="textbox" name="qty_input" style="width: 50px;">
                                        <input class="plus is-form increment-btn" type="button" value="+">
                                    </div>
                                </div>
                            </div>
                            <div class="element p-1 bd-highlight">
                                <img src="./img/thantai.jpg" class="img-fluid ">
                                <p class="font-product">10 Chỉ nhẫn ép tròn</p>
                                <p class="font-product h6">Mã sản phẩm: MH-3</p>

                                <div class="d-flex justify-content-center">
                                    <div class="buttons_added">
                                        <input class="minus is-form decrement-btn" type="button" value="-">
                                        <input aria-label="quantity" class="input-qty" max="10" min="1" type="number" value="1" id="textbox" name="qty-input" style="width: 50px;">
                                        <input class="plus is-form increment-btn" type="button" value="+">
                                    </div>
                                </div>
                            </div>
                            <div class="element p-1 bd-highlight">
                                <img src="./img/thantai.jpg" class="img-fluid ">
                                <p class="font-product">10 Chỉ nhẫn ép tròn</p>
                                <p class="font-product h6">Mã sản phẩm: MH-3</p>
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
                            <div class="element p-1 bd-highlight">
                                <img src="./img/thantai.jpg" class="img-fluid ">
                                <p class="font-product">10 Chỉ nhẫn ép tròn</p>
                                <p class="font-product h6">Mã sản phẩm: MH-3</p>
                                <div class="d-flex justify-content-center">
                                    <div class="buttons_added">
                                        <input class="minus is-form decrement-btn" type="button" value="-">
                                        <input aria-label="quantity" class="input-qty" max="10" min="1" type="number" value="1" id="textbox" name="qty-input" style="width: 50px;">
                                        <input class="plus is-form increment-btn" type="button" value="+">
                                    </div>
                                </div>
                            </div>
                            <div class="element p-1 bd-highlight">
                                <img src="./img/thantai.jpg" class="img-fluid ">
                                <p class="font-product">10 Chỉ nhẫn ép tròn</p>
                                <p class="font-product h6">Mã sản phẩm: MH-3</p>
                                <div class="d-flex justify-content-center">
                                    <div class="buttons_added">
                                        <input class="minus is-form decrement-btn" type="button" value="-">
                                        <input aria-label="quantity" class="input-qty" max="10" min="1" type="number" value="1" id="textbox" name="qty-input" style="width: 50px;">
                                        <input class="plus is-form increment-btn" type="button" value="+">
                                    </div>
                                </div>
                            </div>
                            <div class="element p-1 bd-highlight">
                                <img src="./img/thantai.jpg" class="img-fluid ">
                                <p class="font-product">10 Chỉ nhẫn ép tròn</p>
                                <p class="font-product h6">Mã sản phẩm: MH-3</p>
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
                            <div class="element p-1 bd-highlight">
                                <img src="./img/thantai.jpg" class="img-fluid ">
                                <p class="font-product">10 Chỉ nhẫn ép tròn</p>
                                <p class="font-product h6">Mã sản phẩm: MH-3</p>
                                <div class="d-flex justify-content-center">
                                    <div class="buttons_added">
                                        <input class="minus is-form decrement-btn" type="button" value="-">
                                        <input aria-label="quantity" class="input-qty" max="10" min="1" type="number" value="1" id="textbox" name="qty-input" style="width: 50px;">
                                        <input class="plus is-form increment-btn" type="button" value="+">
                                    </div>
                                </div>
                            </div>
                            <div class="element p-1 bd-highlight">
                                <img src="./img/thantai.jpg" class="img-fluid ">
                                <p class="font-product">10 Chỉ nhẫn ép tròn</p>
                                <p class="font-product h6">Mã sản phẩm: MH-3</p>
                                <div class="d-flex justify-content-center">
                                    <div class="buttons_added">
                                        <input class="minus is-form decrement-btn" type="button" value="-">
                                        <input aria-label="quantity" class="input-qty" max="10" min="1" type="number" value="1" id="textbox" name="qty-input" style="width: 50px;">
                                        <input class="plus is-form increment-btn" type="button" value="+">
                                    </div>
                                </div>
                            </div>
                            <div class="element p-1 bd-highlight">
                                <img src="./img/thantai.jpg" class="img-fluid ">
                                <p class="font-product">10 Chỉ nhẫn ép tròn</p>
                                <p class="font-product h6">Mã sản phẩm: MH-3</p>
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
                            <div class="element p-1 bd-highlight">
                                <img src="./img/thantai.jpg" class="img-fluid ">
                                <p class="font-product">10 Chỉ nhẫn ép tròn</p>
                                <p class="font-product h6">Mã sản phẩm: MH-3</p>
                                <div class="d-flex justify-content-center">
                                    <div class="buttons_added">
                                        <input class="minus is-form decrement-btn" type="button" value="-">
                                        <input aria-label="quantity" class="input-qty" max="10" min="1" type="number" value="1" id="textbox" name="qty-input" style="width: 50px;">
                                        <input class="plus is-form increment-btn" type="button" value="+">
                                    </div>
                                </div>
                            </div>
                            <div class="element p-1 bd-highlight">
                                <img src="./img/thantai.jpg" class="img-fluid ">
                                <p class="font-product">10 Chỉ nhẫn ép tròn</p>
                                <p class="font-product h6">Mã sản phẩm: MH-3</p>
                                <div class="d-flex justify-content-center">
                                    <div class="buttons_added">
                                        <input class="minus is-form decrement-btn" type="button" value="-">
                                        <input aria-label="quantity" class="input-qty" max="10" min="1" type="number" value="1" id="textbox" name="qty-input" style="width: 50px;">
                                        <input class="plus is-form increment-btn" type="button" value="+">
                                    </div>
                                </div>
                            </div>
                            <div class="element p-1 bd-highlight">
                                <img src="./img/thantai.jpg" class="img-fluid ">
                                <p class="font-product">10 Chỉ nhẫn ép tròn</p>
                                <p class="font-product h6">Mã sản phẩm: MH-3</p>
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

                <div class="d-grid gap-1 warning mb-4 d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary text-uppercase text-danger success warning error" style="background: #faf01d; width: 300px;">Đặt trước ngay</button>
                </div>
                </form>
                
            </div>
        </div>
      
        <div id="toasts">
            @if(session('error'))
            <div class="toast error">
                <i class="fa fa-exclamation-triangle"></i>
                <span class="msg">{{session('error')}} !</span>
                <span class="countdown"></span>
            </div>
            @endif
            @if(session('warning'))
            <div class="toast warning">
                <i class="fa fa-exclamation-circle"></i>
                <span class="msg">{{session('warning')}} !</span>
                <span class="countdown"></span>
            </div>
            @endif
            @if(session('success'))
            <div class="toast success">
                <i class="fa fa-check-circle"></i>
                <span class="msg">{{session('thongbao')}} !</span>
                <span class="countdown"></span>
            </div>
            @endif
            <div class="toast" style="display: none;">
            </div>
        </div>


</body>
<script>
    let toast = document.getElementsByClassName('toast')[0]
    setTimeout(() => {
        toast.style.animation = 'hide_slide 1s ease forwards'
    }, 4000)
    setTimeout(() => {
        toast.remove()
    }, 6000)
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{asset('backend/js/index.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>