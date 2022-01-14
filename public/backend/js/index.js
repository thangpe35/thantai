// Set the date we're counting down to
var countDownDate = new Date("January 29, 2022 11:43:25").getTime();
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
        document.getElementById("countDowns").innerHTML = "Đã hết hạn xin vui lòng quay lại sau";
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


// const buttonShows = document.querySelectorAll('.control button')
// buttonShows.forEach((btn) => {
// 	btn.addEventListener('click', (e) => {
// 		createToast(e.target.getAttribute('class'))
// 	})
// })

// const toasts = {
// 	success: {
// 		icon: '<i class="fas fa-check-circle"></i>',
// 		msg: 'This is a success message !',
// 	},
// 	error: {
// 		icon: '<i class="fas fa-exclamation-triangle"></i>',
// 		msg: 'This is a error message !',
// 	},
// 	warning: {
// 		icon: '<i class="fas fa-exclamation-circle"></i>',
// 		msg: 'This is a warning message !',
// 	},
// }

// function createToast(status) {
// 	let toast = document.createElement('div')
// 	toast.className = `toast ${status}`

// 	toast.innerHTML = `
//     ${toasts[status].icon}
//     <span class="msg">${toasts[status].msg}</span>
//     <span class="countdown"></span>
//     `
// 	document.querySelector('#toasts').appendChild(toast)

// 	setTimeout(() => {
// 		toast.style.animation = 'hide_slide 1s ease forwards'
// 	}, 4000)
// 	setTimeout(() => {
// 		toast.remove()
// 	}, 6000)
// }

