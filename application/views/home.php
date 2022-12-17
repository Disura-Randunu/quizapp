<section>
    <div class="container py-4 py-xl-5">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2 class="font-weight-bold">Latest Quizzes</h2>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3">
            <?php foreach ($latest_quizzes as $item) : ?>
                <div class="col mb-4">
                    <div><img class="rounded img-fluid w-100 fit-cover" src=<?php echo base_url("uploads/{$item['image']}")?> style="height: 200px;">
                        <div class="py-4">
                            <h4 class="font-weight-bold"><?php echo $item['title']; ?></h4>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>