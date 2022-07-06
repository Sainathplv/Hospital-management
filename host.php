$link = new mysqli("localhost","username,"password","db name");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  die ("There was an error connecting to the database");
       
  exit();
}
        $query = "INSERT INTO `users` (`your values`, `yourvalues`) VALUES ('".mysqli_real_escape_string($link, $_POST['yourvalue'])."', '".mysqli_real_escape_string($link, $_POST['yourvalue])."')";
               
                mysqli_query($link, $query);
        }    
       
    }
   
   

?>