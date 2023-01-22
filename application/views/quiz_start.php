<section class="position-relative py-4 py-xl-5">
    <div class="container position-relative">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2 class="font-weight-bold"><?php echo $quiz->title; ?></h2>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <form action="<?php echo base_url("index.php/quizzes/submit_quiz_answers/{$quiz->id}") ?>" method="POST">
                    <?php foreach ($questions_answers as $key => $item) : ?>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="question_text"><?php echo $item['question_text']; ?></label>
                                    <?php foreach ($item['answers'] as $answer) : ?>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="<?php echo $key; ?>" id="<?php echo 'radio_' . $answer['answer_id']; ?>" value="<?php echo $answer['answer_id']; ?>">
                                            <label class="form-check-label" for="<?php echo 'radio_' . $answer['answer_id']; ?>">
                                                <?php echo $answer['answer_text']; ?>
                                            </label>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>