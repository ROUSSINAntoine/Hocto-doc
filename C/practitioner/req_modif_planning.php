<?php        

    include("M/other_sql.php");      
            
    include("M/get_sql.php");
    
    if(!(isset($_GET["qs"]))){
        $_GET["qs"]=0 ;  
    }
    if(!(isset($_GET["open_time"]))){
        $_GET["open_time"]=NULL ;
    }
    if(!(isset($_GET["break_time"]))){
        $_GET["break_time"]=NULL ;
    }
    if(!(isset($_GET["resume_time"]))){
        $_GET["resume_time"]=NULL ; 
    }   
    if(!(isset($_GET["close_time"]))){
        $_GET["close_time"]=NULL ;    
    }
    if(!(isset($_GET["length_time"]))){
         $_GET["length_time"]=NULL ;
    }
    
        if(isset($_GET["days_time"])){       
            if(isset($_GET["practitioner"])){        

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


    $ajd = date("Y-m-d");
    

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