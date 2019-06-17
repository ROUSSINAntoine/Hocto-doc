<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Document</title>
 </head>
 <body>
 <ul class="nav nav-tabs" id="mychange" role="tablist" name="change">
  <li class="nav-item">
    <a class="nav-link active" id="créer-tab" data-toggle="tab" href="#créer" role="tab" aria-controls="créer" aria-selected="true">créer</a>
    </li>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="modif-tab" data-toggle="tab" href="#modif" role="tab" aria-controls="modif" aria-selected="false">modif</a>
   
  </li>
  </body>
 <body>
    <style>
    
	input:invalid {color : red; }
	input:valid {color : black ; }
    </style>

<?php include("V/navbar.html"); ?> 
<div class="tab-content" id="mycréerContent" name="créer">
  <div class="tab-pane fade show active" id="créer" role="tabpanel" aria-labelledby="créer-tab">

<ul class="nav nav-tabs" id="myTab" role="tablist" name="creer">
  <li class="nav-item">
    <a class="nav-link active" id="Monday-tab" data-toggle="tab" href="#Monday" role="tab" aria-controls="Monday" aria-selected="true">Monday</a>
    </li>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="tuesday-tab" data-toggle="tab" href="#Tuesday" role="tab" aria-controls="tuesday" aria-selected="false">tuesday</a>
   
  </li>
  <li class="nav-item">
    <a class="nav-link" id="Wednesday-tab" data-toggle="tab" href="#Wednesday" role="tab" aria-controls="Wednesday" aria-selected="false">Wednesday</a>
    
  </li>
  <li class="nav-item">
    <a class="nav-link" id="Thursday-tab" data-toggle="tab" href="#Thursday" role="tab" aria-controls="Thursday" aria-selected="false">Thursday</a>
    
  </li>
  <li class="nav-item">
    <a class="nav-link" id="Friday-tab" data-toggle="tab" href="#Friday" role="tab" aria-controls="Friday" aria-selected="false">Friday</a>
    
  </li>
  <li class="nav-item">
    <a class="nav-link" id="Saturday-tab" data-toggle="tab" href="#Saturday" role="tab" aria-controls="Saturday" aria-selected="false">Saturday</a>
    
  </li>
  <li class="nav-item">
    <a class="nav-link" id="Sunday-tab" data-toggle="tab" href="#Sunday" role="tab" aria-controls="sunday" aria-selected="false">Sunday</a>
    
  </li>
  <li class="nav-item">
    <a class="nav-link" id="Hollyday-tab" data-toggle="tab" href="#Hollyday" role="tab" aria-controls="Hollyday" aria-selected="false">Hollyday</a>
    
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="Monday" role="tabpanel" aria-labelledby="Monday-tab">
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
        days : lundi <br>
        <input type="hidden" name="days_time" value="lundi"><br>
        <input type="hidden" name="practitioner" value="<?php echo $_SESSION['id']?>">
        <input type="hidden" name="page" value="créer_planning">
        <input type="submit" value="valider" >
    </form>
    <a href="index.php?page=login"><button>return</button></a>
    </p></div>
  <div class="tab-pane fade" id="Tuesday" role="tabpanel" aria-labelledby="Tuesday-tab">
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
        days : mardi <br>
        <input type="hidden" name="days_time" value="mardi"><br>
        <input type="hidden" name="practitioner" value="<?php echo $_SESSION['id']?>">
        <input type="hidden" name="page" value="créer_planning">
        <input type="submit" value="valider" >
    </form>
    <a href="index.php?page=login"><button>return</button></a>
    </p></div>
  <div class="tab-pane fade" id="Wednesday" role="tabpanel" aria-labelledby="Wednesday-tab">
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
        <input type="hidden" name="page" value="créer_planning">
        <input type="submit" value="valider" >
    </form>
    <a href="index.php?page=login"><button>return</button></a>
    </p></div>
  <div class="tab-pane fade" id="Thursday" role="tabpanel" aria-labelledby="Thursday-tab">
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
        <input type="hidden" name="page" value="créer_planning">
        <input type="submit" value="valider" >
    </form>
    <a href="index.php?page=login"><button>return</button></a>
    </p></div>
  <div class="tab-pane fade" id="Friday" role="tabpanel" aria-labelledby="Friday-tab">
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
        <input type="hidden" name="page" value="créer_planning">
        <input type="submit" value="valider" >
    </form>
    <a href="index.php?page=login"><button>return</button></a>
    </p></div>
  <div class="tab-pane fade" id="Saturday" role="tabpanel" aria-labelledby="Saturday-tab">
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
        <input type="hidden" name="page" value="créer_planning">
        <input type="submit" value="valider" >
    </form>
    <a href="index.php?page=login"><button>return</button></a>
    </p></div>
  <div class="tab-pane fade" id="Sunday" role="tabpanel" aria-labelledby="Sunday-tab">
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
        <input type="hidden" name="page" value="créer_planning">
        <input type="submit" value="valider" >
    </form>
    <a href="index.php?page=login"><button>return</button></a>
    </p></div>
     <div class="tab-pane fade" id="Hollyday" role="tabpanel" aria-labelledby="Hollyday-tab">
  <form action="index.php" method="GET">
    <p>
        start hollyday
        <input type="date" name="start_hollyday"><br/>
    
        end hollyday
        <input type="date" name="end_hollyday"><br/>
        
        <input type="hidden" name="practitioner" value="<?php echo $_SESSION['id']?>">
        <input type="hidden" name="page" value="créer_planning">
        <input type="submit" value="valider" >
    </form>
    <a href="index.php?page=login"><button>return</button></a>
    </p></div>
</div>
</div>

</body>
<body>
<div class="tab-content" id="mychangeContent" value="modif">
  <div class="tab-pane fade show active" id="modif" role="tabpanel" aria-labelledby="modif-tab">

