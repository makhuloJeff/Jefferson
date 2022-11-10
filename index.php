<?php

include('connection.php');
// Includes Login Script
if(isset($_SESSION['ID_NO'])){
header("location: clients/dashboard.php"); // Redirecting To CLIENTS DASHBOARD Page
}
?> 

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>EASY ACCESS</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body id="body">
    <!--NAVIGATION-->
    <nav class="navbar fixed-top navbar-expand-sm bg-primary navbar-primary navbar-dark  py-3">
        <div class="container">
            <a href="index.php" class="navbar-brand text-white">Easy Access</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">


                    <li class="nav-item">
                        <a href="#" class="nav-link text-white" data-toggle="modal" data-target="#clientsignupModal"> <span
                                class="font-weight-bold">Sign Up
                                <span class="fa fa-arrow-right"></span></span>
                            CLIENT<i class="fa fa-user-plus pl-2 text-white"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white" data-toggle="modal" data-target="#fundisignupModal">EXPERT
                            <i class="fa fa-user-plus pl-2 text-white"></i></a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>


    <!--INTRO-->


    <!--Login-->
    <section class="pt-2 pb-1 mt-5 mb-2" id="Login">
        <!--REGISTRATION SUCCESS/FAILURE NOTIF AREA-->
        <div class="container">
            <div class="row">
                <div class="col">
                    <h5 class="text-center text-success">

                    </h5>
                </div>
            </div>
        </div>


        <!--LOGIN FORM-->

        <div class="container register">
            <div class="row">
                <div class="col-md-1 register-left">

                </div>
                <div class="col-md-10 register-right">
                    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="client-tab" data-toggle="tab" href="#client" role="tab" aria-controls="client" aria-selected="true">Client</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="fundi-tab" data-toggle="tab" href="#fundi" role="tab" aria-controls="fundi" aria-selected="false">Expert</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="client" role="tabpanel" aria-labelledby="client-tab">
                            <h3 class="register-heading">Login as Client</h3>
                            <div class="row register-form">
                                <div class="col">
                                    <div class="card-body">
                                        <form action="clogin.php" method="POST" onsubmit="">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user form-control bg-secondary text-white"></i></span>
                                                <input name="username" type="text" class="form-control" placeholder="Your Username" required>

                                            </div>
                                            <br>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-hashtag form-control bg-secondary text-white"></i></span>
                                                <input name="id_no" type="number" class="form-control" placeholder="Your ID_NO" required>

                                            </div>
                                            <br>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-lock form-control bg-secondary text-white"></i></span>
                                                <input name="password" type="password" class="form-control dropdown" placeholder="Password" required>
                                            </div>
                                            <br>
                                            <button class="btnRegister" type="submit" name="login" value="login"><span class="fa fa-sign-in"></span>Login</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="fundi" role="tabpanel" aria-labelledby="fundi-tab">
                            <h3 class="register-heading">Login as Expert</h3>
                            <div class="row register-form">
                                <div class="col">
                                    <div class="card-body">
                                        <form action="flogin.php" method="POST" onsubmit="">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user form-control bg-secondary text-white"></i></span>
                                                <input name="username" type="text" class="form-control" placeholder="Your Username" required>

                                            </div>
                                            <br>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-hashtag form-control bg-secondary text-white"></i></span>
                                                <input name="id_no" type="number" class="form-control" placeholder="Your ID_NO" required>

                                            </div>
                                            <br>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-lock form-control bg-secondary text-white"></i></span>
                                                <input name="password" type="password" class="form-control dropdown" placeholder="Password" required>
                                            </div>
                                            <br>
                                            <button class="btnRegister" type="submit" name="fundi_login"><span class="fa fa-sign-in"></span>Login</button>
                                            
                                            <button style="margin-left: 20rem;" class="btn btn-success" type="submit" name="resetPassword"></span>Forgot Password</button>


                                        </form>
                                    </div>
                                </div>
                            </div>
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
                        <p class="font-weight-bold">EASY ACCESS</p>
                        <p class="font-weight-bold text-dark">Godfrey Makhulo &copy;2022</p>
                    </div>
                </div>
            </div>
        </footer>
    </section>




    <!--MODALS-->
    <!--CLIENT SIGN UP-->

    <div class="modal fade text-dark" id="clientsignupModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="text-danger">EASY ACCESS</h5>
                    <button class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h6 class="font-weight-bold"> Client Sign Up</h6>
                        
                    </div>
                    <div class="card-body">
                        <form action="clientsave.php" method="POST" onsubmit="">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user form-control bg-secondary text-white"></i></span>
                                <input name="Uname" type="text" class="form-control" placeholder="Your Username" required>
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock form-control bg-secondary text-white"></i></span>
                                <input name="Password" type="password" class="form-control dropdown" placeholder="Password" required>
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-pencil form-control bg-secondary text-white"></i></span>
                                <input name="Fname" type="text" class="form-control" placeholder="First Name" required>
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-pencil form-control bg-secondary text-white"></i></span>
                                <input name="Lname" type="text" class="form-control" placeholder="Last Name" required>
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-hashtag form-control bg-secondary text-white"></i></span>
                                <input name="Idno" type="text" class="form-control" placeholder="Your ID Number" required>
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-map form-control bg-secondary text-white"></i></span>
                                <input name="Location" type="text" class="form-control" placeholder="Your Location" required>
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-tablet form-control bg-secondary text-white"></i></span>
                                <input name="Pno" type="text" class="form-control" placeholder="Your Phone Number" required>
                            </div>
                            <br>
                            <!--<div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-file-image-o form-control bg-secondary text-white"></i></span>
                                <input name="Profilepic" type="file" class="form-control file" required>
                            </div>-->
                            <br>
                            <div class="card-footer">
                                <button class=" btn btn-outline-secondary btn-block"><span class="fa fa-sign-in"></span>
                                    Sign Up</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>


    <!--FUNDI SIGN UP-->

    <div class="modal fade text-dark" id="fundisignupModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="text-danger">EASY ACCESS</h5>
                    <button class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h6 class="font-weight-bold"> Expert Sign Up</h6>
                    </div>
                    <div class="card-body">
                        <form action="fundisave.php" method="POST" onsubmit="" enctype="multipart/form-data">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user form-control bg-secondary text-white"></i></span>
                                <input name="Uname" type="text" class="form-control" placeholder="Your Username" id="Uname" required>
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock form-control bg-secondary text-white"></i></span>
                                <input name="Password" type="password" class="form-control dropdown" placeholder="Password" id="password" required>

                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-pencil form-control bg-secondary text-white"></i></span>
                                <input name="Fname" type="text" class="form-control" placeholder="First Name" id="Fname" required>
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-pencil form-control bg-secondary text-white"></i></span>
                                <input name="Lname" type="text" class="form-control" placeholder="Last Name" id="Lname" required>
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-hashtag form-control bg-secondary text-white"></i></span>
                                <input name="Idno" type="text" class="form-control" placeholder="Your ID Number" id="Idno" required>
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-map form-control bg-secondary text-white"></i></span>
                                <input name="Location" type="text" class="form-control" placeholder="Your Location" id="Location" required>
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-tablet form-control bg-secondary text-white"></i></span>
                                <input name="Pno" type="number" class="form-control" placeholder="Your Phone Number" id="Pno" required>
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-money form-control bg-secondary text-white"></i></span>
                                <input name="rate_ph" type="number" class="form-control" placeholder="Your Rate PER Hour (ksh)" id="rate_ph" required>
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-file-image-o form-control bg-secondary text-white"></i></span>
                                <input name="image" type="file" class="form-control file" id="Profilepic" required>
                            </div>
                            <br>
                            <div>
                            <textarea name="image_text" id="" cols="30" rows="2" class="form-control" placeholder="4 words to your potential hirers!"></textarea>
                             
  	                        </div>
                              <br>
                            <div class="input-group">
                                <label for="service" class="font-wight-bold">Specialty: </label>
                                <select name="Specialty" id="service" class="form-control">
                                    <option value="Electrician">Electrician</option>
                                    <option value="Mechanic">Mechanic</option>
                                    <option value="Carpenter">Carpenter</option>
                                    <option value="Gardener">Gardener</option>
                                    <option value="Mover">Mover</option>
                                    <option value="Tailor">Tailor</option>
                                    <option value="Plumber">Plumber</option>
                                </select>
                            </div>
                            <br>
                            <div class="card-footer">
                                <button class=" btn btn-outline-secondary btn-block"><span class="fa fa-sign-in"></span>
                                    Sign Up</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <script src="js/jquery.min.js "></script>
    <script src="js/popper.min.js "></script>
    <script src="js/bootstrap.min.js "></script>

</body>

</html>