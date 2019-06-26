<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>calendar</title>
        
    </head>
    <link rel="stylesheet" href="public/fullcalendar/packages/core/main.css">
    <link rel="stylesheet" href="public/fullcalendar/packages/daygrid/main.css">

    <script src="public/fullcalendar/packages/core/main.js"></script>
    <script src="public/fullcalendar/packages/daygrid/main.js"></script>

    <script>
    <?php require("M/get_sql.php"); ?>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            
            var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: ['interaction', 'dayGrid'],
                height: 'parent'
            });
            <?php
                $appointment = get_appointment($_SESSION['id']);
                foreach ($appointment as $row) {
                   
                    ?>
                    
                    calendar.addEvent({
                        title: '<?php echo $row['observations'];?>' + '<?php echo $row['hrrdv']; ?>',
                        start: '<?php echo $row['dtrdv']; ?>',
                        allday: false,
                        color: 'red',
                        textColor: 'black'
                    });
                    <?php
                }
            ?>
            calendar.render();
        });
    </script>
   
        
    

<body>
    <div id="calendar"></div>
</body>
</html>