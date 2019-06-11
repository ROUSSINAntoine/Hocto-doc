<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>appointement</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style/custom_nav.css">
</head>
<?php

$date = date('Y-m-j');?>
<body>
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
    <form action="index.php" method="GET">
        <input type="date" name="dtrdv" min="2019-11-06"required></br>
        <select name="patient">
                <?php echo $select ?>
        </select><br>
        <select name="hours">
                <?php echo $select_hours ?>
        </select>         
        <select name="minutes">
                <?php echo $select_minutes ?>
        </select>
        <input type="hidden" name="page" value="appointment">
        <input type="hidden" name="doc" value="<?php echo $_GET["doc"] ?>">
        <input type="submit" value="go">
    </form>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>