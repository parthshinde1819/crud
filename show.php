<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

<?php




include 'connection.php';
$select = "SELECT * FROM user";
$query = mysqli_query($connection , $select);
// if (!$query)
// {
//     echo "there was an error";
// }
// else{
//     foreach ($query as $row){
//         echo"<pre>";
//         print_r($row);
//         echo"</pre>";
//     }
// }


?>
<table class="table container table-bordered mt-5 text-center p-2 mx-auto">
    <thead>
        <tr>
            <th scope="col"><h1>Id</h1></th>
            <th scope="col"><h1>firstname</h1></th>
            <th scope="col"><h1>lastname</h1></th>
            <th scope="col"><h1>password</h1></th>
           
        </tr>
    </thead>
    <tbody> 
        <?php
        foreach ($query as $r) {
        ?>
            <tr>
                <td><?php echo $r['id'] ?></td>
                <td><?php echo $r['firstname'] ?></td>
                <td><?php echo $r['lastname'] ?></td>
                <td><?php echo $r['password'] ?></td>
                
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
