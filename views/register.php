<div class="d-flex align-items-center justify-content-center vh-100">
    <div class="col-md-6 col-lg-5">
        <div class="login-wrap p-4 p-md-5">

            <!-- <h3 class="text-center mb-4">Have an account?</h3> -->
            <form action="/register" method="post" class="login-form">
                <div class="text-center mb-5">
                    <h2 class="heading-section">Register</h2>
                    <p class="text-center mb-4">Have an account? <a href="/login">Login</a></p>
                </div>
                <div class="form-group mb-2">
                    <input name="firstname" type="text" class="form-control rounded-left" placeholder="First name">
                </div>
                <div class="form-group my-2">
                    <input name="lastname" type="text" class="form-control rounded-left" placeholder="Last name">
                </div>
                <div class="form-group my-2">
                    <input name="email" type="email" class="form-control rounded-left" placeholder="Email">
                </div>
                <div class="form-group d-flex my-2">
                    <input name="password" type="password" class="form-control rounded-left" placeholder="Password">
                </div>

                <div class="form-group d-flex my-2">
                    <input name="password_confirmation" type="password" class="form-control rounded-left" placeholder="Confirm password">
                </div>
                <!-- <div class="form-group d-md-flex">
                    <div class="w-50">
                        <label class="checkbox-wrap checkbox-primary">Remember Me
                            <input name="" type="checkbox" checked>
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="w-50 text-md-right">
                        <a href="#">Forgot Password</a>
                    </div>
                </div> -->
                <div class="form-group">
                    <button type="submit" class="btn btn-primary rounded submit px-3 my-2">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>