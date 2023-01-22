<section>
    <div class="container py-4 py-xl-5">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2 class="font-weight-bold">Quizzes</h2>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col">
                <form action="<?php echo base_url("index.php/quizzes/filter"); ?>" method="GET">
                    <div class="form-row">
                        <div class="col-4">
                            <select class="form-control" name="category" id="category">
                                <option value="all" selected>All Categories</option>
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
                                <input type="text" class="form-control" id="search_string" name="search_string" placeholder="Search quizzes">
                            </div>
                        </div>
                        <div class="col-2">
                            <button type="submit" class="btn btn-primary btn-block">Apply Filters</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?php if (sizeof($quizzes) > 0) : ?>
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3">
                <?php foreach ($quizzes as $quiz) : ?>
                    <a class="text-dark text-decoration-none" href="<?php echo base_url("index.php/quizzes/{$quiz['id']}"); ?>">
                        <div class="col mb-4 quiz-button" data-toggle="modal" data-target="#quizModel" id="<?php echo $quiz['id']; ?>">
                            <div><img class="rounded img-fluid w-100 fit-cover" src="<?php echo $quiz['image']; ?>" style="height: 200px;">
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