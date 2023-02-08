<html>
  <head>
    <script>
      function callMyFunction() {
        var param1 = "value1";
        var param2 = "value2";

        var xhr = new XMLHttpRequest();
        xhr.open("POST", "test2.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
          if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
            alert(this.responseText);
          }
        };
        xhr.send("function=my_specific_function&param1=" + param1 + "&param2=" + param2);
      }
    </script>
  </head>
  <body>
    <button onclick="callMyFunction()">Call my function</button>
  </body>
</html>
