<html>
  <head>
    <script>
      function hideButtonAndShowParagraph() {
        document.getElementById("sec1").style.display = "none";
        document.getElementById("sec2").style.display = "block";
      }
      
      function showMessage() {
        document.getElementById("sec2").style.display = "none";
        document.getElementById("sec3").style.display = "block";
      }
    </script>
  </head>
  <body>
    <div id="sec1">
    <button  onclick="hideButtonAndShowParagraph()"> Show Paragraph </button>
    

    </div>
    <div  id="sec2" style="display:none">
    <p>This is a hidden paragraph.</p>
    <button  onclick="showMessage()"> Show Message </button>
    
    </div>
    <div id="sec3" style="display:none">
    <p>This is another hidden message.</p>
    </div>
    
  </body>
</html>
