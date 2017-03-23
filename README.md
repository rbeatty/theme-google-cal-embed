# Custom Google Calendar

Apply a custom stylesheet to an embedded Google Calendar to match the rest of your site.

## Instructions
Since you can't just inject a stylesheet into an iframe or overwrite the CSS we have to go at it a different way...

1. Find the link to your calendar
If you are the owner of the calendar, this can be found in your calendar details:
![Calendar Details](calendar-details.jpg)

2. Download the calendar each time the page is requested
```<?php
$calendar = file_get_contents("https://www.google.com/calendar/embed?...") ?>
```

3. Split the downloaded HTML right before `</head>` and add your stylesheet
```<?php
$calendar = str_replace('</head>', '<link rel="stylesheet" href="../css/calendar.css"></head>', $calendar) ?>
```

4. Save the updated file
```<?php
file_put_contents('calendar/calendar.html', $calendar) ?>
```
_Make sure you have write permissions on the folder you are saving to_

5. Render the saved file in an iframe
```<iframe src="calendar/calendar.html" frameborder="0" height="750"></iframe>
```
_Make sure a height is specified on the iframe or you won't see any events_

6. Theme away! Now you can style the calendar to match the rest of your site. There is an SCSS file included with some variables that might speed things up.
