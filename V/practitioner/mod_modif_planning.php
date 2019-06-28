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

<?php include_once("V/navbar.html"); ?> 

    <form action="index.php" method="GET">
        
    <p>
        open
        <input type="time" name="open_time" min="00:00" max="23:59" required ><br/>
    
        break_time
        <input type="time" name="break_time" min="00:00" max="23:59" required ><br/>
        resume
        <input type="time" name="resume_time" min="00:00" max="23:59" required ><br/>
        fin
        <input type="time" name="close_time" min="00:00" max="23:59" required ><br/>
        appointment time
        <input type="number" name="length_time" min="10" max="120" required ><br/>
        days : <br>
        <input type="hidden" name="days_time" value="lundi"><br>
        <input type="hidden" name="practitioner" value="<?php echo $_SESSION['id']?>">
        <input type="hidden" name="page" value="modif_planning">
        <input type="submit" value="valider" >
    </form>
    <a href="index.php?page=login"><button>return</button></a>
    </p>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="tuesday-tab" data-toggle="tab" href="tuesday" role="tab" aria-controls="tuesday" aria-selected="false">tuesday</a>
    <form action="index.php" method="GET">
    <p>
        open
        <input type="time" name="open_time" min="00:00" max="23:59" required ><br/>
    
        break_time
        <input type="time" name="break_time" min="00:00" max="23:59" required ><br/>
        resume
        <input type="time" name="resume_time" min="00:00" max="23:59" required ><br/>
        fin
        <input type="time" name="close_time" min="00:00" max="23:59" required ><br/>
        appointment time
        <input type="number" name="length_time" min="10" max="120" required ><br/>
        days : <br>
        <input type="hidden" name="days_time" value="mardi"><br>
        <input type="hidden" name="practitioner" value="<?php echo $_SESSION['id']?>">
        <input type="hidden" name="page" value="modif_planning">
        <input type="submit" value="valider" >
    </form>
    <a href="index.php?page=login"><button>return</button></a>
    </p>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="Wednesday-tab" data-toggle="tab" href="Wednesday" role="tab" aria-controls="Wednesday" aria-selected="false">Wednesday</a>
    <form action="index.php" method="GET">
    <p>
        open
        <input type="time" name="open_time" min="00:00" max="23:59" required ><br/>
    
        break_time
        <input type="time" name="break_time" min="00:00" max="23:59" required ><br/>
        resume
        <input type="time" name="resume_time" min="00:00" max="23:59" required ><br/>
        fin
        <input type="time" name="close_time" min="00:00" max="23:59" required ><br/>
        appointment time
        <input type="number" name="length_time" min="10" max="120" required ><br/>
        days : <br>
        <input type="hidden" name="days_time" value="mercredi"><br>
        <input type="hidden" name="practitioner" value="<?php echo $_SESSION['id']?>">
        <input type="hidden" name="page" value="modif_planning">
        <input type="submit" value="valider" >
    </form>
    <a href="index.php?page=login"><button>return</button></a>
    </p>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="Thursday-tab" data-toggle="tab" href="Thursday" role="tab" aria-controls="Thursday" aria-selected="false">Thursday</a>
    <form action="index.php" method="GET">
    <p>
        open
        <input type="time" name="open_time" min="00:00" max="23:59" required ><br/>
    
        break_time
        <input type="time" name="break_time" min="00:00" max="23:59" required ><br/>
        resume
        <input type="time" name="resume_time" min="00:00" max="23:59" required ><br/>
        fin
        <input type="time" name="close_time" min="00:00" max="23:59" required ><br/>
        appointment time
        <input type="number" name="length_time" min="10" max="120" required ><br/>
        days : <br>
        <input type="hidden" name="days_time" value="jeudi"><br>
        <input type="hidden" name="practitioner" value="<?php echo $_SESSION['id']?>">
        <input type="hidden" name="page" value="modif_planning">
        <input type="submit" value="valider" >
    </form>
    <a href="index.php?page=login"><button>return</button></a>
    </p>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="Friday-tab" data-toggle="tab" href="Friday" role="tab" aria-controls="Friday" aria-selected="false">Friday</a>
    <form action="index.php" method="GET">
    <p>
        open
        <input type="time" name="open_time" min="00:00" max="23:59" required ><br/>
    
        break_time
        <input type="time" name="break_time" min="00:00" max="23:59" required ><br/>
        resume
        <input type="time" name="resume_time" min="00:00" max="23:59" required ><br/>
        fin
        <input type="time" name="close_time" min="00:00" max="23:59" required ><br/>
        appointment time
        <input type="number" name="length_time" min="10" max="120" required ><br/>
        days : <br>
        <input type="hidden" name="days_time" value="vendredi"><br>
        <input type="hidden" name="practitioner" value="<?php echo $_SESSION['id']?>">
        <input type="hidden" name="page" value="modif_planning">
        <input type="submit" value="valider" >
    </form>
    <a href="index.php?page=login"><button>return</button></a>
    </p>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="Saturday-tab" data-toggle="tab" href="Saturday" role="tab" aria-controls="Saturday" aria-selected="false">Saturday</a>
    <form action="index.php" method="GET">
    <p>
        open
        <input type="time" name="open_time" min="00:00" max="23:59" required ><br/>
    
        break_time
        <input type="time" name="break_time" min="00:00" max="23:59" required ><br/>
        resume
        <input type="time" name="resume_time" min="00:00" max="23:59" required ><br/>
        fin
        <input type="time" name="close_time" min="00:00" max="23:59" required ><br/>
        appointment time
        <input type="number" name="length_time" min="10" max="120" required ><br/>
        days : <br>
        <input type="hidden" name="days_time" value="samedi"><br>
        <input type="hidden" name="practitioner" value="<?php echo $_SESSION['id']?>">
        <input type="hidden" name="page" value="modif_planning">
        <input type="submit" value="valider" >
    </form>
    <a href="index.php?page=login"><button>return</button></a>
    </p>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="Sunday-tab" data-toggle="tab" href="Sunday" role="tab" aria-controls="sunday" aria-selected="false">Sunday</a>
    <form action="index.php" method="GET">
    <p>
        open
        <input type="time" name="open_time" min="00:00" max="23:59" required ><br/>
    
        break_time
        <input type="time" name="break_time" min="00:00" max="23:59" required ><br/>
        resume
        <input type="time" name="resume_time" min="00:00" max="23:59" required ><br/>
        fin
        <input type="time" name="close_time" min="00:00" max="23:59" required ><br/>
        appointment time
        <input type="number" name="length_time" min="10" max="120" required ><br/>
        days : <br>
        <input type="hidden" name="days_time" value="dimanche"><br>
        <input type="hidden" name="practitioner" value="<?php echo $_SESSION['id']?>">
        <input type="hidden" name="page" value="modif_planning">
        <input type="submit" value="valider" >
    </form>
    <a href="index.php?page=login"><button>return</button></a>
    </p>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="Monday" role="tabpanel" aria-labelledby="Monday-tab">...</div>
  <div class="tab-pane fade" id="tuesday" role="tabpanel" aria-labelledby="tuesday-tab">...</div>
  <div class="tab-pane fade" id="Wednesday" role="tabpanel" aria-labelledby="Wednesday-tab">...</div>
  <div class="tab-pane fade" id="Thursday" role="tabpanel" aria-labelledby="Thursday-tab">...</div>
  <div class="tab-pane fade" id="Friday" role="tabpanel" aria-labelledby="Friday-tab">...</div>
  <div class="tab-pane fade" id="Saturday" role="tabpanel" aria-labelledby="Saturday-tab">...</div>
  <div class="tab-pane fade" id="Sunday" role="tabpanel" aria-labelledby="Sunday-tab">...</div>
</div>

</body>
</html>