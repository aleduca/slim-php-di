<?php $this->layout('layout', ['title' => 'Login']); ?>

  <section class="gradient-custom">
    <div class="py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <form action="/login" method="post">
            <div class="card bg-dark text-white" style="border-radius: 1rem;">
              <div class="card-body p-5 text-center">

                <?php if($error): ?>
                  <span class="text text-danger"><?php echo $error; ?></span>
                <?php endif ?>

                <div class="mb-md-5 mt-md-4 pb-5">

                  <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                  <p class="text-white-50 mb-5">Please enter your login and password!</p>

                  <div class="form-outline form-white mb-4">
                    <input type="text" name="email" id="typeEmailX" class="form-control form-control-lg" value="galvao.emily@brito.com" />
                    <label class="form-label" for="typeEmailX">Email</label>
                  </div>

                  <div class="form-outline form-white mb-4">
                    <input type="password" name="password" id="typePasswordX" class="form-control form-control-lg" value="123" />
                    <label class="form-label" for="typePasswordX">Password</label>
                  </div>

                  <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>

                  <div class="d-flex justify-content-center text-center mt-4 pt-1">
                    <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                    <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                    <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                  </div>

                </div>

                <div>
                  <p class="mb-0">Don't have an account? <a href="#!" class="text-white-50 fw-bold">Sign Up</a>
                  </p>
                </div>

              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
