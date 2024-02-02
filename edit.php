<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Update Data</title>
</head>
<body>

<div class="container">
     <div class="row">
         <div class="col-md-12">
             <form action="Edit.php" method="post">
                 <div class="from-row">
                     <div class="form-md-4 mb-3">
                        <label for="validationCustom01 mb-3">Search by ID</label>
                        <input type="text" class="form-control" name="searchid" id="validationCustom01" placeholder="Enter Name">
                     </div>
                 </div>
                 <input type="submit" class="btn btn-warning" name="btnsearch" value="Show Data">
             </form>
         </div>
     </div>
</div>
<?php
include('./connection.php');


if(isset($_REQUEST['btnsearch'])){

    $id = $_REQUEST['searchid'];

    $sqlshowquery = "select * from admin  WHERE Id = ' $id'";

    $result = mysqli_query($connection, $sqlshowquery);

if(mysqli_num_rows($result) > 0)
{
?>
<div class="container mt-4">
<?php
                    
                    while($row = mysqli_fetch_assoc($result))
                    {
                    ?>
       
            <div class=" col-md-12 mt-3">
                <form action="Allquery.php" method="post">
                    <div class="form-row">
                        <div class="form-md-4 mb-3">
                            <label for="validationCustom01 mb-3">Name</label>
                            <input type="hidden" class="form-control" value="<?php echo $row['id']?>" name="Id">
                            <input type="text" class="form-control" value="<?php echo $row ['Name']?>" name="name" id="validationCustom01" placeholder="Enter Name">
                        </div>

                        <div class="form-md-4 mb-3">
                            <label for="validationCustom01 mb-3">Email</label>
                            <input type="text" class="form-control" value="<?php echo $row ['Email']?>" name="email" id="validationCustom02" placeholder="Enter Email">
                        </div>
                    </div>
                    <?php } ?>
                    <input type="submit" class="btn btn-primary" name="btnedit" value="Update Data">
                    </form>
            </div>
        </div>
    </div>
<?php } 
  else{

      echo "Error Not Found";
  }
} ?>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</html>