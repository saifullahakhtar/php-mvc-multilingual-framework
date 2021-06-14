<?php
attachViews("admin/components/top");
?>
</head>
<body class="skin-dark">

<div class="main-wrapper">

    <!-- Content Body Start -->
    <div class="content-body m-0 p-0">
        <div class="login-register-wrap">
            <div class="row">
                <div class="d-flex align-self-center justify-content-center order-2 order-lg-1 col-lg-5 col-12">
                    <div class="login-register-form-wrap">
                        <div class="content mb-4">
                            <h1>Sign in</h1>
                        </div>
                        <div class="login-register-form" style="margin-top: 40px;">
                            <form action="<?php goToUrl("admin/login"); ?>" method="POST">
                                <div class="row">
                                    <div class="col-12 mb-20">
                                        <input class="form-control" value="<?php echo $this->recoverText('username-email'); ?>" type="text" placeholder="Username / Email" name="username-email" >
                                        <span class="text-danger"> <?php echo $this->formErrors('username-email'); ?> </span>
                                    </div>
                                    <div class="col-12 mb-20">
                                        <input class="form-control" type="password" placeholder="Password" name="password" >
                                        <span class="text-danger"> <?php echo $this->formErrors('password'); ?> </span>
                                    </div>
                                    <div class="col-12">
                                        <?php $this->flash("loginError", "alert alert-danger"); ?>
                                    </div>
                                    <div class="col-12 mt-10">
                                        <button class="button button-primary button-outline" name="sign-in-to-admin">sign in</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="login-register-bg order-1 order-lg-2 col-lg-7 col-12">
                    <div class="content">
                        <!-- <h1>Sign in</h1> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Body End -->

</div>

<?php
attachViews("admin/components/bottom");
?>