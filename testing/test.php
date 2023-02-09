<html>
  <head>
    <script>
      function callPhpFunction() {
        var param1 = document.getElementById("param1").value;
        var param2 = document.getElementById("param2").value;
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            // The response from the PHP function will be stored in this.responseText
            document.getElementById("result").innerHTML = this.responseText;
          }
        };
        xhttp.open("GET", "test2.php?func=my_php_function&param1=" + param1 + "&param2=" + param2, true);
        xhttp.send();
      }
    </script>
  </head>
  <body>
    Parameter 1: <input type="text" id="param1"><br>
    Parameter 2: <input type="text" id="param2"><br>
    <button onclick="callPhpFunction()">Call PHP Function</button>
    <div id="result"></div>
  </body>
</html>
