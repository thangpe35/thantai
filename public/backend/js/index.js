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
        document.getElementById("countDown").innerHTML = "EXPIRED";
    }
}, 1000);

function cong(){
    // get value textbox
    var incre = document.getElementById('textbox').value;
    // công thêm 1 đơn vị rồi gán chở lại cho textbox 
    document.getElementById('textbox').value = parseInt(incre) +1;

    

    

}
