<?php        

<<<<<<< HEAD
    include("M/other_sql.php");      
            
    include("M/get_sql.php");
    
        if(isset($_GET["days_time"])){       
            if(isset($_GET["practitioner"])){        
=======
include_once("M/other_sql.php");
include_once("V/practitioner/mod_modif_planning.php");

/*function sql_planning () {
    include_once("M/get_sql.php");
    $data = $req->fetch();
>>>>>>> master

            modif_planning();         
            }
        }        
    

    if(isset($_GET["practitioner"])){        
        if(isset($_GET["start_hollyday"])){ 
            if(isset($_GET["end_hollyday"])){ 
            modif_hollyday(); 
            }
        }
    }

    function display_planning_monday() {
        
        $req = sql_planning_monday();       
        $data_monday = $req->fetch();       
        $req->closeCursor();         
        return $data_monday;   
        
    }        
    
    $data_monday = display_planning_monday();      

    function display_planning_tuesday() {
        
        $req = sql_planning_tuesday();       
        $data_tuesday = $req->fetch();       
        $req->closeCursor();         
        return $data_tuesday;   
        
    }        
    
    $data_tuesday = display_planning_tuesday();
    
    function display_planning_wednesday() {
        
        $req = sql_planning_wednesday();       
        $data_wednesday = $req->fetch();       
        $req->closeCursor();         
        return $data_wednesday;   
        
    }        
    
    $data_wednesday = display_planning_wednesday();

    function display_planning_thursday() {
        
        $req = sql_planning_thursday();       
        $data_thursday = $req->fetch();       
        $req->closeCursor();         
        return $data_thursday;   
        
    }        
    
    $data_thursday = display_planning_thursday();

    function display_planning_friday() {
        
        $req = sql_planning_friday();       
        $data_friday = $req->fetch();       
        $req->closeCursor();         
        return $data_friday;   
        
    }        
    
    $data_friday = display_planning_friday();

    function display_planning_saturday() {
        
        $req = sql_planning_saturday();       
        $data_saturday = $req->fetch();       
        $req->closeCursor();         
        return $data_saturday;   
        
    }        
    
    $data_saturday = display_planning_saturday();

    function display_planning_sunday() {
        
        $req = sql_planning_sunday();       
        $data_sunday = $req->fetch();       
        $req->closeCursor();         
        return $data_sunday;   
        
    }        
    
    $data_sunday = display_planning_sunday();

    function display_planning_hollyday() {
        
        $req = sql_planning_hollyday();       
        $data_hollyday = $req->fetch();       
        $req->closeCursor();         
        return $data_hollyday;   
        
    }        
    
    $data_hollyday = display_planning_hollyday();

   
include("V/practitioner/mod_modif_planning.php");


?>       