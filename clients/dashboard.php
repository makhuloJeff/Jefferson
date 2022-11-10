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
      <a href="dashboard.php" class="navbar-brand text-white">Fundi Connect. Howdy:
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
            <a href="#request" class="nav-link active text-white ">Request<i class="fa fa-cogs pl-2 text-white"></i></a>
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


  <!--REQUEST FORM-->
  <section id="Request" class="pt-5 mt-5 mb-3 pb-3">
    <div class="container" id="request">
      <div class="row pb-3">
        <div class="col-md-12">
          <div class="card text-center text-white bg-success">
            <div class="card-header">
              <h3><i class="fa fa-cogs"></i>Service Request</h3>
            </div>
            <div class="card-body">
              <form action="requestfundi.php" onsubmit="" method="POST">
                <br>
                <label for="Location">Your Location</label>
                <?php	 
          
                $client_id=$_SESSION['ID_NO'];
                
                $cli=(" 
                select	* from clients where ID_NO='$client_id' ;") or die(mysql_error());
                $fetch_res = $mysqli->query($cli);
      
                $show = $fetch_res->fetch_array(MYSQLI_ASSOC);
                {
                ?>
                
                <input type="text" class="form-control" id="Location"name="location" value=" <?php 	echo $show['LOCATION'] ?>">
                <?php }; ?>
                <br>
                <label for="service">Requesting For</label>
                <select name="specialty" id="service" class="form-control">
                  <option value="Electrician" >Electrician</option>
                  <option value="Mechanic" >Mechanic</option>
                  <option value="Carpenter" >Carpenter</option>
                  <option value="Gardener" >Gardener</option>
                  <option value="Mover" >Mover</option>
                  <option value="Tailor" >Tailor</option>
                  <option value="Plumber">Plumber</option>
                </select>
             
            </div>
            <div class="card-footer">
              <button class=" alert-success form-control bg-secondary text-white" name="request_fundi" value="request_fundi">Request
                Fundi
              </button>
            </div>
            </form>

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
            <p class="font-weight-bold text-dark">MAKHULO copyright &copy;2019</p>
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
                  <h6 class="font-weight-bold">Password : <input type="password" name="password" value="<?php 	echo $show['PASSWORD']; ?>" class="form-control"> <span class="fa fa-edit font-weight-bold"></span></h6>
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
              <button class="btn btn-block btn-outline-primary" name="save_changes" value="save_changes"><span class="fa fa-check"></span> Save
                Changes</button>
            </div>
            <div class="card-footer">
              <button class="btn btn-block btn-outline-danger" name="delete_acc" value="delete_acc"><span class="fa fa-close"></span> Delete
                Account</button>
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