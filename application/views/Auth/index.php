<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link href="<?= base_url('assets/'); ?>css1/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>css1/font-awesome.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>css1/style.css" rel="stylesheet">

  <title>Educational Bootstrap 5 Login Page Website Tampalte</title>
</head>

<body>
  <section class="form-02-main">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="_lk_de">
            <div class="form-03-main">
              <div class="logo">
                <img src="<?= base_url('assets/'); ?>img/user.png">
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control _ge_de_ol" type="text" placeholder="Enter Email" required="" aria-required="true">
              </div>

              <div class="form-group">
                <input type="password" name="password" class="form-control _ge_de_ol" type="text" placeholder="Enter Password" required="" aria-required="true">
              </div>

              <div class="checkbox form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="">
                  <label class="form-check-label" for="">
                    Remember me
                  </label>
                </div>
                <a href="#">Forgot Password</a>
              </div>

              <div class="form-group">
                <div class="_btn_04">
                  <a href="<?= base_url('Pengajuan'); ?>">Login</a>
                </div>
              </div>
              <div class="form-group">
                <div class="_btn_04">
                  <a href="<?= base_url('home'); ?>">Back</a>
                </div>
              </div>

              <div class="form-group nm_lk">
                <p>Don't have an account?</p>
                <a href="<?= base_url('Regist'); ?>" class="link-primary text-decoration-none">Register</a></p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>