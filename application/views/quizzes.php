<section>
    <div class="container py-4 py-xl-5">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2 class="font-weight-bold">Quizzes</h2>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col">
                <form>
                    <div class="form-row">
                        <div class="col-4">
                            <select class="form-control" placeholder="Select Category">
                                <option value="" disabled selected>Select Category</option>
                                <?php foreach ($categories as $category) : ?>
                                    <option value=<?php echo $category['id'] ?>>
                                        <?php echo $category['name'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="bi bi-search"></i></div>
                                </div>
                                <input type="text" class="form-control" placeholder="Search quizzes">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3">
            <?php foreach ($quizzes as $quiz) : ?>
                <div class="col mb-4">
                    <div><img class="rounded img-fluid w-100 fit-cover" src=<?php echo base_url("uploads/{$quiz['image']}") ?> style="height: 200px;">
                        <div class="py-4">
                            <h4 class="font-weight-bold"><?php echo $quiz['title']; ?></h4>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>