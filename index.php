<!DOCTYPE html>
<html>
<head>
  <title>Custom Google Calendar</title>
  <style>
    body{background:#a5a09b;}
    .container{margin:0 auto;width: 100%;max-width: 980px;}
    iframe{width: 100%;}
  </style>
</head>
<body>

<div class="container">
  <?php
    define('PRODUCTION', true); //When testing locally, set PRODUCTION to false to avoid downloading a new copy every time. Run once as true to get a local copy first

    if (PRODUCTION) {
      //Replace with link to your calendar
      $calendar = file_get_contents("https://www.google.com/calendar/embed?showTitle=0&showCalendars=0&showTz=0&height=665&wkst=1&bgcolor=%23a5a09b&src=saintpaulsweb%40gmail.com&color=%23B1365F&ctz=America%2FToronto");

      $calendar = str_replace('</head>', '<link rel="stylesheet" href="../calendar/calendar.css"></head>', $calendar);
      file_put_contents('calendar/calendar.html', $calendar) or print_r(error_get_last());
    }
  ?>
  <iframe src="calendar/calendar.html" frameborder="0" height="750"></iframe>
</div>

</body>
</html>