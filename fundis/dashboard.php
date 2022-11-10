<!DOCTYPE html>

<?php 
include('connection.php');
include('session_fundi.php');
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
      <a href="dashboard.php" class="navbar-brand text-white">Fundi Connect</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="flogout.php" class="nav-link text-white">Logout<i class="fa fa-sign-out pl-2 text-white"></i></a>
          </li>
        </ul>
      </div>
    </div>

  </nav>


  <!--FUNDI PROFILE-->
  <section id="fundiProfle" class="pt-5 mt-5 mb-3 pb-3">
    <div class="container-fluid" id="profile">
      <div class="container">
        <div class="card">
          <div class="card-header">
            <h5 class="text-center text-danger">Your Profile</h5>
            <hr class="bg-success">

            <?php	 
        
	             $fundi_id=$_SESSION['ID_NO'];
	  	         $fund=(" 
	              select	* from fundis where ID_NO='$fundi_id' ;") or die(mysql_error());
		           $fetch_res = $mysqli->query($fund);
		
		          while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
		    {
      	?>

            <h5 class="text-center">Welcome <span class="fa fa-user"></span>
              <?php 	echo $show['FIRST_NAME']." ".$show['LAST_NAME']; ?>

            </h5>
          </div>
          <form action="fundi_update.php" method="POST" onsubmit="">

            <div class="card">

              <div class="card-body">
                <h6 class="font-weight-bold text-center text-success">Role : Fundi >
                  <?php 	echo $show['SPECIALTY']; ?> || ID<span class="fa fa-hashtag"></span>
                  <?php 	echo $show['ID_NO']; ?>
                </h6>
                <hr>
                <div class="row">
                  <div class="col-md-4">
                    <h6 class="font-weight-bold">Name : <span id="details">
                        <?php 	echo $show['FIRST_NAME']." ".$show['LAST_NAME']; ?></span> </h6>
                  </div>
                  <div class="col-md-4">
                    <h6 class="font-weight-bold text-center">Username : <input type="text" name="username" class="form-control"
                        value="
                    <?php 	echo $show['USERNAME']; ?>"> <span class="fa fa-edit font-weight-bold"></span></h6>
                  </div>
                  <div class="col-md-4">
                    <h6 class="font-weight-bold text-center">Password : <input type="password" name="password" value="<?php 	echo $show['PASSWORD']; ?>"
                        class="form-control"> <span class="fa fa-edit font-weight-bold"></span></h6>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-6">
                    <h6 class="font-weight-bold">Profile Photo:</h6>
                  </div>
                  <div class="col-sm-6">
                    <?php echo"<img class='img-fluid fundi-image rounded-circle' src='../f_pp/".$show['PROFILE_PHOTO']."' >"; ?>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-6">
                    <h6 class="font-weight-bold">Location : <input type="text" name="location" class="form-control" value="
                    <?php 	echo $show['LOCATION']; ?>"> <span class="fa fa-edit font-weight-bold"></span></h6>
                  </div>
                  <div class="col-md-6">
                    <h6 class="font-weight-bold text-right">Contact : <input type="text" name="p_no" class="form-control"
                        value="
                    <?php 	echo $show['PHONE_NUMBER']; ?>"> <span class="fa fa-edit font-weight-bold"></span></h6>
                  </div>
                </div>

                <?php }; ?>

              </div>
              <div class="card-footer">
                <button class="btn btn-block btn-outline-primary" name="save_changes"><span class="fa fa-check"></span> Save
                  Changes
                </button>
              </div>
              <div class="card-footer">
                <button class="btn btn-block btn-outline-danger" name="delete_acc"><span class="fa fa-close"></span> Delete
                  Account
                </button>
              </div>
            </div>
          </form>
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


  <script src="../js/jquery.min.js "></script>
  <script src="../js/popper.min.js "></script>
  <script src="../js/bootstrap.min.js "></script>

</body>

</html>