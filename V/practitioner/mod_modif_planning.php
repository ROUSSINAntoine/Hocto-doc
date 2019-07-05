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
    None working day
      <input type="checkbox" name="qs" value=1 id="qs" onchange="ta_mere(this)"><br>
        open
        <input type="time" name="open_time" min="00:00" max="23:59" step="300" required value="<?php echo $data_monday['open_time']?>" onchange="min_fin(0, 1)" id="0" ><br/>
    
        break_time
        <input type="time" name="break_time" min="00:00" max="23:59" step="300" required value="<?php echo $data_monday['break_time']?>" onchange="min_fin(1, 2)" id="1" ><br/>
        resume
        <input type="time" name="resume_time" min="00:00" max="23:59" step="300" required value="<?php echo $data_monday['resume_time']?>"onchange="min_fin(2, 3)" id="2" ><br/>
        end
        <input type="time" name="close_time" min="00:00" max="23:59" step="300" required value="<?php echo $data_monday['close_time']?>" id="3" ><br/>
        appointment time
        <input type="number" name="length_time" min="5" max="60" step="5" required value="<?php echo $data_monday['length_time']?>" id="a"><br/>

        <input type="hidden" name="days_time" value="monday"><br>
        <input type="hidden" name="practitioner" value="<?php echo $_SESSION['id']?>">
        <input type="hidden" name="page" value="modif_planning">
        <input type="submit" name="modif" value="confirm" >
    </form>
    <a href="index.php?page=login"><button>return</button></a><br><br>
    
    <form action="index.php" method="GET">
    <input type="hidden" name="days_time" value="monday">
    <input type="hidden" name="page" value="delete_planning">
    <input type="submit" name="delete" value="delete">
    </form>
    </p></div>
  <div class="tab-pane fade" id="Tuesday" role="tabpanel" aria-labelledby="tuesday-tab">
   <form action="index.php" method="GET">
    <p>
    None working day
      <input type="checkbox" name="qs" value=1 id="qs" onchange="ta_mere(this)"><br>
       open
        <input type="time" name="open_time" min="00:00" max="23:59" step="300" required value="<?php echo $data_tuesday['open_time']?>" onchange="min_fin(4, 5)" id="4" ><br/>
    
        break_time
        <input type="time" name="break_time" min="00:00" max="23:59" step="300" required value="<?php echo $data_tuesday['break_time']?>" onchange="min_fin(5, 6)" id="5" ><br/>
        resume
        <input type="time" name="resume_time" min="00:00" max="23:59" step="300" required value="<?php echo $data_tuesday['resume_time']?>"onchange="min_fin(6, 7)" id="6" ><br/>
        end
        <input type="time" name="close_time" min="00:00" max="23:59" step="300" required value="<?php echo $data_tuesday['close_time']?>" id="7" ><br/>
        appointment time
        <input type="number" name="length_time" min="5" max="60" step="5" required value="<?php echo $data_tuesday['length_time']?>" id="b"><br/>
        <input type="hidden" name="days_time" value="tuesday"><br>
        <input type="hidden" name="practitioner" value="<?php echo $_SESSION['id']?>">
        <input type="hidden" name="page" value="modif_planning">
        <input type="submit" value="confirm" >
    </form>
    <a href="index.php?page=login"><button>return</button></a><br><br>

    <form action="index.php" method="GET">
    <input type="hidden" name="days_time" value="tuesday">
    <input type="hidden" name="page" value="delete_planning">
    <input type="submit" name="delete" value="delete">
    </form>
    </p></div>
  <div class="tab-pane fade" id="Wednesday" role="tabpanel" aria-labelledby="Wednesday-tab">
  <form action="index.php" method="GET">
    <p>
    None working day
      <input type="checkbox" name="qs" value=1 id="qs" onchange="ta_mere(this)"><br>
        open
        <input type="time" name="open_time" min="00:00" max="23:59" step="300" required value="<?php echo $data_wednesday['open_time']?>" onchange="min_fin(8, 9)" id="8" ><br/>
    
        break_time
        <input type="time" name="break_time" min="00:00" max="23:59" step="300" required value="<?php echo $data_wednesday['break_time']?>" onchange="min_fin(9, 10)" id="9" ><br/>
        resume
        <input type="time" name="resume_time" min="00:00" max="23:59" step="300" required value="<?php echo $data_wednesday['resume_time']?>"onchange="min_fin(10, 11)" id="10" ><br/>
        end
        <input type="time" name="close_time" min="00:00" max="23:59" step="300" required value="<?php echo $data_wednesday['close_time']?>" id="11" ><br/>
        appointment time
        <input type="number" name="length_time" min="5" max="60" step="5" required value="<?php echo $data_wednesday['length_time']?>" id="c"><br/>
        <input type="hidden" name="days_time" value="wednesday"><br>
        <input type="hidden" name="practitioner" value="<?php echo $_SESSION['id']?>">
        <input type="hidden" name="page" value="modif_planning">
        <input type="submit" value="confirm" >
    </form>
    <a href="index.php?page=login"><button>return</button></a><br><br>

    <form action="index.php" method="GET">
    <input type="hidden" name="days_time" value="wednesday">
    <input type="hidden" name="page" value="delete_planning">
    <input type="submit" name="delete" value="delete">
    </form>
    </p></div>
  <div class="tab-pane fade" id="Thursday" role="tabpanel" aria-labelledby="Thursday-tab">
  <form action="index.php" method="GET">
    <p>
    None working day
      <input type="checkbox" name="qs" value=1 id="qs" onchange="ta_mere(this)"><br>
       open
        <input type="time" name="open_time" min="00:00" max="23:59" step="300" required value="<?php echo $data_thursday['open_time']?>" onchange="min_fin(12, 13)" id="12" ><br/>
    
        break_time
        <input type="time" name="break_time" min="00:00" max="23:59" step="300" required value="<?php echo $data_thursday['break_time']?>" onchange="min_fin(13, 14)" id="13" ><br/>
        resume
        <input type="time" name="resume_time" min="00:00" max="23:59" step="300" required value="<?php echo $data_thursday['resume_time']?>"onchange="min_fin(14, 15)" id="14" ><br/>
        end
        <input type="time" name="close_time" min="00:00" max="23:59" step="300" required value="<?php echo $data_thursday['close_time']?>" id="15" ><br/>
        appointment time
        <input type="number" name="length_time" min="5" max="60" step="5" required value="<?php echo $data_thursday['length_time']?>" id="d"><br/>
        <input type="hidden" name="days_time" value="thursday"><br>
        <input type="hidden" name="practitioner" value="<?php echo $_SESSION['id']?>">
        <input type="hidden" name="page" value="modif_planning">
        <input type="submit" value="confirm" >
    </form>
    <a href="index.php?page=login"><button>return</button></a><br><br>

    <form action="index.php" method="GET">
    <input type="hidden" name="days_time" value="thursday">
    <input type="hidden" name="page" value="delete_planning">
    <input type="submit" name="delete" value="delete">
    </form>
    </p></div>
  <div class="tab-pane fade" id="Friday" role="tabpanel" aria-labelledby="Friday-tab">
  <form action="index.php" method="GET">
    <p>
    None working day
      <input type="checkbox" name="qs" value=1 id="qs" onchange="ta_mere(this)"><br>
       open
        <input type="time" name="open_time" min="00:00" max="23:59" step="300" required value="<?php echo $data_friday['open_time']?>" onchange="min_fin(16, 17)" id="16" ><br/>
    
        break_time
        <input type="time" name="break_time" min="00:00" max="23:59" step="300" required value="<?php echo $data_friday['break_time']?>" onchange="min_fin(17, 18)" id="17" ><br/>
        resume
        <input type="time" name="resume_time" min="00:00" max="23:59" step="300" required value="<?php echo $data_friday['resume_time']?>"onchange="min_fin(18, 19)" id="18" ><br/>
        end
        <input type="time" name="close_time" min="00:00" max="23:59" step="300" required value="<?php echo $data_friday['close_time']?>" id="19" ><br/>
        appointment time
        <input type="number" name="length_time" min="5" max="60" step="5" required value="<?php echo $data_friday['length_time']?>" id="e"><br/>
        <input type="hidden" name="days_time" value="friday"><br>
        <input type="hidden" name="practitioner" value="<?php echo $_SESSION['id']?>">
        <input type="hidden" name="page" value="modif_planning">
        <input type="submit" value="confirm" >
    </form>
    <a href="index.php?page=login"><button>return</button></a><br><br>

    <form action="index.php" method="GET">
    <input type="hidden" name="days_time" value="friday">
    <input type="hidden" name="page" value="delete_planning">
    <input type="submit" name="delete" value="delete">
    </form>
    </p></div>
  <div class="tab-pane fade" id="Saturday" role="tabpanel" aria-labelledby="Saturday-tab">
  <form action="index.php" method="GET">
    <p>
    None working day
      <input type="checkbox" name="qs" value=1 id="qs" onchange="ta_mere(this)"><br>
        open
        <input type="time" name="open_time" min="00:00" max="23:59" step="300" required value="<?php echo $data_saturday['open_time']?>" onchange="min_fin(20, 21)" id="20" ><br/>
    
        break_time
        <input type="time" name="break_time" min="00:00" max="23:59" step="300" required value="<?php echo $data_saturday['break_time']?>" onchange="min_fin(21, 22)" id="21" ><br/>
        resume
        <input type="time" name="resume_time" min="00:00" max="23:59" step="300" required value="<?php echo $data_saturday['resume_time']?>"onchange="min_fin(22, 23)" id="22" ><br/>
        end
        <input type="time" name="close_time" min="00:00" max="23:59" step="300" required value="<?php echo $data_saturday['close_time']?>" id="23" ><br/>
        appointment time
        <input type="number" name="length_time" min="5" max="60" step="5" required value="<?php echo $data_saturday['length_time']?>" id="f"><br/>
        <input type="hidden" name="days_time" value="saturday"><br>
        <input type="hidden" name="practitioner" value="<?php echo $_SESSION['id']?>">
        <input type="hidden" name="page" value="modif_planning">
        <input type="submit" value="confirm" >
    </form>
    <a href="index.php?page=login"><button>return</button></a><br><br>

    <form action="index.php" method="GET">
    <input type="hidden" name="days_time" value="saturday">
    <input type="hidden" name="page" value="delete_planning">
    <input type="submit" name="delete" value="delete">
    </form>
    </p></div>
  <div class="tab-pane fade" id="Sunday" role="tabpanel" aria-labelledby="Sunday-tab">
  <form action="index.php" method="GET">
    <p>
    None working day
      <input type="checkbox" name="qs" value=1 id="qs" onchange="ta_mere(this)"><br>
         open
        <input type="time" name="open_time" min="00:00" max="23:59" step="300" required value="<?php echo $data_sunday['open_time']?>" onchange="min_fin(24, 25)" id="24" ><br/>
    
        break_time
        <input type="time" name="break_time" min="00:00" max="23:59" step="300" required value="<?php echo $data_sunday['break_time']?>" onchange="min_fin(25, 26)" id="25" ><br/>
        resume
        <input type="time" name="resume_time" min="00:00" max="23:59" step="300" required value="<?php echo $data_sunday['resume_time']?>"onchange="min_fin(26, 27)" id="26" ><br/>
        end
        <input type="time" name="close_time" min="00:00" max="23:59" step="300" required value="<?php echo $data_sunday['close_time']?>" id="27" ><br/>
        appointment time
        <input type="number" name="length_time" min="5" max="60" step="5" required value="<?php echo $data_sunday['length_time']?>" id="g"><br/>
        <input type="hidden" name="days_time" value="sunday"><br>
        <input type="hidden" name="practitioner" value="<?php echo $_SESSION['id']?>">
        <input type="hidden" name="page" value="modif_planning">
        <input type="submit" value="confirm" >
    </form>
    <a href="index.php?page=login"><button>return</button></a><br><br>

    <form action="index.php" method="GET">
    <input type="hidden" name="days_time" value="sunday">
    <input type="hidden" name="page" value="delete_planning">
    <input type="submit" name="delete" value="delete">
    </form>
    </p></div>
    <div class="tab-pane fade" id="Hollyday" role="tabpanel" aria-labelledby="Hollyday-tab">
  <form action="index.php" method="GET">
    <p>
        brake start
        <input type="date" name="start_hollyday" min="<?php echo $ajd ?>" required value="<?php echo $data_hollyday['start_hollyday']?>"onchange="min_fin(28, 29)" id="28"><br/>
    
        brake end
        <input type="date" name="end_hollyday" min="<?php echo $ajd ?>" required value="<?php echo $data_hollyday['end_hollyday']?>" id="29"><br/>
        
        <input type="hidden" name="practitioner" value="<?php echo $_SESSION['id']?>">
        <input type="hidden" name="page" value="modif_planning">
        <input type="submit" value="confirm" ><br>
    </form>
    <a href="index.php?page=login"><button>return</button></a><br><br>
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
                document.getElementById("4").disabled = true;
                document.getElementById("5").disabled = true;
                document.getElementById("6").disabled = true;
                document.getElementById("7").disabled = true;
                document.getElementById("b").disabled = true;
                document.getElementById("8").disabled = true;
                document.getElementById("9").disabled = true;
                document.getElementById("10").disabled = true;
                document.getElementById("11").disabled = true;
                document.getElementById("c").disabled = true;
                document.getElementById("12").disabled = true;
                document.getElementById("13").disabled = true;
                document.getElementById("14").disabled = true;
                document.getElementById("15").disabled = true;
                document.getElementById("d").disabled = true;
                document.getElementById("16").disabled = true;
                document.getElementById("17").disabled = true;
                document.getElementById("18").disabled = true;
                document.getElementById("19").disabled = true;
                document.getElementById("e").disabled = true;
                document.getElementById("20").disabled = true;
                document.getElementById("21").disabled = true;
                document.getElementById("22").disabled = true;
                document.getElementById("23").disabled = true;
                document.getElementById("f").disabled = true;
                document.getElementById("24").disabled = true;
                document.getElementById("25").disabled = true;
                document.getElementById("26").disabled = true;
                document.getElementById("27").disabled = true;
                document.getElementById("g").disabled = true;

                break;
        }
    }
</script>
</body>
</html>