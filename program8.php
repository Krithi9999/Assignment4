<html>
    <body style="background-color:grey;"><center>
        <h2>Student Application form</h2>
        <form method="post">
    <table border=1>
    <tr><th>First name</th>
    <td><input type="text" name="fname" require/></td>
</tr>
<tr>
  <tr><th>Middle name</th>
    <td><input type="text" name="mname" require/></td>
</tr>
<tr>
     <th>Last name</th>
    <td><input type="text" name="lname" require/></td>
</tr>
<tr>
    <th>Father name</th>
    <td><input type="text" name="faname" require/></td>
</tr>
<tr>
    <th>Address</th>
    <td><input type="text" name="addr" require/></td>
</tr>
<tr>
    <<th>Contact number</th>
    <td><input type="text" name="cno" maxlength="10" require/></td>
</tr><tr>
    <th>Email id</th>
    <td><input type="email" name="email"  require/></td>
</tr>
<tr>
    <th>DOJ</th>
    <td><input type="date" name="doj"  require/></td>
</tr>
<tr>
    <th>Gender</th>
    <td><input type="radio" name="gender" value="Male" require/>Male
    <input type="radio" name="gender" value="Female" require/>Female</td>
</tr>
<tr>
    <th>Percentage in degree</th>
    <td><input type="number" name="ug" require/></td>
</tr>
<tr>
     <th>Hobbies</th><td><input type="checkbox" name="hobby"  value="Drawimg" required/>Drawing
    <input type="checkbox" name="hobby"  value="Singing"/>Singing
    <input type="checkbox" name="hobby"  value="Dancing"/>Dancing</td>
    </tr>
 <tr>
   <th>Institution Studied</th>
    <td><input type="text" name="in" require/></td>
</tr>
<tr>
    <th>Course Studied</th><td><input type="radio" name="course"  value="BCA" required/>BCA
                    <input type="radio" name="course"  value="BSc"/>BSc
                    <input type="radio" name="course"  value="BCom"/>BCom
                    <input type="radio" name="course"  value="BE"/>B.E</td>
  </tr>
  <tr>
                <th>Course Offered</th><td><select name="opt" required>MCA,MBA, M.Tech, MSc
                    <option value="MCA">MCA</option>
                    <option value="MBA">MBA</option>
                    <option value="MTech">MTech</option>
                    <option value="MSc">MSc</option>
                </select></td>
            </tr>
            <tr colspan="2">
               <td> <center><input type="submit" name="submit" value="Submit"/></center></td>
            </tr>
        </table>
    </form>
    <?php   
    if($_POST)  
    {   
        $opt =$_POST['opt'];
        $crs = $_POST['course'];
        $ug = $_POST['ug'];


        if( $opt == 'MCA' or $opt == 'MTech'){
            if( $ug >= 70){
                if($opt =='MTech' and $crs == 'B.E'){                    
                echo '<script>alert("Registration Successful ");</script>';
                }
                else{                    
                echo '<script>alert("Course Studied should be B.E "); </script>';
                }
                if($opt =='MCA' and ($crs == 'BCA' or $crs == 'BSc')){                    
                echo '<script>alert("Registration Successful ");</script>';
                }
                else{                    
                echo '<script>alert("Course Studied should be BCA or BSc "); </script>';
                }
            }
            else{
                echo '<script>alert("Percentage in Degree should be atleast 70%"); </script>';
            }
        }
        elseif( $opt == 'MBA'){
            if( $ug >= 60){
                echo '<script>alert("Registration Successful "); </script>';
            }
            else{
                echo '<script>alert("Percentage in Degree should be atleast 60%"); </script>';
            }
        }
        else{
            if( $ug >= 40){
                if($opt =='MSc' and ($crs == 'BCA' or $crs == 'BSc')){                    
                echo '<script>alert("Registration Successful ");</script>';
                }
                else{                    
                echo '<script>alert("Course Studied should be BCA or BSc "); </script>';
                }
            }
            else{
                echo '<script>alert("Percentage in Degree should be atleast 40%"); </script>';
            }
        }
    }     
?> 
</center>
</body>
</html>

