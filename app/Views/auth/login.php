<link rel="stylesheet" href="/css/login.css">
<title>G4G</title>
<div class="container h-100 pt-5">
    <div class="row align-items-center h-100 align-middle">
        <div class="col-6 mx-auto">
            <div class="jumbotron">
                <center>
                    <h3>L O G I N</h3>
                </center>
                <form action="/user/index" method='POST'>
                    <div class="form-group">
                        <label for="">Username / Email </label>
                        <input value="<?= old('username') ?>" autocomplete="off" autofocus="on" type="text" name="username" id="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Password </label>
                        <input value="<?= old('password') ?>" type="password" name="password" id="password" class="form-control">
                    </div>
                    <button class="btn btn-success btn-block">LOG IN</button>
                    <span class="dark-color d-inline-block line-height-2">Not have account? <a href="/auth/register">Register</a></span>
                </form>
            </div>
        </div>
    </div>
</div>