<div class="d-flex justify-content-center">
    <div class="col-md-3">
        <ul class="d-flex justify-content-center nav nav-tabs text-uppercase" role="tablist">
            <li class="nav-item">
                <a href="login_en" class="nav-link active">Sign In</a>
            </li>
            <li class="nav-item">
                <a href="signUp" class="nav-link">Sign Up</a>
            </li>
        </ul>
  
            <div class="tab-content">
                <div class="tab-pane active" id="sign-in">
                    <div class="form-group">
                        <label>Username or email address *</label>
                        <input type="text" class="form-control" name="username" id="username" required>
                    </div>
                    <div class="form-group mb-0">
                        <label>Password *</label>
                        <input type="password" class="form-control" name="password" id="password" required>
                    </div>
                    <div class="form-checkbox d-flex align-items-center justify-content-between">
                        <input type="checkbox" class="custom-checkbox" id="remember" name="remember">
                        <label for="remember">Remember me</label>
                        <a href="#">Last your password?</a>
                    </div>
                    <span>You do not have an account?</span>
                        <a href="#sign-up">Sign up</a>
                        <hr>
                    <button class="btn btn-primary btn-block" type="submit"> SIGN IN</button>
                </div>
    
       
        <div class="tab-pane" id="sign-up">
                <div class="form-group">
                    <label>Your Email address *</label>
                    <input type="text" class="form-control" name="email_1" id="email_1" required>
                </div>
                <div class="form-group mb-5">
                    <label>Password *</label>
                    <input type="text" class="form-control" name="password_1" id="password_1" required>
                </div>
                <p>Your personal data will be used to support your experience 
                    throughout this website, to manage access to your account, 
                    and for other purposes described in our <a href="#" class="text-primary">privacy policy</a>.</p>
                <a href="#" class="d-block mb-5 text-primary">Signup as a vendor?</a>
                <div class="form-checkbox d-flex align-items-center justify-content-between mb-5">
                    <input type="checkbox" class="custom-checkbox" id="agree" name="agree" required="">
                    <label for="agree" class="font-size-md">I agree to the <a  href="#" class="text-primary font-size-md">privacy policy</a></label>
                </div>
                <a href="#" class="btn btn-primary">Sign Up</a>
            </div>
       
        </div>
        <p class="text-center">Sign in with social account</p>
        <div class="social-icons social-icon-border-color d-flex justify-content-center">
            <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
            <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
            <a href="#" class="social-icon social-google fab fa-google"></a>
        </div>
    </div>
</div>
<!-- Main JS -->
<script src="assets/js/main.min.js"></script>
<script src="assets/js/main.js"></script>