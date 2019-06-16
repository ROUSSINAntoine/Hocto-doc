<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Account</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style/custom_nav.css">
    <style>
            input:invalid {color : red; }
            input:valid {color : black ; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <span class="navbar-brand">Hocto'doc</span>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                </li>
                </ul>
                <a class="nav-link custom" href="index.php?page=logout">Logout</a>
            </div>
        </nav>
    <form action="index.php" method="GET">
        email : <input type="text" name="emails"pattern="[A-z0-9._%+-]+@[a-z0-9.-]+[.][a-z]{2,3}$" value="<?php echo $data['email']?>"><br>
        password : <input type="text" name="psw"minlength='4' maxlength='50' value="<?php echo $data['psw']?>"><br>
        firstname : <input type="text" name="firstname"require pattern="[A-z ' - é è ê ç à ï]{2,90}" value="<?php echo $data['firstname']?>"><br>
        lastname : <input type="text" name="lastname"require pattern="[A-z ' - é è ê ç à ï]{2,90}" value="<?php echo $data['lastname']?>"><br>
        phone : <input type="text" name="phone"require pattern="[0-9]{10}"  value="<?php echo $data['phone_number']?>"><br>
        adrs : <input type="text" name="adrs" value="<?php echo $data['adrs']?>"><br>
        city : <input type="text" name="city" value="<?php echo $data['city']?>"><br>
        postcode : <input type="text" name="postcode"require pattern="[0-9]{5}" value="<?php echo $data['postcode']?>"><br>
        <input type="hidden" name="page" value="home_prac">
        <input type="hidden" name="email" value="<?php echo $data['email']?>">
        <input type="hidden" name="id" value="<?php echo $data['id']?>">
        <input type="submit" value="confirm">
    </form>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>