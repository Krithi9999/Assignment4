<html>
<body">
<form method="post">        
Enter a Number: <input type="text" name="number"/><br>  <br>
<button type="submit">Check</button>  
</form> 

 
<?php   
    if($_POST)  
    {   
        $num = $_POST['number']; 
        $total=0;  
        $x=$num;  
        while($x!=0)  
        {  
        $rem=$x%10;  
        $total=$total+$rem*$rem*$rem;  
        $x=$x/10;  
        }  
        echo "The given number is $num"; 
        echo "</br>";
        echo "The sum of the digits is $total"; 
        echo "</br>";
        if($num==$total)  
        {  
        echo "It is an armstrong number";  
        }  
        else  
        {  
        echo "It is not an armstrong number";  
        }  
    }     
?> 

</body>
</html>


