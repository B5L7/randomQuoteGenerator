<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Random Quotes</title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css">
  <script type = "text/JavaScript">
         <!--
            function refreshMe(t) {
               setTimeout("location.reload();", t);
            }
         //-->
      </script>
</head>

  <body <?php include 'inc/setColor.php'; ?> onLoad="refreshMe(20000)">

<!--
  It was not clear from the assignment notes whether we should use js or php to randomise background colour, so I have used the latter.

  In the same body tag I have called the js function refreshMe(), which will auto-refresh the page after 20 seconds.

-->

  <div class="container">
    <div id="quote-box">
      <?php include 'inc/functions.php'; ?>
    </div>
    <button id="loadQuote" onclick="window.location.reload(true)" >Show another quote</button>
  </div>
</body>
</html>
