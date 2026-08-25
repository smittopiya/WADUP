<?php

    include 'db2.php';

    $sql = "SELECT * FROM `user`";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr><th>Username</th><th>Password</th><th>Email</th><th>Phone</th></tr>";

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['username']) . "</td>";
            echo "<td>" . htmlspecialchars($row['password']) . "</td>";
            echo "<td>" . htmlspecialchars($row['email']) . "</td>";
            echo "<td>" . htmlspecialchars($row['phone']) . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4'>No data found!</td></tr>";
    }

    echo "</table>";
?>