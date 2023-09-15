<?php

include 'config.php';


if(isset($_POST['search_btn'])) {
    $search = $_POST['search'];  
 } 

 $query = "SELECT * FROM `inquiry` WHERE name LIKE '%$search%'";
 $select_search = mysqli_query($conn, $query);
?>

<?php
    if (mysqli_num_rows($select_search) > 0){
?>
<table>
    <thead>
        <tr>
            <th> Message Sent</th>
            <th> Name</th>
            <th> Contact</th>
            <th> Message</th>
        </tr>
    </thead>
        <tbody>
            <?php
                while ($fetch = mysqli_fetch_assoc($select_search)){
            ?>
            <tr>
                <td><?php echo $fetch['datestamp']; ?></td>
                <td><?php echo $fetch['name']; ?></td>
                <td><?php echo $fetch['email']; ?></td>
                <td><?php echo $fetch['message']; ?></td>
            </tr>
            <?php 
                }
            ?>
        </tbody>
</table>
    <?php
    } else {
    ?>
       <!-- Will display if no results -->
      <table>
         <thead>
            <tr>
            <th>Message Sent</th>
            <th>Name</th>
            <th>Contact</th>
            <th>Message</th>
         </tr>
      </thead>
   <tbody>
    </tbody>
    </table>
   <p>No results found</p>
   <?php
   }
   ?>
                            