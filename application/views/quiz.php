<section>
    <div class="container py-4 py-xl-5">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2 class="font-weight-bold"><?php echo $quiz->title; ?></h2>
            </div>
        </div>
        <div class="row row-cols-1">
            <div class="col-7 mb-4 mx-auto">
                <div><img class="rounded img-fluid w-100 fit-cover" src="<?php echo $quiz->image; ?>" style="height: 200px;">
                    <div class="py-4">
                        <p><?php echo $quiz->description; ?></p>
                    </div>
                    <div class="py-4">
                        <h6>Created By:</h6>
                        <p><?php echo $username; ?></p>
                    </div>
                    <!-- <div class="py-4">
                        <h6>Questions Amount:</h6>
                        <p><?php echo $quiz->questions_amount; ?></p>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="row row-cols-1">
            <div class="col-7 mb-4 mx-auto">
                <form action="<?php echo base_url("index.php/quizzes/{$quiz->id}/start"); ?>" method="post">
                    <button type="submit" class="btn btn-primary btn-block">Start Quiz</button>
                </form>
            </div>
        </div>
    </div>
</section>