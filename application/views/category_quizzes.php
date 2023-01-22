<section>
    <div class="container py-4 py-xl-5">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2 class="font-weight-bold"><?php echo $category->name ?> Quizzes</h2>
            </div>
        </div>
        <?php if (is_array($quizzes) && sizeof($quizzes) > 0) : ?>
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3">
                <?php foreach ($quizzes as $quiz) : ?>
                    <a class="text-dark text-decoration-none" href="<?php echo base_url("index.php/quizzes/{$quiz['id']}"); ?>">
                        <div class="col mb-4">
                            <div>
                                <?php if ($quiz['image']) : ?>
                                    <img class="rounded img-fluid w-100 fit-cover" src="<?php echo $quiz['image']; ?>" style="width: 100%;">
                                <?php else : ?>
                                    <img class="rounded img-fluid w-100 fit-cover" src="https://placehold.co/600x400?text=Placeholder" style="width: 100%;">
                                <?php endif; ?>
                                <div class="py-4">
                                    <h4 class="font-weight-bold"><?php echo $quiz['title']; ?></h4>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php else : ?>
            <div class="text-center">
                <p>No content available yet</p>
            </div>
        <?php endif; ?>
    </div>
</section>