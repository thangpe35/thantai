<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <title>Thần tài</title>
</head>
<style>
    .container{
        font-family: Arial, Helvetica, sans-serif;
    }
</style>
<body>
    <div class="container bg-danger" style="height: 100vh;">
        <div class="row">
            <div class="d-flex mt-5">
                <div class="col-sm-8 ">
                    <p class="text-center text-uppercase text-light" style="font-size: 30px;">Rước lộc thần tài - khai xuân đại phát</p>
                    <h1>
                        <p class="text-center text-uppercase text-warning" style="font-size: 70px;">Ngày vía thần tài</p>
                    </h1>
                    <p class="text-center text-light" style="font-family: Brush Script Std; font-size: 30px;">Mùng 10 tháng giêng</p>
                    <p class="text-center text-light" style="font-size: 30px;">Đặt trước Online không phải xếp hàng</p>
                    <p class="text-center text-light" style="font-size: 30px;"> <i>Thời gian: 06/01-10/01 Âm lịch(17/02-21/02 Dương Lịch)</i></p>
                    <div class="text-center ">
                        <img src=" {{    asset('img/abcd.png')     }} " alt="" style="width: 250px; height: 300px;">
                    </div>                   
                </div>
                <div class="col-sm-4">
                    <h3>
                        <p class="text-center text-uppercase text-warning">Đặt trước ngay</p>
                    </h3>
                    <p class="text-center text-light " style="font-size: 20px;">Nhanh lên thôi, thời gian đặt trước chỉ còn</p>
                    <div class="mb-4 countDown d-flex justify-content-center " id="countDown">
                        <div class="dayCountDown bg-light d-flex justify-content-center align-items-center mx-auto" id="dayCountDown" style="height: 50px; width: 50px;"><h3></h3></div>
                        <div class="hourCountDown bg-light d-flex justify-content-center align-items-center mx-auto" id="hourCountDown" style="height: 50px; width: 50px;"></div>
                        <div class="minuteCountDown bg-light d-flex justify-content-center align-items-center mx-auto" id="minuteCountDown" style="height: 50px; width: 50px;"></div>
                        <div class="secondCountDown bg-light d-flex justify-content-center align-items-center mx-auto" id="secondCountDown" style="height: 50px; width: 50px;"></div>
                    </div>
                    <div class="mb-3 d-flex justify-content-center text-light">
                        <div class="mx-auto ">Ngày</div>
                        <div class="mx-auto">Giờ</div>
                        <div class="mx-auto">Phút</div>
                        <div class="mx-auto">Giây</div>
                    </div>
                    <form action="{{url('/thantai')}}" method="post">
                        @csrf
                        <div class="mb-4">
                            <input type="text" class="col-form-label w-100" id="name" name="name" placeholder="Họ và tên">
                            @if($errors->has('name'))
                            {{$errors->first('name')}}
                            @endif
                        </div>
                        <div class="mb-4">
                            <input type="text" class="col-form-label w-100" id="address" name="address" placeholder="Địa chỉ">
                            @if($errors->has('address'))
                            {{$errors->first('address')}}
                            @endif
                        </div>
                        <div class="mb-4">
                            <input type="number" class="col-form-label w-100" id="telephoneNumber" name="telephonenumber" placeholder="Số điện thoại">
                            @if($errors->has('telephonenumber'))
                            {{$errors->first('telephonenumber')}}
                            @endif
                        </div>
                        <div class="mb-4">
                            <select class="col-form-label w-100" aria-label="Default select example">
                                <option selected>Chọn sản phẩm</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="form-floating mb-4">
                            <textarea class="col-form-label w-100" placeholder="Để lại lời nhắn cho chúng tôi" id="floatingTextarea2" name="textarea" style="height: 100px"></textarea>
                        </div>
                        <div class="d-grid gap-2 warning mb-4 ">
                            <button type="submit" class="btn btn-primary text-uppercase bg-warning text-danger">Đặt trước ngay</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</body>
<script>
    // Set the date we're counting down to
    var countDownDate = new Date("December 29, 2021 11:43:25").getTime();
    // Update the count down every 1 second
    var x = setInterval(function() {
        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        document.getElementById("dayCountDown").innerHTML = days;
        document.getElementById("hourCountDown").innerHTML = hours;
        document.getElementById("minuteCountDown").innerHTML = minutes;
        document.getElementById("secondCountDown").innerHTML = seconds;
        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("countDown").innerHTML = "EXPIRED";
        }
    }, 1000);
</script>
<script src=""></script>

</html>