<section class="position-relative py-4 py-xl-5">
    <div class="container position-relative">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2 class="font-weight-bold">Edit Quiz</h2>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col" id="quiz_add_area">
                <div>
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item" role="presentation"><a class="nav-link active" role="tab" data-toggle="tab" href="#details">Details</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-toggle="tab" href="#questions">Questions</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="details" class="tab-pane active" role="tabpanel">
                            <form class="mt-4">
                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <label for="title">Quiz Title</label>
                                        <input type="text" class="form-control" id="title" value="<?php echo $quiz->title; ?>">
                                    </div>
                                    <div class="form-group col">
                                        <label for="description">Quiz Description</label>
                                        <input type="text" class="form-control" id="description" value="<?php echo $quiz->description; ?>">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-5">
                                        <label for="category">Quiz Category</label>
                                        <select class="form-control" id="category" name="category">
                                            <?php foreach ($categories as $category) : ?>
                                                <?php if ($category['id'] == $quiz->category) : ?>
                                                    <option value=<?php echo $category['id'] ?> selected>
                                                        <?php echo $category['name'] ?>
                                                    </option>
                                                <?php else : ?>
                                                    <option value=<?php echo $category['id'] ?>>
                                                        <?php echo $category['name'] ?>
                                                    </option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group col">
                                        <label for="image">Quiz Image URL</label>
                                        <input type="text" class="form-control" id="image" value="<?php echo $quiz->image; ?>">
                                    </div>
                                </div>
                                <button id="quiz_update" type="submit" class="btn btn-primary btn-block mt-2 mb-5">Update Quiz</button>
                            </form>
                        </div>
                        <div id="questions" class="tab-pane" role="tabpanel">
                            <div class="row d-flex justify-content-center">
                                <div class="col" id="quiz_add_area">
                                    <form id="question_answers_add_form">
                                        <div class="form-row mb-5 mt-4">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="question">Question Text</label>
                                                    <input type="text" class="form-control" id="question" placeholder="The Question">
                                                </div>
                                            </div>
                                        </div>
                                        <table class="table table-bordered">
                                            <thead class="text-center">
                                                <tr>
                                                    <th scope="col">Answer Text</th>
                                                    <th scope="col">Correct Answer</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <input name="answer_id[]" type="hidden" value="1">
                                                            <input id="answer_1" class="form-control answer" name="answer[]" autocomplete="off" maxlength="150" value="" type="text" placeholder="Answer 1">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input for-ans="answer_1" type="radio" class="form-control  correct-answer" id="ans2" name="right_answer" value="answer_1">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <input name="answer_id[]" type="hidden" value="2">
                                                            <input id="answer_2" class="form-control answer" name="answer[]" autocomplete="off" maxlength="150" value="" type="text" placeholder="Answer 2">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input for-ans="answer_2" type="radio" class="form-control  correct-answer" id="ans2" name="right_answer" value="answer_2">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <input name="answer_id[]" type="hidden" value="3">
                                                            <input id="answer_3" class="form-control answer" name="answer[]" autocomplete="off" maxlength="150" value="" type="text" placeholder="Answer 3">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input for-ans="answer_3" type="radio" class="form-control  correct-answer" id="ans2" name="right_answer" value="answer_3">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <input name="answer_id[]" type="hidden" value="4">
                                                            <input id="answer_4" class="form-control answer" name="answer[]" autocomplete="off" maxlength="150" value="" type="text" placeholder="Answer 4">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input for-ans="answer_4" type="radio" class="form-control  correct-answer" id="ans2" name="right_answer" value="answer_4">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <button id="question_answers_save" type="submit" class="btn btn-primary btn-block mt-2 mb-5">Save</button>
                                    </form>
                                </div>
                            </div>
                            <div class="row mt-5 mb-5">
                                <div class="col-md-8 col-xl-6 text-center mx-auto">
                                    <h2 class="font-weight-bold">Quiz Questions</h2>
                                </div>
                            </div>
                            <div class="row mt-3 d-flex justify-content-center">
                                <div class="col">
                                    <div class="table-responsive">
                                        <table class="table" id="questions_table">
                                            <thead>
                                                <tr>
                                                    <th>Question</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody id="questions">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<script src="<?php echo base_url('js/auth.js') ?>"></script>
