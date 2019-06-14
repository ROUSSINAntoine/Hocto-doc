<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>calendar</title>

    <link rel="stylesheet" href="public/fullcalendar/packages/core/main.css">
    <link rel="stylesheet" href="public/fullcalendar/packages/daygrid/main.css">

    <script src="public/fullcalendar/packages/core/main.js"></script>
    <script src="public/fullcalendar/packages/daygrid/main.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            
            var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: ['interaction', 'dayGrid', 'timeGrid'],
                height: 'parent'
            });
            calendar.render();
        });
    </script>
    <script>    
        var calendar = new Calendar(calendarEl, {
            events: [
                {
                title: 'My Event',
                start: '2010-01-01',
                description: 'This is a cool event'
                }
                // more events here
            ],
  eventRender: function(info) {
    var tooltip = new Tooltip(info.el, {
      title: info.event.extendedProps.description,
      placement: 'top',
      trigger: 'hover',
      container: 'body'
    });
  }
});
    </script>

</head>
<body>
    <div id="calendar"></div>
</body>
</html>