<ul class="nav nav-tabs" id="mymodif" role="tablist" name="modif">
  <li class="nav-item">
    <a class="nav-link active" id="monday-tab" data-toggle="tab" href="#monday" role="tab" aria-controls="monday" aria-selected="true">monday</a>
    </li>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="tuesday-tab" data-toggle="tab" href="#tuesday" role="tab" aria-controls="tuesday" aria-selected="false">tuesday</a>
   
  </li>
  <li class="nav-item">
    <a class="nav-link" id="wednesday-tab" data-toggle="tab" href="#wednesday" role="tab" aria-controls="wednesday" aria-selected="false">wednesday</a>
    
  </li>
  <li class="nav-item">
    <a class="nav-link" id="thursday-tab" data-toggle="tab" href="#thursday" role="tab" aria-controls="thursday" aria-selected="false">thursday</a>
    
  </li>
  <li class="nav-item">
    <a class="nav-link" id="friday-tab" data-toggle="tab" href="#friday" role="tab" aria-controls="friday" aria-selected="false">friday</a>
    
  </li>
  <li class="nav-item">
    <a class="nav-link" id="saturday-tab" data-toggle="tab" href="#saturday" role="tab" aria-controls="saturday" aria-selected="false">saturday</a>
    
  </li>
  <li class="nav-item">
    <a class="nav-link" id="sunday-tab" data-toggle="tab" href="#sunday" role="tab" aria-controls="sunday" aria-selected="false">sunday</a>
    
  </li>
  <li class="nav-item">
    <a class="nav-link" id="hollyday-tab" data-toggle="tab" href="#hollyday" role="tab" aria-controls="hollyday" aria-selected="false">hollyday</a>
    
  </li>
</ul>
<div class="tab-content" id="mymodifContent">
  <div class="tab-pane fade show active" id="monday" role="tabpanel" aria-labelledby="monday-tab">
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
        days :lundi <br>
        <input type="hidden" name="days_time" value="lundi"><br>
        <input type="hidden" name="practitioner" value="<?php echo $_SESSION['id']?>">
        <input type="hidden" name="page" value="modif_planning">
        <input type="submit" value="valider" >
    </form>
    <a href="index.php?page=login"><button>return</button></a>
    </p></div>
  <div class="tab-pane fade" id="tuesday" role="tabpanel" aria-labelledby="tuesday-tab">
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
        days : mardi <br>
        <input type="hidden" name="days_time" value="mardi"><br>
        <input type="hidden" name="practitioner" value="<?php echo $_SESSION['id']?>">
        <input type="hidden" name="page" value="modif_planning">
        <input type="submit" value="valider" >
    </form>
    <a href="index.php?page=login"><button>return</button></a>
    </p></div>
  <div class="tab-pane fade" id="wednesday" role="tabpanel" aria-labelledby="wednesday-tab">
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
        days : mercredi<br>
        <input type="hidden" name="days_time" value="mercredi"><br>
        <input type="hidden" name="practitioner" value="<?php echo $_SESSION['id']?>">
        <input type="hidden" name="page" value="modif_planning">
        <input type="submit" value="valider" >
    </form>
    <a href="index.php?page=login"><button>return</button></a>
    </p></div>
  <div class="tab-pane fade" id="thursday" role="tabpanel" aria-labelledby="thursday-tab">
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
        days : jeudi <br>
        <input type="hidden" name="days_time" value="jeudi"><br>
        <input type="hidden" name="practitioner" value="<?php echo $_SESSION['id']?>">
        <input type="hidden" name="page" value="modif_planning">
        <input type="submit" value="valider" >
    </form>
    <a href="index.php?page=login"><button>return</button></a>
    </p></div>
  <div class="tab-pane fade" id="friday" role="tabpanel" aria-labelledby="friday-tab">
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
        days : vendredi <br>
        <input type="hidden" name="days_time" value="vendredi"><br>
        <input type="hidden" name="practitioner" value="<?php echo $_SESSION['id']?>">
        <input type="hidden" name="page" value="modif_planning">
        <input type="submit" value="valider" >
    </form>
    <a href="index.php?page=login"><button>return</button></a>
    </p></div>
  <div class="tab-pane fade" id="saturday" role="tabpanel" aria-labelledby="saturday-tab">
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
        days : samedi<br>
        <input type="hidden" name="days_time" value="samedi"><br>
        <input type="hidden" name="practitioner" value="<?php echo $_SESSION['id']?>">
        <input type="hidden" name="page" value="modif_planning">
        <input type="submit" value="valider" >
    </form>
    <a href="index.php?page=login"><button>return</button></a>
    </p></div>
  <div class="tab-pane fade" id="sunday" role="tabpanel" aria-labelledby="sunday-tab">
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
        days : dimanche <br>
        <input type="hidden" name="days_time" value="dimanche"><br>
        <input type="hidden" name="practitioner" value="<?php echo $_SESSION['id']?>">
        <input type="hidden" name="page" value="modif_planning">
        <input type="submit" value="valider" >
    </form>
    <a href="index.php?page=login"><button>return</button></a>
    </p></div>
    <div class="tab-pane fade" id="hollyday" role="tabpanel" aria-labelledby="hollyday-tab">
  <form action="index.php" method="GET">
    <p>
        start hollyday
        <input type="date" name="start_hollyday"><br/>
    
        end hollyday
        <input type="date" name="end_hollyday"><br/>
        
        <input type="hidden" name="practitioner" value="<?php echo $_SESSION['id']?>">
        <input type="hidden" name="page" value="modif_planning">
        <input type="submit" value="valider" >
    </form>
    <a href="index.php?page=login"><button>return</button></a>
    </p></div>
</div>
</div>
</body>
</html>