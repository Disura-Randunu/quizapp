<section>
    <div class="container py-4 py-xl-5">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2 class="font-weight-bold"><?php echo $quiz->title; ?></h2>
            </div>
        </div>
        <div class="container py-4 py-xl-5">
            <div class="row mb-5">
                <div class="col">
                    <div class="text-center d-flex flex-column justify-content-center align-items-center p-3">
                        <h1><?php echo $results['message']; ?></h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="text-center d-flex flex-column justify-content-center align-items-center p-3">
                        <div class="px-3">
                            <h2 class="font-weight-bold mb-0"><?php echo $results['score']; ?></h2>
                            <p class="mb-0">Score</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="text-center d-flex flex-column justify-content-center align-items-center p-3">
                        <div class="px-3">
                            <h2 class="font-weight-bold mb-0"><?php echo $results['percentage']; ?>%</h2>
                            <p class="mb-0">Percentage</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <a class="btn btn-primary btn-block" href="<?php echo base_url("index.php/quizzes/{$quiz->id}/start"); ?>" role="button">Restart Quiz</a>
                </div>
            </div>
        </div>
    </div>
</section>