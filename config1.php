<!DOCTYPE html>
<html>
<head>
    
    <title>My contacts</title>
    </head>
    <body>
    <table>
        <tr>
        <th>name</th>
        <th>number</th>
            <th>email</th>
        
        </tr>
       
        <?php 
$server = "localhost";
$user = "root";
$pass = "";
$database = "contacts";

$conn = mysqli_connect($server, $user, $pass, $database);
       
        
        $sql="SELECT name,number,email from contacts";
        $result=$conn-> query($sql);
        if($result-> num_rows>0)
        {
            while($row=$result->fetch_assoc())
            {
                echo"<tr><td>". $row["name"]."</td><td>".$row["number"]."</td><td>".$row["email"]."</td></tr>";
            }
            echo "</table>";
        }
        else{
            echo "0 result";
        }
        $conn-> close();
        
        ?>
        </table></body>
    
    
    </head></html>
           