<?php
// conection Info
$servername = "rm-l4v670ce623mi4fxv.mysql.me-central-1.rds.aliyuncs.com";
$username = "amb";
$password = "No123456";
$DBName = "demodb";
// Create connection
$conn = new mysqli($servername, $username, $password, $DBName);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$query = "select * from patients";
$result = mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Fatech Data From Database in Php</title>
</head>
<body class="bg-dark">
    <div class="container">
      <div class="row mt-5">
        <div class="col">
          <div class="card mt-5">
            <div class="card-header">
              <h2 class="display-6 text-center">Vital Indicators</h2>
            </div>
            <div class="card-body">
            <table class="table table-bordered text-center">
                <tr class="bg-dark text-white">
                <?php 
                $row = mysqli_fetch_assoc($result) ?>
                  <th> Indicator </th>
                  <th> Values </th>
                </tr>
                <tr>
                <td><img src="https://www.svgrepo.com/show/452056/lungs.svg" height="100" width="100"></td>
                <td><?php echo $row['Respiration']; ?></td>
                     </tr>
                     <tr>
                <td><img src="https://www.svgrepo.com/show/484361/thermometer.svg" height="100" width="100"></td>
                <td><?php echo $row['Temperature']; ?></td>
                     </tr>
                     <tr>
                <td><img src="https://www.svgrepo.com/show/280519/oxygen-breath.svg" height="100" width="100"></td>
                <td><?php echo $row['Oxygen_saturation']; ?></td>
                     </tr>
                     <tr>
                <td><img src="https://www.svgrepo.com/show/482738/heart-electrocardiogram-1.svg" height="100" width="100"></td>
                <td><?php echo $row['Heart_beat']; ?></td>
                     </tr>
                     <tr>
                <td><img src="https://www.svgrepo.com/show/190835/pressure-meter.svg" height="100" width="100"></td>
                <td><?php echo $row['Pressure']; ?></td>
                     </tr>
                     
                
                </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
<?php
$conn ->close();
?>

</html>