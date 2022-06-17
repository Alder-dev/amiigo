<div class="login-popup">
    <div class="tab tab-nav-boxed tab-nav-center tab-nav-underline">
        <ul class="nav nav-tabs text-uppercase" role="tablist">
            <li class="nav-item">
                <a href="#sign-in" class="nav-link active">Registrarse</a>
            </li>
            <li class="nav-item">
                <a href="#sign-up" class="nav-link">Iniciar sesión</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="sign-in">
                <div class="form-group">
                    <label>Nombre de usuario o dirección de correo electrónico *</label>
                    <input type="text" class="form-control" name="username" id="username" required>
                </div>
                <div class="form-group mb-0">
                    <label>Contraseña *</label>
                    <input type="text" class="form-control" name="password" id="password" required>
                </div>
                <div class="form-checkbox d-flex align-items-center justify-content-between">
                    <input type="checkbox" class="custom-checkbox" id="remember" name="remember" required="">
                    <label for="remember">Recordar</label>
                    <a href="#">Última tu contraseña?</a>
                </div>
                <a href="#" class="btn btn-primary">Registrarse</a>
            </div>
            <div class="tab-pane" id="sign-up">
                <div class="form-group">
                    <label>Dirección de correo electrónico *</label>
                    <input type="text" class="form-control" name="email_1" id="email_1" required>
                </div>
                <div class="form-group mb-5">
                    <label>Contraseña *</label>
                    <input type="text" class="form-control" name="password_1" id="password_1" required>
                </div>
                <p>Sus datos personales se utilizarán para respaldar su experiencia.
                    a través de este sitio web, para administrar el acceso a su cuenta,
                    y para otros fines descritos en nuestro <a href="#" class="text-primary">política de privacidad</a>.</p>
                <a href="#" class="d-block mb-5 text-primary">Registrarse como vendedor(a)?</a>
                <div class="form-checkbox d-flex align-items-center justify-content-between mb-5">
                    <input type="checkbox" class="custom-checkbox" id="agree" name="agree" required="">
                    <label for="agree" class="font-size-md">Estoy de acuerdo con la <a  href="#" class="text-primary font-size-md">política de privacidad</a></label>
                </div>
                <a href="#" class="btn btn-primary">Registrarse</a>
            </div>
        </div>
        <p class="text-center">Iniciar sesión con una red social</p>
        <div class="social-icons social-icon-border-color d-flex justify-content-center">
            <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
            <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
            <a href="#" class="social-icon social-google fab fa-google"></a>
        </div>
    </div>
</div>