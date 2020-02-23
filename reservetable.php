<?php 
include_once('connection.php');
$sql = "select *  from reservation";
$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<head>
    <!doctype html>
    <html lang="en">
      <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- <link rel="icon" type="image/png" href="images/icons/home.ico"/> -->
           <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/mbr-additional.css" type="text/css">
        <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/carousel/">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

        <script >
            $(document).ready(function () {
            $('#dtBasicExample').DataTable();
            $('.dataTables_length').addClass('bs-select');
                });
            </script>          
        <title>Admin</title>
      </head>
      <body >
         
        <!-- Navigation Bar  -->
        <?php include ('asset/headder.html');?>
        <br/> 
        <br/>
        <br/>
        <br/>

  <div class="container">
      <div class="row">
          <div class="col-sm-12" >
              <h3 class="font2">Reservation Table</h3>
              <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th class="th-sm">User Id
                    </th>
                    <th class="th-sm">Name
                    </th>
                    <th class="th-sm">Telephone Number
                    </th>
                    <th class="th-sm">E-Mail
                    </th>
                    <th class="th-sm">Check-In
                    </th>
                    <th class="th-sm">Check-Out
                    </th>
                    <th class="th-sm">Adults
                    </th>
                    <th class="th-sm">Children
                    </th>
                    <th class="th-sm">Room
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>

                  <?php 
                    while($row = mysqli_fetch_array($result)){

                    ?>
                    <tr>

                        <td><?php echo $row['u_id'] ?></td>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['telephone'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['check_in'] ?></td>
                        <td><?php echo $row['check_out'] ?></td>
                        <td><?php echo $row['adults'] ?></td>
                        <td><?php echo $row['children'] ?></td>
                        <td><?php echo $row['room'] ?></td>
                        
                  </tr>
                   <?php
                    }
                    ?>         
                 
                
                </tbody>
            
              </table>
          </div>
      </div>
  </div>
  

                    <!-- Footer -->
    <?php include ('asset/footer.html');?> 

    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="js/main1.js"></script>
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="js/main1.js"></script>
</body>
</html>