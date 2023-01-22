<section>
    <div class="container py-4 py-xl-5">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2 class="font-weight-bold">Latest Quizzes</h2>
            </div>
        </div>
        <?php if (is_array($latest_quizzes) && sizeof($latest_quizzes) > 0) : ?>
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 mb-5">
                <?php foreach ($latest_quizzes as $quiz) : ?>
                    <a class="text-dark text-decoration-none" href="<?php echo base_url("index.php/quizzes/{$quiz['id']}"); ?>">
                        <div class="col mb-4">
                            <div><img class="rounded img-fluid w-100 fit-cover" src="<?php echo $quiz['image']; ?>" style="height: 200px;">
                                <div class="py-4">
                                    <h4 class="font-weight-bold"><?php echo $quiz['title']; ?></h4>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
            <div class="row mb-5">
                <div class="col">
                    <div class="bg-light border rounded border-light d-flex flex-column justify-content-between flex-lg-row p-4 p-md-5">
                        <div class="pb-2 pb-lg-1">
                            <h2 class="font-weight-bold mb-2">Try out a Random Quiz!</h2>
                            <p class="mb-0">Feeling awesome? Just give it a whirl and test your knowledge in a random quiz.</p>
                        </div>
                        <div class="my-2">
                            <form action="<?php echo base_url('index.php/quizzes/random'); ?>" method="post">
                                <button class="btn btn-primary btn-lg mr-2 py-2 px-4" type="submit">Try Now!</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <div class="text-center">
                <p>No content available yet</p>
            </div>
        <?php endif; ?>
    </div>
</section>