<html>
    <form method="post">        
Enter a Number: <input type="text" name="num"/><br>  <br>
<button type="submit">Check</button>  
</form> 

 
<?php   
    if($_POST)  
    {   
        $n = $_POST['num']; 
       $n1=0;
       $n2=1;
        echo $n1;
       echo "<br>";
       echo $n2;
    echo "<br>";	    
for($i=2;$i<=$n;$i++)
        { 
        $n3= $n1+$n2;
       echo $n3;
       echo "<br>";
        $n1=$n2;
       $n2=$n3;
      $flag=true;
      for($x=2;$x<=$n3-1;$x++)
        {
             if($n3 % $x ==0)
             $flag=false;
         }  
      if($flag )
     echo $n3."is a prime number<br>";
       else
       echo $n3."is a not prime number<br>"; 
    
    }    
} 
?> 
</center>
</body>
</html>


