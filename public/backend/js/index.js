// Set the date we're counting down to
var countDownDate = new Date("December 29, 2021 11:43:25").getTime();
// Update the count down every 1 second
var x = setInterval(function () {
    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor(
        (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
    );
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
        document.getElementById("countDown").innerHTML = "Đã hết hạn xin vui lòng quay lại sau";
    }
}, 1000);

// qty product

$(document).ready(function(){
    $(".increment-btn").click(function(e){
        e.preventDefault();       
        var inc_value = $(".input-qty").val();
        console.log(inc_value)
        var value = parseInt(inc_value,10);
        console.log(value)
        value = isNaN(value) ? "" : value;
        if(value < 10){
            value++;
            $(".input-qty").val(value);
        }
    });
});  

$(document).ready(function(){
    $(".decrement-btn").click(function(e){
        e.preventDefault();       
        var inc_value = $(".input-qty").val();
        console.log(inc_value)
        var value = parseInt(inc_value,10);
        console.log(value)
        value = isNaN(value) ? "" : value;
        if(value > 1){
            value--;
            $(".input-qty").val(value);
        }
    });
});  




