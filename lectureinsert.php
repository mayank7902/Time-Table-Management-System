<!DOCTYPE html>
<html>
 
 
<body>  
        <?php
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $con = mysqli_connect("localhost", "root", "", "lectures2");
         
        // Check connection
        if($con === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        
        $subcode = $_REQUEST['subcode'];
        $subname =  $_REQUEST['subname'];
        $duration =  $_REQUEST['duration'];
        $nostudent = $_REQUEST['nostudent'];
        
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO lectures2_db  VALUES ('$subcode',
            '$subname','$duration','$nostudent')";
         
        if(mysqli_query($con, $sql)){
            
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($con);
        }
         
        // Close connection
        mysqli_close($con);
        ?>
    
</body>
 
</html>