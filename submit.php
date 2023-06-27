
<?php
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$message=$_POST["message"];
$host="localhost";
$dbname="user_data";
$username="root";
$password=""; 
$conn=mysqli_connect(hostname:$host,username:$username,password:$password,database:$dbname);
if(mysqli_connect_errno())
{
    die("Coonnectiion error:".mysqli_connect_error());
}
$sql="INSERT INTO data(name,email,phone,message)
    VALUES(?,?,?,?);";

$stmt= mysqli_stmt_init($conn);

if(! mysqli_stmt_prepare($stmt,$sql))
{
    die(mysqli_error($conn));
}
mysqli_stmt_bind_param($stmt,"ssii",$name,$email,$phone,$message);
mysqli_stmt_execute($stmt);
echo '<script type="text/javascript">

            window.onload = function () { alert("Save Sucessfully"); 
                window.location.replace("Contact.html");}

</script>';
?>


