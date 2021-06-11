 // show-hide password
 $('.hint-icon').on('click', () => {
   $('.hint-icon').toggleClass('fa-eye')
   $('.hint-icon').toggleClass('fa-eye-slash')
   if ($('.password').attr('type') === 'password') {
     $('.password').attr('type', 'text')
   }
   else {
     $('.password').attr('type', 'password')
   }
 })



 $('.bottom-tab-container').click(function() {

   $(this).addClass('active-tab')
   $(this).siblings().removeClass('active-tab')
 })


 // signup and login form handle
 $('#signup-form').on('submit', function(e) {
   e.preventDefault()
 })


 //bet value


 $('.plus').click(function() {
   var betAmount = parseInt($('#bet-amount').attr('value')) + 10
   $('#bet-amount').attr('value', betAmount)
 })

 $('.minus').click(function() {
   var betAmount = parseInt($('#bet-amount').attr('value')) - 10
   if (betAmount < 10) {
     alert('The bet amount must be equal or greater than 10')
   } else {
     $('#bet-amount').attr('value', betAmount)
   }
 })


 $('#bet-form').submit(function(e) {
   var betPrice = $('#bet-amount').val()
   $('#bet-submit').attr('disabled','true')
   $('#bet-submit').html('joining <i class="fa fa-circle-notch spinner"></i>')
   var clientBalance = getWalletBalance()
 })



 function getWalletBalance() {
   var balanceRequest = new XMLHttpRequest()
   balanceRequest.open('POST', 'phps/betProcess.php', true)
   balanceRequest.send()
   balanceRequest.onload = () => {
     console.log(balanceRequest.responseText)
   }
   return balanceRequest
 }
 
 