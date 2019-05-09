<<<<<<< HEAD
<?php
    switch(isset($_GET)) {
        case(isset($_GET['page'])):
            switch($_GET['page']){
                default:
                    include('E/404.html');
            }
            break;
        default:
            include('C/login.php');
    }
=======
<?php
    switch(isset($_GET)) {
        case(isset($_GET['page'])):
            switch($_GET['page']){
                default:
                    include('E/404.html');
            }
            break;
        default:
            include('C/login.php');
    }
?>