 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>
 </head>
 <body>
     
 
 <form action="index.php" method="GET">
    
<p>
    
    <input type="text" name="id_planning"/><br/>
    open
    <input type="time" name="open_time"/><br/>
    break_time
    <input type="time" name="break_time" /><br/>
    resume
    <input type="time" name="resume_time"/><br/>
    fin
    <input type="time" name="close_time" /><br/>
    durée
    <input type="number" name="length_time"/><br/>
    days
    <input type="text" name="days_time"/><br/>
    id practicien 
    <input type="text" name="practitioner"/><br/>
    début des vacanse
    <input type="date" name="start_holiday"/><br/>
    fin des vacanse
    <input type="date" name="end_holiday"/><br>
    <input type="hidden" name="page" value="modif_planning">
    <input type="submit" value="valider" />
</form>

</p>
</body>
 </html>