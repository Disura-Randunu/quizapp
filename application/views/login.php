<section class="position-relative py-4 py-xl-5">
    <div class="container position-relative">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2 class="font-weight-bold">Log in</h2>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-6 col-xl-4">
                <div class="card">
                    <div class="card-body text-center d-flex flex-column align-items-center">
                        <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg>
                        </div>
                        <form method="post" action="<?php echo base_url('index.php/user/submit_login') ?>">
                            <div class="mb-3"><input class="form-control" type="text" name="username" placeholder="Username" required></div>
                            <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password" required></div>
                            <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Log in</button></div>
                        </form>
                        <p class="text-muted">Don't have an account?
                            <span class="font-weight-bold">
                                <a class="" href="<?php echo base_url('index.php/user/signup') ?>">Sign up</a>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>