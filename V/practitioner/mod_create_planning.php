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
    <style>
    
	input:invalid {color : red; }
	input:valid {color : black ; }
    </style>

<?php include("V/navbar.html"); ?> 

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="Monday-tab" data-toggle="tab" href="#monday" role="tab" aria-controls="Monday" aria-selected="true">Monday</a>
    </li>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="tuesday-tab" data-toggle="tab" href="#tuesday" role="tab" aria-controls="tuesday" aria-selected="false">tuesday</a>
   
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
      None working day
      <input type="checkbox" name="qs" value=1 id="qs" onchange="ta_mere(this)">

       open
        <input type="time" name="open_time" min="00:00" max="23:59" required value="<?php echo $data_monday['open_time']?>" onchange="min_fin(0, 1)" id="0" ><br/>
    
        break_time
        <input type="time" name="break_time" min="00:00" max="23:59" required value="<?php echo $data_monday['break_time']?>" onchange="min_fin(1, 2)" id="1" ><br/>
        resume
        <input type="time" name="resume_time" min="00:00" max="23:59" required value="<?php echo $data_monday['resume_time']?>"onchange="min_fin(2, 3)" id="2" ><br/>
        end
        <input type="time" name="close_time" min="00:00" max="23:59" required value="<?php echo $data_monday['close_time']?>" id="3" ><br/>
        appointment time
        <input type="number" name="length_time" min="10" max="120" required value="<?php echo $data_monday['length_time']?>" id="a"><br/>
        <input type="hidden" name="days_time" value="monday"><br>
        <input type="hidden" name="practitioner" value="<?php echo $_SESSION['id']?>">
        <input type="hidden" name="page" value="create_planning">
        <input type="submit" value="confirm" >
    </form>
    <a href="index.php?page=login"><button>return</button></a>
    </p></div>
  <div class="tab-pane fade" id="tuesday" role="tabpanel" aria-labelledby="tuesday-tab">
   <form action="index.php" method="GET">
    <p>
      open
        <input type="time" name="open_time" min="00:00" max="23:59" required value="<?php echo $data_tuesday['open_time']?>" onchange="min_fin(4, 5)" id="4" ><br/>
    
        break_time
        <input type="time" name="break_time" min="00:00" max="23:59" required value="<?php echo $data_tuesday['break_time']?>" onchange="min_fin(5, 6)" id="5" ><br/>
        resume
        <input type="time" name="resume_time" min="00:00" max="23:59" required value="<?php echo $data_tuesday['resume_time']?>"onchange="min_fin(6, 7)" id="6" ><br/>
        end
        <input type="time" name="close_time" min="00:00" max="23:59" required value="<?php echo $data_tuesday['close_time']?>" id="7" ><br/>
        appointment time
        <input type="number" name="length_time" min="10" max="120" required value="<?php echo $data_tuesday['length_time']?>"><br/>
        <input type="hidden" name="days_time" value="tuesday"><br>
        <input type="hidden" name="practitioner" value="<?php echo $_SESSION['id']?>">
        <input type="hidden" name="page" value="create_planning">
        <input type="submit" value="confirm" >
    </form>
    <a href="index.php?page=login"><button>return</button></a>
    </p></div>
  <div class="tab-pane fade" id="Wednesday" role="tabpanel" aria-labelledby="Wednesday-tab">
  <form action="index.php" method="GET">
    <p>
        open
        <input type="time" name="open_time" min="00:00" max="23:59" required value="<?php echo $data_wednesday['open_time']?>" onchange="min_fin(8, 9)" id="8" ><br/>
    
        break_time
        <input type="time" name="break_time" min="00:00" max="23:59" required value="<?php echo $data_wednesday['break_time']?>" onchange="min_fin(9, 10)" id="9" ><br/>
        resume
        <input type="time" name="resume_time" min="00:00" max="23:59" required value="<?php echo $data_wednesday['resume_time']?>"onchange="min_fin(10, 11)" id="10" ><br/>
        end
        <input type="time" name="close_time" min="00:00" max="23:59" required value="<?php echo $data_wednesday['close_time']?>" id="11" ><br/>
        appointment time
        <input type="number" name="length_time" min="10" max="120" required value="<?php echo $data_wednesday['length_time']?>"><br/>
        <input type="hidden" name="days_time" value="wednesday"><br>
        <input type="hidden" name="practitioner" value="<?php echo $_SESSION['id']?>">
        <input type="hidden" name="page" value="create_planning">
        <input type="submit" value="confirm" >
    </form>
    <a href="index.php?page=login"><button>return</button></a>
    </p></div>
  <div class="tab-pane fade" id="Thursday" role="tabpanel" aria-labelledby="Thursday-tab">
  <form action="index.php" method="GET">
    <p>
         open
        <input type="time" name="open_time" min="00:00" max="23:59" required value="<?php echo $data_thursday['open_time']?>" onchange="min_fin(12, 13)" id="12" ><br/>
    
        break_time
        <input type="time" name="break_time" min="00:00" max="23:59" required value="<?php echo $data_thursday['break_time']?>" onchange="min_fin(13, 14)" id="13" ><br/>
        resume
        <input type="time" name="resume_time" min="00:00" max="23:59" required value="<?php echo $data_thursday['resume_time']?>"onchange="min_fin(14, 15)" id="14" ><br/>
        end
        <input type="time" name="close_time" min="00:00" max="23:59" required value="<?php echo $data_thursday['close_time']?>" id="15" ><br/>
        appointment time
        <input type="number" name="length_time" min="10" max="120" required value="<?php echo $data_thursday['length_time']?>"><br/>
        <input type="hidden" name="days_time" value="thursday"><br>
        <input type="hidden" name="practitioner" value="<?php echo $_SESSION['id']?>">
        <input type="hidden" name="page" value="create_planning">
        <input type="submit" value="valider" >
    </form>
    <a href="index.php?page=login"><button>return</button></a>
    </p></div>
  <div class="tab-pane fade" id="Friday" role="tabpanel" aria-labelledby="Friday-tab">
  <form action="index.php" method="GET">
    <p>
        open
        <input type="time" name="open_time" min="00:00" max="23:59" required value="<?php echo $data_friday['open_time']?>" onchange="min_fin(16, 17)" id="16" ><br/>
    
        break_time
        <input type="time" name="break_time" min="00:00" max="23:59" required value="<?php echo $data_friday['break_time']?>" onchange="min_fin(17, 18)" id="17" ><br/>
        resume
        <input type="time" name="resume_time" min="00:00" max="23:59" required value="<?php echo $data_friday['resume_time']?>"onchange="min_fin(18, 19)" id="18" ><br/>
        end
        <input type="time" name="close_time" min="00:00" max="23:59" required value="<?php echo $data_friday['close_time']?>" id="19" ><br/>
        appointment time
        <input type="number" name="length_time" min="10" max="120" required value="<?php echo $data_friday['length_time']?>"><br/>
        <input type="hidden" name="days_time" value="friday"><br>
        <input type="hidden" name="practitioner" value="<?php echo $_SESSION['id']?>">
        <input type="hidden" name="page" value="create_planning">
        <input type="submit" value="confirm" >
    </form>
    <a href="index.php?page=login"><button>return</button></a>
    </p></div>
  <div class="tab-pane fade" id="Saturday" role="tabpanel" aria-labelledby="Saturday-tab">
  <form action="index.php" method="GET">
    <p>
        open
        <input type="time" name="open_time" min="00:00" max="23:59" required value="<?php echo $data_saturday['open_time']?>" onchange="min_fin(20, 21)" id="20" ><br/>
    
        break_time
        <input type="time" name="break_time" min="00:00" max="23:59" required value="<?php echo $data_saturday['break_time']?>" onchange="min_fin(21, 22)" id="21" ><br/>
        resume
        <input type="time" name="resume_time" min="00:00" max="23:59" required value="<?php echo $data_saturday['resume_time']?>"onchange="min_fin(22, 23)" id="22" ><br/>
        end
        <input type="time" name="close_time" min="00:00" max="23:59" required value="<?php echo $data_saturday['close_time']?>" id="23" ><br/>
        appointment time
        <input type="number" name="length_time" min="10" max="120" required value="<?php echo $data_saturday['length_time']?>"><br/>
        <input type="hidden" name="days_time" value="saturday"><br>
        <input type="hidden" name="practitioner" value="<?php echo $_SESSION['id']?>">
        <input type="hidden" name="page" value="create_planning">
        <input type="submit" value="confirm" >
    </form>
    <a href="index.php?page=login"><button>return</button></a>
    </p></div>
  <div class="tab-pane fade" id="Sunday" role="tabpanel" aria-labelledby="Sunday-tab">
  <form action="index.php" method="GET">
    <p>
        open
        <input type="time" name="open_time" min="00:00" max="23:59" required value="<?php echo $data_sunday['open_time']?>" onchange="min_fin(24, 25)" id="24" ><br/>
    
        break_time
        <input type="time" name="break_time" min="00:00" max="23:59" required value="<?php echo $data_sunday['break_time']?>" onchange="min_fin(25, 26)" id="25" ><br/>
        resume
        <input type="time" name="resume_time" min="00:00" max="23:59" required value="<?php echo $data_sunday['resume_time']?>"onchange="min_fin(26, 27)" id="26" ><br/>
        end
        <input type="time" name="close_time" min="00:00" max="23:59" required value="<?php echo $data_sunday['close_time']?>" id="27" ><br/>
        appointment time
        <input type="number" name="length_time" min="10" max="120" required value="<?php echo $data_sunday['length_time']?>"><br/>
        <input type="hidden" name="days_time" value="sunday"><br>
        <input type="hidden" name="practitioner" value="<?php echo $_SESSION['id']?>">
        <input type="hidden" name="page" value="create_planning">
        <input type="submit" value="confirm" >
    </form>
    <a href="index.php?page=login"><button>return</button></a>
    </p></div>
     <div class="tab-pane fade" id="Hollyday" role="tabpanel" aria-labelledby="Hollyday-tab">
  <form action="index.php" method="GET">
    <p>
         brake start
        <input type="date" name="start_hollyday" value="<?php echo $data_hollyday['start_hollyday']?>"onchange="min_fin(28, 29)" id="28"><br/>
    
        brake end
        <input type="date" name="end_hollyday" value="<?php echo $data_hollyday['end_hollyday']?>" id="29"><br/>
        
        <input type="hidden" name="practitioner" value="<?php echo $_SESSION['id']?>">
        <input type="hidden" name="page" value="create_planning">
        <input type="submit" value="confirm" >
    </form>
    <a href="index.php?page=login"><button>return</button></a>
    </p></div>
</div>
<script>
    function min_fin (b, a) {
        console.log("kebab");
        var date_min_fin = document.getElementById(a);
        var date_debut = document.getElementById(b).value;
        date_min_fin.setAttribute("min", date_debut);
    }

</script>
<script>
    function ta_mere (x) {
        switch (x.id) {
            case "qs":
                document.getElementById("0").disabled = true;
                document.getElementById("1").disabled = true;
                document.getElementById("2").disabled = true;
                document.getElementById("3").disabled = true;
                document.getElementById("a").disabled = true;
                break;
        }
    }
</script>
<?php
var_dump(empty($_GET["open_time"] ));
?>
</body>
</html>