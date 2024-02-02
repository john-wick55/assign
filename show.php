<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<!-- <link rel="stylesheet" href="assets/css/style.css"> -->
<link href="https://cdn.datatables.net/v/dt/dt-1.13.8/datatables.min.css" rel="stylesheet">
<title>SHOW</title>
</head>
<body>
    <?php
    
    include('./connection.php');

    $savequery = "select * from admin";

    $result = mysqli_query($connection, $savequery);

    if(mysqli_num_rows($result) > 0)
    {
    
    ?>
<div class="container">
     <div class="row">
         <div class="col-md-12">
              <table class="table table-hover" id="abc">
                  <thead>
                      <tr>
                           <th>ID</th>
                           <th>Name</th>
                           <th>Email</th>
                      </tr>
                  </thead>

                  <tbody>
                    <?php
                    
                    while($data = mysqli_fetch_assoc($result))
                    {
                    ?>
                    <tr>
                         <td><?php echo $data['id']?></td>
                         <td><?php echo $data['Name']?></td>
                         <td><?php echo $data['Email']?></td>
                    </tr>
                <?php } ?>
                  </tbody>
              </table>
         </div>
     </div>
</div>
    
<?php } 
else{

    echo "Error Not Found";
}
?>
</body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"> </script>
<script src="https://cdn.datatables.net/v/dt/dt-1.13.8/datatables.min.js"></script>
<script>
    let table = new DataTable('#abc');
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</html>