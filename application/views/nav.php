<nav class="navbar navbar-light navbar-expand-md shadow-sm py-3">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="<?php echo base_url(); ?>">
      <span class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center mr-2 bs-icon"></span>
      <span>QuizApp</span>
    </a>
    <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-2">
      <span class="sr-only">Toggle navigation</span>
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navcol-2">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/quizzes'); ?>">Quizzes</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/categories'); ?>">Categories</a></li>
      </ul>
      <?php if (isset($this->session->username) && isset($this->session->is_logged_in) && $this->session->is_logged_in) : ?>
        <div class="dropdown">
          <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
            <?php echo $this->session->username; ?>
          </button>
          <div class="dropdown-menu">
            <?php if (isset($this->session->is_admin) && $this->session->is_admin) : ?>
              <a class="dropdown-item" href="<?php echo base_url('index.php/account/categories'); ?>">Categories</a>
            <?php endif; ?>
            <a class="dropdown-item" href="<?php echo base_url('index.php/account/quizzes'); ?>">My Quizzes</a>
            <a class="dropdown-item" href="<?php echo base_url('index.php/user/logout'); ?>">Log out</a>
          </div>
        </div>
      <?php else : ?>
        <a class="btn btn-primary ml-lg-2" role="button" href="<?php echo base_url('index.php/user/login'); ?>">Log in</a>
      <?php endif; ?>
    </div>
  </div>
</nav>