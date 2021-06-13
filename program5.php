<html>
<body>
     
    <form method="post" >
        <table border=0>
            <tr>
	<td>Enter the first number</td>
                <td> <input type="text" name="n1"/></td>
              </tr>

            <tr>
	<td>Enter the second number</td>
            <td> <input type="text" name="n2"  /> </td>
            </tr>
            <tr>
	<td>Enter the operater</td>
                <td> <input type="text" name="op"/> </td>
            </tr>
            <tr rowspan=2>
                <td> <input type="submit" name="submit"
                    value="Submit"/></td>
	    </tr>
        </table>
    </form>
 
<?php
 
if(isset($_POST['submit'])) {
 
    $a = $_POST['n1'];
    $b = $_POST['n2'];
    $ch = $_POST['op'];
 
    echo "The first number is $a"; 
    echo "</br>";
    echo "The second number is $b"; 
    echo "</br>";

    switch($ch) {
        case '+':
            $sum= $a + $b;
            echo " Addition of two numbers = " . $sum ;
            break;
 
        case '-':
            $sub = $a - $b;
            echo " Subtraction  of two numbers= " . $sub;
            break;
 
        case '*':
            $mul = $a * $b;
            echo " Multiplication of two numbers = " . $mul ;
            break;
 
        case '/':
            $div = $a / $b;
            echo " Division of two numbers = " . $div ;
            break;
 
        default:
            echo ("invalid option\n");
    }
}
?>

</center>
</body>
</html>