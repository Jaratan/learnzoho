<?php require APPROOT . '/views/inc/header.php'; ?> 
    
    <div id="fh5co-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6 animate-box">
                    <h3>Login</h3>
                    <form action="<?php echo URLROOT; ?>/users/login" method="post">
                        <div class="row form-group">
                            <div class="col-md-6">
                                <input type="email" name="user_email" id="user_email" class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>" placeholder="Email Address" autocomplete="off" required>
                                <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-6">
                                <input type="password" name="user_password" class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>" style="background-color: #ffffff;" placeholder="Password" required>
                                <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Login" class="btn btn-primary">
                        </div>
                    </form>     
                </div>
            </div>
            
        </div>
    </div>

<?php require APPROOT . '/views/inc/footer.php'; ?> 