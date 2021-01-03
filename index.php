<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login form</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets1/css/custom.css">
        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets1/ico/favicon.png">

    </head>

    <body style="background-image: url('https://wallpapercave.com/wp/wp2890656.jpg'); >
        <div class="container ">
            <div class="row">            
                <div class="login-container col-lg-4 col-md-6 col-sm-8 col-xs-12">
		     <div class="login-title text-center">
<img src="https://ninetc.com/wp-content/uploads/2020/06/logo-slide-1.png" alt="ninetcLogo">
                            <h2><span><strong>NineTc Forms</strong></span></h2>
                     </div>
                    <div class="login-content">
                       
                        <div class="login-body">
                            <form role="form" action="login.php" method="post" class="login-form">
                                <div class="form-group ">
                                    <div class="pos-r">                                        
                                        <input   id="form-username" type="text" name="uname" placeholder="Username..." class="form-username form-control">
                                        <i class="fa fa-user"></i>
                                        <span></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="pos-r">                                    
                                        <input id="form-password" type="password" name="password" placeholder="Password..." class="form-password form-control" >
                                        <i class="fa fa-lock"></i>
                                        <span></span>                                        
                                    </div>
                                </div>
                                <div class="form-group text-right">     
                                    <a href="#" class="bold"> Forgot password?</a>
                                </div>   

                                <div class="form-group">     
                                    <button type="submit" class="btn btn-warning form-control"><strong>Sign in</strong></button>  
                                </div>   
                                                                              
                            </form>
                        </div> <!-- end  login-body -->                     
                    </div><!-- end  login-content -->  
                  
                </div>  <!-- end  login-container -->      

            </div>
        </div><!-- end container -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </body>

</html>
