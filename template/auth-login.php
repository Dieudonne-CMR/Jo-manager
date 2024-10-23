<!doctype html>
<html lang="en">


<!-- Mirrored from themesdesign.in/morvin/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Oct 2024 05:04:01 GMT -->
<head>

    
    <meta charset="utf-8" />
    <title>jo-manager</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="jo-manager" name="description" />
    <meta content="jo-manager" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />


</head>


<body class="authentication-bg bg-primary">
    <div class="home-center">
        <div class="home-desc-center">

            <div class="container">

                <div class="home-btn"><a href="https://themesdesign.in/" class="text-white router-link-active"><i
                            class="fas fa-home h2"></i></a></div>


                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="px-2 py-3">


                                    <div class="text-center">
                                        <a href="index.html">
                                            <img src="assets/images/logo-dark.png" height="22" alt="logo">
                                        </a>

                                        <h5 class="text-primary mb-2 mt-4">Jo-manager</h5>
                                        <p class="text-muted">Connectez-vous pour continuer vers Morvin.</p>
                                    </div>


                                    <form class="form-horizontal mt-4 pt-2" action="login" method="post">

                                        <div class="mb-3">
                                            <label for="username">Nom d'utilisateur</label>
                                            <input type="text" name="nom_utilisateur" class="form-control" id="username"
                                                placeholder="Entrez votre nom d'utilisateur">
                                        </div>

                                        <div class="mb-3">
                                            <label for="userpassword">Mot de passe</label>
                                            <input type="password" name="mot_de_passe" class="form-control" id="userpassword"
                                                placeholder="Entrez votre mot de passe">
                                        </div>

                                        <div class="mb-3">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="customControlInline">
                                                    <label class="form-label"
                                                        for="customControlInline">Se souvenir de moi</label>
                                                </div>
                                        </div>

                                        <div>
                                            <button class="btn btn-primary w-100 waves-effect waves-light"
                                                type="submit" name="connecter">Se connecter</button>
                                        </div>

                                        <div class="mt-4 text-center">
                                            <a href="auth-recoverpw.html" class="text-muted"><i class="mdi mdi-lock me-1"></i> Mot de passe oublié ?</a>
                                        </div>
    

                                    </form>

                                  
                                </div>
                            </div>
                        </div>

                        <div class="mt-5 text-center text-white">
                            <p>Vous n'avez pas de compte ?<a href="auth-register.html" class="fw-bold text-white"> Enregistrez-vous</a> </p>
                            <p>© <script>document.write(new Date().getFullYear())</script> Morvin. Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://1.envato.market/themesdesign" target="_blank">Themesdesign</a></p>
                        </div>
                    </div>
                </div>

            </div>


        </div>
        <!-- End Log In page -->
    </div>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <script src="assets/js/app.js"></script>

</body>


<!-- Mirrored from themesdesign.in/morvin/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Oct 2024 05:04:01 GMT -->
</html>