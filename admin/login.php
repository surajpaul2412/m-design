<!doctype html>
<html lang="en"> 
<head> 
    <meta charset="utf-8" />
    <title>Login | MbizSpare</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta name="author" content="Abhisan Technology" />

    <?php include('include/style.php'); ?>        

</head>

<body data-sidebar="dark" data-layout-mode="light">

    <div class="account-pages">
        <div class="container">
            <div class="row justify-content-center align-items-center h-100v">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-primary bg-soft">
                            <div class="row">
                                <div class="col-7">
                                    <div class="text-primary p-4">
                                        <h5 class="text-primary">Welcome Back !</h5>
                                        <p>Sign in with MbizSpare.</p>
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <img src="../assets/admin/images/profile-img.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0"> 
                            <div class="auth-logo">
                                <a href="./" class="auth-logo-light">
                                    <div class="avatar-md profile-user-wid mb-4">
                                        <span class="avatar-title rounded-circle bg-light">
                                            <img src="../assets/admin/images/logo-light.svg" alt="" class="rounded-circle" height="34">
                                        </span>
                                    </div>
                                </a>

                                <a href="./" class="auth-logo-dark">
                                    <div class="avatar-md profile-user-wid mb-4">
                                        <span class="avatar-title rounded-circle bg-light">
                                            <img src="../assets/admin/images/logo.svg" alt="" class="rounded-circle" height="34">
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2">
                                <form class="form-horizontal" action="#">
    
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="username" placeholder="Enter username">
                                    </div>
            
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <div class="input-group auth-pass-inputgroup">
                                            <input type="password" class="form-control" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
                                            <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                        </div>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="remember-check">
                                        <label class="form-check-label" for="remember-check">
                                            Remember me
                                        </label>
                                    </div>
                                    
                                    <div class="mt-3 d-grid">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit">Log In</button>
                                    </div> 

                                    <div class="mt-4 text-center">
                                        <a href="reset-password.php" class="text-muted"><i class="mdi mdi-lock me-1"></i> Forgot your password?</a>
                                    </div>
                                </form>
                            </div>
        
                        </div>
                    </div>
                    <div class="text-center">
                        <p class="m-0">© <script>document.write(new Date().getFullYear())</script> MbizSpare.</p>
                        <p> Design & Develop by <a href="https://abhisan.com/" target="_blank">Abhisan Technology</a></p>
                    </div> 

                </div>
            </div>
        </div>
    </div>

    <?php include('include/script.php'); ?>
</body> 
</html>