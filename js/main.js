$(".display").hide()



$(".showEffect").on('mouseover', function (){
    $(this).find(".display").show()
    $(this).find(".image2").hide()
    // fade methods    
    //  $(".display").show()
    //  $(".image2").hide()
    
})

$(".showEffect").on('mouseout', function (){

    // fade methods  
    $(this).find(".display").hide()
    $(this).find(".image2").show()  
    //  $(".display").hide()
    //  $(".image2").show()
    
})


// Set the date we're counting down to
var countDownDate = new Date("december 5, 2022 15:37:25").getTime();

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
  document.getElementById("demo").innerHTML = days + "Days " + hours + "Hours "
  + minutes + "Mins " + seconds + "Sec ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);



/* Toggle between showing and hiding the navigation menu links when the user clicks on the hamburger menu / bar icon */
function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}