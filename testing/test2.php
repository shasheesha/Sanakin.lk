<html>
  <head>
    <script>
      function hideButtonAndShowParagraph() {
        document.getElementById("firstButton").style.display = "none";
        document.getElementById("hiddenParagraph").style.display = "block";
      }
      
      function showMessage() {
        document.getElementById("secondButton").style.display = "none";
        document.getElementById("hiddenMessage").style.display = "block";
      }
    </script>
  </head>
  <body>
    <?php
      if (isset($_POST['submit'])) {
        $servername = "localhost";
        $username = "your_username";
        $password = "your_password";
        $dbname = "your_database";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        } 

        $paragraph = $_POST['hiddenParagraph'];

        $sql = "INSERT INTO table_name (column_name) VALUES ('$paragraph')";

        if ($conn->query($sql) === TRUE) {
          echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
      }
    ?>
    <button id="firstButton" onclick="hideButtonAndShowParagraph()"> Show Paragraph </button>
    <p id="hiddenParagraph" style="display:none">This is a hidden paragraph.</p>
    <form method="post">
      <input type="hidden" name="hiddenParagraph" value="This is a hidden paragraph.">
      <input type="submit" name="submit" value="Upload Paragraph">
    </form>
    <button id="secondButton" onclick="showMessage()"> Show Message </button>
    <p id="hiddenMessage" style="display:none">This is another hidden message.</p>
  </body>
</html>
