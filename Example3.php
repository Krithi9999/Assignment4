<html>
<body style="background-color:black;color:white;">
<form method="post">
Enter a number : <input type="text" name="num" />
<button type="submit"> Submit</button>
</form>


<?php
if($_POST)
{
$num=$_POST['num'];
$n=$num;
$revnum = 0;
$sum=0;
while($num >1)
{
	$rem= $num % 10;
	$sum =$sum+ $rem;
	$revnum=($revnum*10)+$rem;
	$num=(int) $num /10;
}
echo "Reverse number is $revnum";
echo " <br> ";
echo "Sum of number is $sum";
echo "<br>";
if( $revnum==$n)
{
echo " The given number is palindrome";
}
else
{
echo "The given number is not  palindrome ";
}
}
?>

</body>
</html>