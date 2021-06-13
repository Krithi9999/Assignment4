<html>
 <form method="post">
        <table border="0">
            <tr><td>Enter the pevious reading
                <td> <input type="text" name="n1" />
                </td>
            </tr>
            <tr><td>Enter the current reading</td>
            <td> <input type="text" name="n2"  />
                </td>
            </tr>
            <tr>
                <td> <input type="submit" name="submit"
                    value="Submit"/>
                </td>
            </tr>
        </table>
    </form>

 
<?php   
    if($_POST)  
    {   
        $prev = $_POST['n1']; 
        $cur = $_POST['n2'];
        $units = $cur - $prev;
        $total=0;  
        if ($units <= 100)
        {
            $total= $units * 3;
        }
        elseif ($units <= 200)
        {
            $total = (100 * 3) + ($units - 100) * 4;
        }
        elseif ($units <= 300)
        {
            $total = (100 * 3) + (100 * 4) + ($units - 200) * 5;
        }
        elseif ($units > 300)
        {
            $total = (100 * 3) + (100 * 4) + (100 * 5) + ($units - 300) * 6;
        }
        echo "The Previous Reading is $prev"; 
        echo "</br>";        
        echo "The Current Reading is $cur"; 
        echo "</br>";
        echo "The Units is $units"; 
        echo "</br>";
        echo "The payable amount is $total"; 
        echo "</br>";
    }     
?> 
</center>
</body>
</html>


