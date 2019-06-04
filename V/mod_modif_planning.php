 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>
 </head>
 <body>
     <style>
    
	input:invalid {color : red; }
	input:valid {color : black ; }
    </style>
 
 <form action="index.php" method="GET">
    
<p>
    open
    <input type="time" name="open_time" min="07:00" max="21:30" required>/><br/>
   
    break_time
    <input type="time" name="break_time" min="11:00" max="21:30" required> /><br/>
    resume
    <input type="time" name="resume_time" min="11:30" max="21:30" required>/><br/>
    fin
    <input type="time" name="close_time" min="11:00" max="22:30" required> /><br/>
    durée
    <input type="number" name="length_time" min="10" max="120" required>/><br/>
    days
    <input type="text" name="days_time"/><br/>
    id planning
    <input type="text" name="id"/><br/>
    début des vacanse
    <input type="date" name="start_hollyday"/><br/>
    fin des vacanse
    <input type="date" name="end_hollyday"/><br>
    <input type="hidden" name="practitioner" value="<?php echo $_SESSION['id']?>">
    <input type="hidden" name="page" value="modif_planning">
    <input type="submit" value="valider" >
</form>
<a href="index.php?page=login"><button>return</button></a>

</p>
</body>
 </html>