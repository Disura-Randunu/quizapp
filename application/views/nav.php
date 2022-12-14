<nav class="navbar navbar-light navbar-expand-md shadow-sm py-3">
  <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"><span class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center mr-2 bs-icon"></span><span>QuizApp</span></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-2"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navcol-2">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link" href="/quizapp/server">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="/quizapp/server/index.php/quiz/all">Quizzes</a></li>
        <li class="nav-item"><a class="nav-link" href="/quizapp/server/index.php/category">Categories</a></li>
      </ul><a class="btn btn-primary ml-lg-2" role="button" href="#"><?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'Log in' ?></a>
      
    </div>
  </div>
</nav>