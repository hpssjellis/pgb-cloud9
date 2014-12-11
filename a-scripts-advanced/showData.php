
<?php

/********** Access the database      **********/

   $username = "hpssStudent";
   $password = "pass2";
   $host = "localhost";
   $database = "cp12";
   $table = "cp12Data";
		
   mysql_connect($host,$username,$password)or die(mysql_error());
   mysql_select_db($database)or die(mysql_error());
  

   $sql = "SELECT * FROM $table"; 

   //$sql = "SELECT * FROM $table ORDER BY myX"; 

   //$sql = "SELECT * FROM $table ORDER BY myX  ASC"; // may also use DESC 

   //$sql = "SELECT * FROM $table WHERE myName='Peter'"; 

   //$sql = "SELECT myname, myX, myY FROM $table WHERE myName='Peter'"; 

   //$sql = "SELECT * FROM $table WHERE myName='Peter' AND myX = '10'"; // could also use OR


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


/********** close up the database and free memory      **********/

mysql_free_result($result);
mysql_close();    
?>
