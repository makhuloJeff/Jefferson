<!DOCTYPE html>
<?php 
include('connection.php');
include('session_client.php');
?>


<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Fundi Connect</title>
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
</head>

<body id="body">
  <!--NAVIGATION-->
  <nav class="navbar fixed-top navbar-expand-sm bg-primary navbar-primary navbar-dark py-3">
    <div class="container">
      <a href="dashboard" class="navbar-brand text-white">Fundi Connect. Howdy:
        <?php	 
        
	      $client_id=$_SESSION['ID_NO'];
	  	  $cli=(" 
	      select	* from clients where ID_NO='$client_id' ;") or die(mysql_error());
		    $fetch_res = $mysqli->query($cli);
		
		    while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
		    {
      	?>
        <span class="text-dark font-weight-bold">
          <?php 	echo $show['FIRST_NAME']." ".$show['LAST_NAME']; ?> </span>


        <?php }; ?>

      </a>

      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="dashboard.php" class="nav-link active text-white ">Request<i class="fa fa-cogs pl-2 text-white"></i></a>
          </li>
          <li class="nav-item">
            <a href="clogout.php" class="nav-link text-white">Logout<i class="fa fa-sign-out pl-2 text-white"></i></a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-white" data-toggle="modal" data-target="#profileModal">Profile <i class="fa fa-user pl-2 text-white"></i></a>
          </li>
        </ul>
      </div>
    </div>

  </nav>


  <!--REQUEST OUTPUT-->
  <section id="Request" class="pt-5 mt-5 mb-3 pb-3">
    <div class="container" id="request">
      <div class="row pb-3">
        <div class="col-md-12">
          <div class="card text-center text-dark bg-white">
            <div class="card-header">
            <?php
            
              if (isset($_POST['request_fundi'])){

               $location=trim($_POST['location']);
               $specialty=trim($_POST['specialty']);

               $result = $mysqli->query("SELECT * FROM fundis where LOCATION ='$location' and SPECIALTY = '$specialty' ;");
               
               
               }
              ?>
              <h5 class="text-danger">Your Request: <?php echo $specialty ?> in <?php echo $location ?>:</h5>
            </div>
            <div class="card-body">
              <table class="table table stripped table-bordered table-active table-hover">
                <thead>
                <tr>
                    <th>First Name</th>
                    <th>Phone Number</th>
                    <th>Amount Per Hour [Ksh]</th>
                    <th>Profile Photo</th>
                    <th>Bidding Shots</th>
                  </tr>
                </thead>
                <tbody>
              <?php
                
                while($mem = mysqli_fetch_assoc($result)):
                

                  echo '<tr>';
                    echo '<th scope="row">'.$mem['FIRST_NAME'].' '.$mem['LAST_NAME'].' </th>';
                    echo '<td>'.$mem['PHONE_NUMBER'].'</td>';
                    echo '<td>'.$mem['RATE_PH'].'</td>';
                    echo '<td>' ;
                    echo"<img class='img-fluid fundi-image rounded-circle' src='../f_pp/".$mem['PROFILE_PHOTO']."' >";
                    echo'</td>';
                    echo '<td>'.$mem['IMAGE_TEXT'].'</td>';

                  echo '</tr>';

               
                endwhile;
                /* free result set */
            $result->close();
             ?>
                </tbody>
              </table>
            </div>
            <div class="card-footer">
              <a href="dashboard.php"> 
              <button class="btn btn-success btn-sm btn-block">Back To Home <span class="fa fa-home"></span></button>
              </a>
            </div>
         
          </div>
        </div>
      </div>
    </div>
    <hr class="bg-success">
  </section>




  <!--FOOTER-->
  <section id="Footer">
    <footer class="bg-primary">
      <div class="container">
        <div class="row">
          <div class="col text-center text-white">
            <p class="font-weight-bold">Fundi Connect</p>
            <p class="font-weight-bold text-dark">MAKHULO Copyright &copy;2019</p>
          </div>
        </div>
      </div>
    </footer>
  </section>




  <!--MODALS-->
  <!--PROFILE MODAL-->
  <div class="modal fade text-dark" id="profileModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5>Your Profile</h5>
          <button class="close" data-dismiss="modal"><span>&times;</span></button>
        </div>
        <form action="client_update.php" method="POST">

          <div class="card">
            <div class="card-header">
              <h5>Welcome <span class="fa fa-user"></span>
                <?php	 
          
                $client_id=$_SESSION['ID_NO'];
                
                $cli=(" 
                select	* from clients where ID_NO='$client_id' ;") or die(mysql_error());
                $fetch_res = $mysqli->query($cli);
      
                $show = $fetch_res->fetch_array(MYSQLI_ASSOC);
                {
                ?>
                <span class="font-weight-bold">
                  <?php 	echo $show['FIRST_NAME'] ?> </span>


                <?php }; ?>
              </h5>
            </div>
            <div class="card-body">
              <h6 class="font-weight-bold text-center text-success">Role : Client || ID<span class="fa fa-hashtag"></span>

                <?php	 
          
                $client_id=$_SESSION['ID_NO'];
                $cli=(" 
                select	* from clients where ID_NO='$client_id' ;") or die(mysql_error());
                $fetch_res = $mysqli->query($cli);
      
                while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
                {
                ?>
                <span class="font-weight-bold">
                  <?php 	echo $show['ID_NO'] ?> </span>




              </h6>
              <hr>
              <h6 class="font-weight-bold">Name : <span id="details">
                  <?php 	echo $show['FIRST_NAME']." ".$show['LAST_NAME']; ?>

                  <hr>
                  <div class="row">
                    <div class="col-md-6">
                      <h6 class="font-weight-bold">Username : <input type="text" name="username" class="form-control" value="
                  <?php 	echo $show['USERNAME']; ?>"> <span class="fa fa-edit font-weight-bold"></span></h6>
                    </div>
                    <div class="col-md-6">
                      <h6 class="font-weight-bold">Password : <input type="password" name="password" value="<?php 	echo $show['PASSWORD']; ?>"
                          class="form-control"> <span class="fa fa-edit font-weight-bold"></span></h6>
                    </div>
                  </div>
                  <hr>
                  <h6 class="font-weight-bold">Location : <input type="text" name="location" class="form-control" value="
                  <?php 	echo $show['LOCATION']; ?>"> <span class="fa fa-edit font-weight-bold"></span></h6>
                  <hr>
                  <h6 class="font-weight-bold">Contact : <input type="text" name="p_no" class="form-control" value="
                  <?php 	echo $show['PHONE_NUMBER']; ?>"> <span class="fa fa-edit font-weight-bold"></span></h6>
                  <?php }; ?>
            </div>
            <div class="card-footer">
              <button class="btn btn-block btn-outline-primary" name="save_changes" value="save_changes"><span class="fa fa-check"></span>
                Save Changes
              </button>
            </div>
            <div class="card-footer">
              <button class="btn btn-block btn-outline-danger" name="delete_acc" value="delete_acc"><span class="fa fa-close"></span>
                Delete Account
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>

  </div>




  <script src="../js/jquery.min.js "></script>
  <script src="../js/popper.min.js "></script>
  <script src="../js/bootstrap.min.js "></script>

</body>

</html>