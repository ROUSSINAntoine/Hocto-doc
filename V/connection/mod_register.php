<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title>Register</title>
        <style>
            input:invalid {color : red; }
            input:valid {color : white ; }
        </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    </head>
    <body>
        <h1>Create your account</h1><p></p>
        <form action="index.php" action="GET">
        <div class="form-group">
            <label for="mail" class="titre"><h5>Email address</h5></label>
            <input type="email" class="form-control" name="email" id="mail" pattern="[A-z0-9._%+-]+@[a-z0-9.-]+[.][a-z]{2,3}$" placeholder="Enter email"><br>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1" class="titre"><h5>Password</h5></label>
            <input type="password" name="pass" class="form-control" id="exampleInputPassword1" minlength='4' maxlength='50' placeholder="Password">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1" class="titre"><h5>Confirm assword</h5></label>
            <input type="password" name="conf" class="form-control" id="exampleInputPassword1" minlength='4' maxlength='50' placeholder="Confirm your assword">
        </div>
        <div class="switch">
        <label class="switch"><h5>Practitioner account</h5>
            <input type="checkbox" name="prac" value="prac">
            <span class="lever"></span>
        </label>
        </div>
            
            <input type="hidden" name="page" value="register">
            <center><input type="submit" name="submit" value="Register"></center>
        </form>
        <a href="index.php"><center><button>return</button></center></a>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>