<section>
    <div class="container py-4 py-xl-5">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2 class="font-weight-bold">Categories</h2>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3">
            <?php if ($categories) : ?>
                <?php foreach ($categories as $category) : ?>
                    <a class="text-dark text-decoration-none" href="<?php echo base_url("index.php/categories/{$category['id']}/quizzes") ?>">
                        <div class="col mb-4">
                            <div>
                                <?php if ($category['image']) : ?>
                                    <img class="rounded img-fluid w-100 fit-cover" src="<?php echo $category['image']; ?>" style="width: 100%;">
                                <?php else : ?>
                                    <img class="rounded img-fluid w-100 fit-cover" src="https://placehold.co/600x400?text=<?php echo $category['name']; ?>" style="width: 100%;">
                                <?php endif; ?>
                                <div class="py-4">
                                    <h4 class="font-weight-bold"><?php echo $category['name']; ?></h4>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            <?php else : ?>
                <div class="text-center">
                    <div class="spinner-border" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>