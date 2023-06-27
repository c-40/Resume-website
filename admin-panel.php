<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Welcome to Admin Panel</h1>
        <h4>Login:Admin</h4>

        <!-- Add other elements as per your design -->
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Message</th>
            </tr>
            <?php
            include'connection.php';
            // Retrieve data from the database
            $sql = "SELECT * FROM `data`";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td>".$row['phone']."</td>";
                    echo "<td>".$row['message']."</td>";
                    echo "</tr>";
            } }
            else {
                echo "0 results";
            }

            // Close the connection
            $conn->close();
            
            ?>
        </table>
        <button type="submit" class="btn btn-secondary btn-lg btn-block" onclick="window.location.href='login.html';">Logout</button>
    </div>
   
</body>
</html>
