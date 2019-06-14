 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style/custom_nav.css">
 </head>
 <body>
    <style>
    
	input:invalid {color : red; }
	input:valid {color : black ; }
    </style>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <span class="navbar-brand">Hocto'doc</span>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php?page=login">Home <span class="sr-only">(current)</span></a>
            </li>
            </ul>
            <a class="nav-link custom" href="index.php?page=account">My account </a>
            <a class="nav-link custom" href="index.php?page=logout">Logout</a>
        </div>
    </nav>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="Monday-tab" data-toggle="tab" href="Monday" role="tab" aria-controls="Monday" aria-selected="true">Monday</a>
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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>