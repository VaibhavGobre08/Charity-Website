<?php

require('connection.php');
if(isset ($_POST['register'])) 
{
    $user_exist_query ="SELECT * FROM 'registered_users' WHERE 'username'='$_POST[username]' OR 'email'='$_POST[email]'";
    $result=mysqli_query($con,$user_exist_query);

    if($result)  
    {
        if(mysqli_num_rows($result)>0)  #it will be executed if username or email is already taken
        {
            $result_fetch=mysqli_fetch_assoc($result);
            if($result_fetch['username']==$_POST['username'])
            {
                #error for username alredy taken
                echo" 
                <script>
                alert('$result_fetch[username] - Username already taken');
                window.location.herf='index.php';
                </script>
                ";
            }
         
            else #for email
            {
            echo" 
                <script>
                alert('$result_fetch[email] - E-mail already registered');
                window.location.herf='index.php';
                </script>
            ";
            }
        }
        
          else  #it will be excuted if no one has taken username or email
    {
        $query="INSERT INTO `registered_user`(`full_name`, `username`, `email`, `password`) VALUES ('$_POST[fullname]','$_POST[username]','$_POST[email]','$_POST[password]')";
        if(mysqli_query($con.$query)) 
        {
            #if data inserted successfull
            echo" 
            <script>
               alert('Registration Succussfull');
               window.location.herf='index.php';
            </script>
             ";
            
        }
        else 
        {
            #if data cannot be inserted
            echo" 
            <script>
               alert('Cannot Run Query');
               window.location.herf='index.php';
            </script>
             ";
        }
    }

  }

    else 
    {
        echo"
        <script>
        alert('Cannot Run Query');
        window.location.herf='index.php';
        </script>
        ";
    }
}


?>