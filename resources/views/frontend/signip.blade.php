<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Rekruter</title>

    <!-- Fonts -->
    <link href="bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="Bootstrap/bootstrap.min.css">


    <link rel="stylesheet" href="css/style.css">




</head>

<body class="antialiased">




    <div id="__next">
        <div class="authincation section-padding">
            <div class="container h-100">
                <div class="row justify-content-center h-100 align-items-center">
                    <div class="col-xl-5 col-md-6">
                        <div class="mini-logo text-center my-20"><a href="https://rekruter.imsaifun.com/"><img src="images/logo.png" alt=""></a>
                            <h4 class="card-title mt-20">Sign in to Rekruter</h4>
                        </div>
                        <div class="auth-form card mt-20">
                            <div class="card-body">
                                <form action="/#">
                                    <div class="row">
                                        <div class="col-12 mb-15">
                                            <label class="form-label">Email</label>
                                            <input name="email" type="text" class="form-control" value="">
                                        </div>
                                        <div class="col-12 mb-15"><label class="form-label">Password</label><input name="password" type="text" class="form-control" value=""></div>
                                        <div class="col-6">
                                            <div class="form-check"><input name="acceptTerms" type="checkbox" class="form-check-input " value=""><label class="form-check-label">Remember me</label></div>
                                        </div>
                                        <div class="col-6 text-end"><a href="/reset">Forgot
                                                Password?</a></div>
                                    </div>
                                    <div class="mt-15 d-grid gap-2"><button type="submit" class="btn btn-primary mr-2">Sign In</button></div>
                                </form>
                                <p class="mt-15 mb-0 account">Don't have an account?<a class="text-signup" href="/signup">Sign up</a></p>
                            </div>
                        </div>
                        <div class="privacy-link">
                            <a href="/signin#" class="text-sign">Have an issue with
                                2-factor authentication?</a><br><a href="/signin#" class="text-sign">Privacy
                                Policy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--- js ---->

    <!--<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="Bootstrap/bootstrap.min.js"></script>

</body>

</html>