<script>
    let QuestionWithAnswers = Backbone.Model.extend({
        urlRoot: "<?php echo base_url("index.php/api/quizzes/questions_answers/{$quiz_id}"); ?>",
        idAttribute: "id",
    });

    let Question = Backbone.Model.extend({
        urlRoot: "<?php echo base_url("index.php/api/questions"); ?>",
        idAttribute: "id",
    });

    let Questions = Backbone.Collection.extend({
        mode: Question,
        url: "<?php echo base_url("index.php/api/questions"); ?>",
    });

    let questions = new Questions();

    questions.fetch({
        beforeSend: authHeaders,
        data: {
            quiz_id: "<?php echo $quiz_id; ?>"
        },
        async: false
    })

    let QuestionAnswersAddView = Backbone.View.extend({

        initialize: function() {

        },

        render: function() {
            return this
        },

        events: {
            "click #question_answers_save": "onQuestionAdd"
        },

        onQuestionAdd: function(event) {
            event.preventDefault()

            let answers = []

            let correct_answer_id = $('#question_answers_add_form input[name="right_answer"]:checked').val()

            $('#question_answers_add_form input[name="answer[]"]').each(function() {
                let answer_id = $(this).attr('id')
                let answer_text = $(this).val();

                if (answer_text && correct_answer_id) {
                    answers.push({
                        text: answer_text,
                        is_correct: answer_id === correct_answer_id
                    })
                }

            });

            if ($("#question").val() && answers.length > 1) {

                let questionWithAnswers = new QuestionWithAnswers({
                    question: $("#question").val(),
                    answers: answers
                })

                questionWithAnswers.save({}, {
                    beforeSend: authHeaders,
                    success: function() {
                        alert("Question & Answers saved successfully")
                        $("#question_answers_add_form").trigger('reset');
                    },
                    error: function() {
                        alert("Question & Answers could not be saved. Please try again!")
                    }
                })
            } else {
                alert("Please enter required information!")
            }

        }
    })

    let questionAnswersAddView = new QuestionAnswersAddView({
        el: "#question_answers_add_form"
    })

    let QuestionView = Backbone.View.extend({

        initialize: function() {
            this.model.on("remove", this.render, this);
        },

        tagName: "tr",

        events: {
            "click .edit": "onEdit",
            "click .delete": "onDelete"
        },

        onDelete: function(event) {
            let question = new Question({
                id: event.target.id
            })
            question.destroy({
                beforeSend: authHeaders,
                async: false,
                success: function() {
                    alert("Question & Answers deleted")
                },
                error: function() {
                    alert("Question & Answers could not be deleted. Please try again!")
                }
            });
        },

        onEdit: function(event) {
            console.log("EDIT")
        },

        render: function() {
            let questionId = this.model.get('id')

            this.$el.html(
                `
                <td>${this.model.get("description")}</td>
                <td>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-primary edit" id="${questionId}">Edit</button>
                        <button type="button" class="btn btn-danger delete" id="${questionId}">Delete</button>
                    </div>
                </td>
                `
            );
            return this;
        }
    });

    let QuestionsView = Backbone.View.extend({

        initialize: function() {
            this.model.on("remove", this.render, this);
        },

        render: function() {
            let self = this;
            this.model.each(function(question) {
                var questionView = new QuestionView({
                    model: question
                });
                self.$el.append(questionView.render().$el);
            })
        },

        onAdd: function(question) {
            let questionView = new QuestionView({
                model: question
            });
            this.$el.prepend(questionView.render().$el)
        }
    });

    let questionsView = new QuestionsView({
        el: "#questions_table",
        model: questions
    });

    questionsView.render();
</script>