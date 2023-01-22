<section class="position-relative py-4 py-xl-5">
    <div class="container position-relative">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2 class="font-weight-bold">Create New Quiz</h2>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col" id="quiz_add_area">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <label for="title">* Quiz Title</label>
                            <input type="text" class="form-control" id="title" required>
                        </div>
                        <div class="form-group col">
                            <label for="description">* Quiz Description</label>
                            <input type="text" class="form-control" id="description" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-5">
                            <label for="category">* Quiz Category</label>
                            <select class="form-control" id="category" name="category">
                                <?php foreach ($categories as $category) : ?>
                                    <option value=<?php echo $category['id'] ?>>
                                        <?php echo $category['name'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group col">
                            <label for="image">* Quiz Image URL</label>
                            <input type="text" class="form-control" id="image" required>
                        </div>
                    </div>
                    <button id="quiz_add" type="submit" class="btn btn-primary btn-block mt-2 mb-5">Create Quiz</button>
                </form>
            </div>
        </div>
        <div class="row mt-5 mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2 class="font-weight-bold">My Quizzes</h2>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col">
                <div class="table-responsive">
                    <table class="table" id="quizzes_table">
                        <thead>
                            <tr>
                                <th>Quiz</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="quizzes"></tbody>
                    </table>
                </div>
            </div>
        </div>
        <div id="quiz_item">

        </div>
        <div id="table">

        </div>
</section>

<script src="<?php echo base_url('js/auth.js') ?>"></script>
<script>
    var Quiz = Backbone.Model.extend({
        urlRoot: "<?php echo base_url('index.php/api/quizzes'); ?>",
        idAttribute: "id",
    });

    var Quizzes = Backbone.Collection.extend({
        model: Quiz,
        url: "<?php echo base_url('index.php/api/quizzes'); ?>",
    })

    let quizzes = new Quizzes();

    quizzes.fetch({
        beforeSend: authHeaders,
        data: {
            username: "<?php echo $this->session->username; ?>"
        },
        async: false
    })

    var QuizAddView = Backbone.View.extend({

        initialize: function() {},

        render: function() {
            return this
        },

        events: {
            "click #quiz_add": "onQuizAdd"
        },

        onQuizAdd: function(event) {
            event.preventDefault()

            let title = $("#title").val()
            let category = parseInt($("#category").val())
            let description = $("#description").val()
            let image = $("#image").val()

            if (title && category && description && image) {
                let new_quiz = new Quiz({
                    title: title,
                    category: category,
                    description: description,
                    image: image,
                    username: "<?php echo $this->session->username; ?>"
                })

                new_quiz.save({}, {
                    beforeSend: authHeaders,
                    async: false,
                    success: function() {
                        alert("Quiz saved successfully")
                    },
                    error: function() {
                        alert("Quiz could not be saved. Please try again!")
                    }
                })
                quizzes.add(new_quiz)
            } else {
                alert("Please enter required information")
            }
        }

    })

    let quizAddView = new QuizAddView({
        el: "#quiz_add_area"
    })

    var QuizView = Backbone.View.extend({

        initialize: function() {
            this.model.on("change", this.render, this);
        },

        tagName: "tr",

        events: {
            "click .publish": "onPublish",
            "click .unpublish": "onUnpublish",
            "click .delete": "onDelete"
        },

        onPublish: function(event) {

            let quiz = new Quiz({
                id: event.target.id
            })
            quiz.fetch({
                beforeSend: authHeaders,
                async: false
            })
            quiz.set("status", 1)
            quiz.save({}, {
                beforeSend: authHeaders,
                // async: false,
                success: function() {
                    alert("Quiz published successfully")
                },
                error: function() {
                    alert("Quiz could not be published. Please try again!")
                }
            })

        },

        onUnpublish: function(event) {
            let quiz = new Quiz({
                id: event.target.id
            })
            quiz.fetch({
                beforeSend: authHeaders,
                async: false
            })
            quiz.set("status", 0)
            quiz.save({}, {
                beforeSend: authHeaders,
                // async: false,
                success: function() {
                    alert("Quiz Unpublished successfully")
                },
                error: function() {
                    alert("Quiz could not be unpublished. Please try again!")
                }
            })
        },

        onDelete: function(event) {
            let quiz = new Quiz({
                id: event.target.id
            })
            quiz.destroy({
                beforeSend: authHeaders,
                // async: false,
                success: function() {
                    alert("Quiz deleted successfully")
                },
                error: function() {
                    alert("Quiz could not be deleted. Please try again!")
                }
            });
        },

        render: function() {
            let quizId = this.model.get('id')
            let quizStatus = parseInt((this.model.get('status'))) === 1 ? true : false
            let editUrl = "<?php echo base_url('index.php/account/quizzes/') ?>" + quizId + "/edit"

            this.$el.html(
                `
                <td>${this.model.get("title")}</td>
                <td>
                    <div class="btn-group" role="group">
                        <button type="button" 
                                class="btn ${ quizStatus ? 'btn-warning unpublish' : 'btn-success publish'}" 
                                id="${quizId}">${quizStatus ? 'Unpublish' : 'Publish'}
                        </button>
                        <a role="button" class="btn btn-primary" href="${editUrl}" id="${quizId}">Edit</a>
                        <button type="button" class="btn btn-danger delete" id="${quizId}">Delete</button>
                    </div>
                </td>
                `
            );
            return this;
        }

    })

    var QuizzesView = Backbone.View.extend({

        initialize: function() {
            this.model.on("add", this.onAdd, this);
            this.model.on("remove", this.onRemove, this);
        },

        render: function() {
            let self = this;
            this.model.each(function(quiz) {
                var quizView = new QuizView({
                    model: quiz
                });
                self.$el.append(quizView.render().$el);
            })
        },

        onAdd: function(quiz) {
            let quizView = new QuizView({
                model: quiz
            });
            this.$el.prepend(quizView.render().$el)
        },

        onRemove: function() {
            quizzes.fetch({
                beforeSend: authHeaders,
                data: {
                    username: "<?php echo $this->session->username; ?>"
                },
                async: false
            })
            this.render()
        }

    })

    let quizzesView = new QuizzesView({
        el: "#quizzes",
        model: quizzes
    })

    quizzesView.render();
</script>