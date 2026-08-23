<?php

include 'config.php';
$query = mysqli_query($conn, "SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>CRUD Operation Using PHP & MySQL | Codehal</title>
   <link rel="stylesheet" href="style.css" />
</head>

<body>
   <div class="container">
      <h1>User List</h1>
      <a href="add.php" class="add-btn">Add User</a>  
      <table> 
         <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Action</th>
         </tr>

         <?php
            $no =1;
            while ($user = mysqli_fetch_assoc($query)) : ?>

         <tr>
            <td><?= $no++ ?></td>
            <td><?= $user['name'] ?></td>
            <td><?= $user['email'] ?></td>
            <td><?= $user['phone'] ?></td>
            <td><?= $user['address'] ?></td>
            <td>
               <a href="edit.php?id=<?= $user['id'] ?>">Edit</a>
               <a href="action.php?id=<?= $user['id'] ?>" class="btn-delete" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a> 
            </td>
         </tr>
         <?php endwhile; ?>
      </table>

   </div>
</body>

</html>