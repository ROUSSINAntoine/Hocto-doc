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
            <?php
                $appointment = getAppointment((get($_SESSION['id'])));
                foreach ($appointment as $key) {
                    ?>
                    var date = new date('<?php echo $row['dateStr']; ?>' + 'T00:00:00' );        
                    
                    calendar.addEvent({
                        title: '<?php echo $row['notes'];?>,
                        start: date,
                        alldays: true,
                        color: <?php if ($row['typeEvent'] == "appoint") { echo '\'rouge\''; }?>
                    });
                    <?php
                }
            ?>
            calendar.render();
        });
    </script>
   
        
    
</head>
<body>
    <div id="calendar"></div>
</body>
</html>