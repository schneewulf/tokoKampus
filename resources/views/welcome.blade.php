<!DOCTYPE html>
<html>
//lol//
<head>
  <meta charset="utf-8">
  <title></title>
</head>

<body>
  <input id="duration" type="number" name="" value="">
  <button id="target" type="button" name="button">asd</button>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
var date = //sebuah nilai yang lu masukin
console.log(date.getTime())
console.log(Date.now());
  $("#target").click(function() {

    var time = $("#duration").val();
    setTimeout(showNotification, time);
  });
  //register sw.js
  navigator.serviceWorker.register('sw.js');
  //panggil function show
  //function implementation
  function showNotification() {
    Notification.requestPermission(function(result) {
      if (Notification.permission == 'granted') {
        navigator.serviceWorker.getRegistration().then(function(reg) {
          reg.showNotification('aVibration Sample', {
            body: 'Buzz! Buzz!',
            icon: '../icondog.png',
          });
        });
      }
    });
  }
</script>

</html>
