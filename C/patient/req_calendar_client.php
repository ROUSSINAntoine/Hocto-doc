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
    var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: [ 'dayGrid', 'interaction' ],
            height: 'parent',
            header: {
              center: 'addEventBtn'
            },
            customButtons: {/*
              addEventBtn: {
                text: 'Ajouter une facture...',
                click: function() {
                  var dateStr = prompt('Entrer une date (YYYY-MM-DD)');
                  //var dateParsed = new Date(dateStr + 'T00:00:00'); // will be in local time
                 
                  var montant = prompt('Prix');
 
                  var notesUser = prompt('Notes');
 
                  var id = prompt('ID du Client')
 
                  post('controllers/backend.php', {typeForm: 'addFactureFromCalendar', notes: notesUser, prix: montant, idClient: id, date: dateStr});
 
                }
              }*/
            },
            dateClick: info => { // Clic sur une date
              // Date format : 2018-09-01
              window.location = `index.php?action=${dtrdv}`;
            },
            eventClick: info => { // Clic sur un event
              // Redirige sur la page de modif avec l'id
              window.location = `index.php?action=${id}`;
            }
        });
    </script>
   
        
    

<body>
    <div id="calendar"></div>
</body>
</html>