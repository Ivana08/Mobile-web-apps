@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/course/create" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="border mt-5 mb-5 p-3 new-course-holder">
                <div>
                    <h5 class="border-bottom pb-3 mb-3">Create new course</h5>
                    <input type="text" placeholder="Course name" name="name" class="form-control mb-3" required>
                    <input type="text" placeholder="Category" name="category" class="form-control mb-3" required>
                    <input type="text" placeholder="Video length" name="length" class="form-control mb-3" required>
                    <input type="url" placeholder="Insert video source from the iframe" name="video" class="form-control mb-3" required>
                    <input type="file" class="form-control h-auto mb-3" accept="image/*" placeholder="Upload course image" name="image" data-toggle="tooltip" data-placement="left" title="Upload course image" required>
                    <textarea name="description" id="" cols="30" rows="5" placeholder="Course description" class="form-control mb-3" required></textarea>
                </div>
                <div>
                    <h5 class="border-bottom pb-3">Create a test for this course</h5>
                    <div class="questionnaire">
                        <input type="number" name="count" class="total" value="0">
                    </div>
                    <button type="button" class="btn btn-secondary add-question">Add question</button>
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-primary new-course-submit" type="submit">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                    </svg>
                    Create the course
                </button>
            </div>
        </form>
    </div>

    <script>
        window.addEventListener('DOMContentLoaded', function() {
            var questionCounter = 0;
            $(".add-question").click(function () {
                questionCounter++;
                $(".total").val(parseInt($(".total").val()) + 1);
                $(".questionnaire").append(`
                    <div class="border p-2 mb-3">
                        <input type="text" class="form-control mb-2" name="question-` + questionCounter + `" placeholder="Question" required>
                        <input type="text" class="form-control mb-2 bg-light" name="question-` + questionCounter + `-option-1" placeholder="Option 1" required>
                        <input type="text" class="form-control mb-2 bg-light" name="question-` + questionCounter + `-option-2" placeholder="Option 2" required>
                        <input type="text" class="form-control mb-2 bg-light" name="question-` + questionCounter + `-option-3" placeholder="Option 3" required>
                        <select name="question-` + questionCounter + `-correct" class="form-control pt-2 pb-2 h-auto" required>
                            <option value="" selected disabled>Select correct answer</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </select>
                        <a href="#" class="delete-question-` + questionCounter  + ` d-block text-right text-danger mt-2 mb-2">Delete this question</a>
                    </div>
                `);
                $(".delete-question-" + questionCounter).click(function(){
                   $(this).parent().remove();
                    $(".total").val(parseInt($(".total").val()) - 1);
                });
            });
        });
    </script>

@endsection
