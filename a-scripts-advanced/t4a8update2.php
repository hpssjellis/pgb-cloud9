
<?php
/********** Access the database      **********/


    $myHost = "127.0.0.1";                         // Sets localhost
    $myUser = getenv('C9_USER');                   // Your Cloud 9 username
    $myPass = "";                                  // Remember, there is NO password!
    $myDatabase = "cp12";                          // Your database name you want to connect to
    $myTable = "cp12Data";                         // Your database table
    $myPort = 3306;                                // The port #. It is always 3306
    $myConnection = mysqli_connect($myHost, $myUser, $myPass, $myDatabase, $myPort)or die(mysql_error());
    // And now to perform a simple query to make sure it's working


/********** Get the old post information      **********/

   
	$myNamePHP=mysql_real_escape_string($_POST['myNamePost']);
	$myXPHP=mysql_real_escape_string($_POST['myXPost']);
	$myYPHP=mysql_real_escape_string($_POST['myYPost']);



/********** create html input text boxes using the old post information      **********/

?>

<form action="T4A8update2.php" method="post">
	
   Your name: <input type="text" name="myNamePost"  value="<?php echo $myNamePHP; ?>"><br>
   Your X location: <input type="text" name="myXPost"  value="<?php echo $myXPHP; ?>"><br>
   Your Y location: <input type="text" name="myYPost"  value="<?php echo $myYPHP; ?>"><br>
   <input type="submit" /></p>
</form>



<?php


/********** If a name is not empty then update a record      **********/

   if ($myNamePHP != ''){	
      if (!mysql_query("UPDATE $table SET myX ='$myXPHP', myY ='$myYPHP'  WHERE myName ='$myNamePHP'  "))
        {
          die('Error: ' . mysql_error());
         }
      echo "1 record updated";
   }


/**********   search the database      **********/

    $myQuery = "SELECT * FROM $myTable";
    $Result = mysqli_query($myConnection, $myQuery);







   $result = mysql_query($sql);
   if(mysql_num_rows($result) >0){
      while($row=mysql_fetch_array($result)){


/********** here we print each database entry      **********/

         echo "myName = $row[myName] <br>";
         echo "myX =$row[myX]  <br>";
         echo "myY= $row[myY]  <br>";
         echo "mySpeedX= $row[mySpeedX]  <br>";
         echo "mySpeedY= $row[mySpeedY]  <br>";
         echo "myImageAt = $row[myImageAt]  --->";
         echo "<img src='$row[myImageAt]' width=20> <hr>";
      }
   }




mysql_close();    
?>






