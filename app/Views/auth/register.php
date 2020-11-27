<title>G4G REGISTER</title>
<link rel="stylesheet" href="/css/login.css">
<div class="container h-100 pt-5">
    <div class="row align-itemes-center h-100 align-middle">
        <div class="col-6 mx-auto">
            <div class="jumbotron">
                <center>
                    <h3>R E G I S T E R</h3>
                </center>
                <form action="/auth/login" method='POST'>
                    <div class="form-group">
                        <label for="">Username </label>
                        <input value="<?= old('username') ?>" type="text" name="username" id="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">E-Mail </label>
                        <input value="<?= old('email') ?>" type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Password </label>
                        <input value="<?= old('password') ?>" type="password" name="password" id="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Confirm Password </label>
                        <input value="<?= old('cpassword') ?>" type="password" name="cpassword" id="cpassword" class="form-control">
                    </div>
                    <button class="btn btn-success btn-block">REGISTER</button>
                    <span class="dark-color d-inline-block line-height-2">Already have account? <a href="/auth/login">Login</a></span>
                </form>
            </div>
        </div>
    </div>
</div>