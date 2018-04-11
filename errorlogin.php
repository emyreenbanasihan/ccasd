<body onload="myFunction()">

<script>
function myFunction() {

    var redirect = confirm("Username and Password does not match.Please try again.");
      if (redirect == true) {
          window.location.href = 'index.php'; //redirect to http://www.xyz.com.
      }
}
</script>
