<?php
session_start();
$server = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($server, $username, $password, "bank");
if (!$conn) {
  die(mysqli_connect_error());
}

$q=mysqli_query($conn,"select * from users");
$r=mysqli_num_rows($q);
if($r==false)
{
echo "<font color='blue' size='5px'><center><center>No records found ! </center></font>";
}
else
{
?>



<form method="post" style="margin-top: 80px">
            <div style="color:black "><?php

              echo @$err;

                ?>
            <div class="content" >
                <div class="container-fluid">
                    <div class="row panel panel-default k" style="max-width: 1200px;  min-width:495px;" >
                        <div class="col-md-12" >
                            <div class="card"  style="background-image:url('background.jpg');background:100%;" >
                                <div class="header">
                                    <h4 class="title" style="color:rgb(49, 4, 4);">CUSTOMERS</h4>
                                </div>
                                <div class="content">

                                        <div class="row">

                                          <table class="table table-bordered">

                                          	<thead style="color: rgb(155, 93, 93);">

                                          	<tr class="success">
                                          		<th>Sr.No</th>
                                                <th>NAME</th>
                                          		<th>EMAIL</th>
                                          		<th>BALANCE</th>
                                          		
                                          		
                                          		</tr>
                                          		</thead>

                                          		<?php
                                          		$i=1;
                                          	while($row=mysqli_fetch_array($q))
                                          		{
													echo "<tr >";
                                          			echo "<td>".$i."</td>";
                                          			echo "<td>".$row[1]."</td>";
                                          			echo "<td>".$row[2]."</td>";
                                          			echo "<td>".$row[3]."</td>";
                                          			
													echo "</tr>";
												  $i++;
												 
                                          		}
                                          		?>



                                          </table>

                                        </div>

                            </div>
                        </div>
                      </div>

                </div>
            </div>
          </div>

        </form>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>


</html>

<?php } ?>