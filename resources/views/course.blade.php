@extends('layouts.app')

@section('content')
    <div class="container mt-2 mt-md-5 single-course">
        <div class="row">

            <div class="col-12">
                <section class="mb-5">
                    @auth
                        @if (auth()->user()->role == 1)
                            @if(Auth::user()->id == $course->user_id)
                                <section class="course-btns mt-2 mb-4">
                                    <form action="/course/edit/{{$course->id}}" method="" class="d-inline-block">
                                        @csrf
                                        <button class="btn btn-edit mr-3">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                            </svg>
                                            Edit
                                        </button>
                                    </form>
                                    <a href="/course/delete/{{$course->id}}" onclick="return confirm('Are you sure you want to delete this course?');" class="d-inline-block delete-course-btn">
                                        <button class="btn btn-delete">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                            </svg>
                                            Delete
                                        </button>
                                    </a>
                                </section>
                            @endif
                        @endif
                    @endauth

                    <h1 class="mt-5 mb-5">{{$course->name}}</h1>
                    <div class="row mb-5">
                        <div class="col-6 col-md-3">
                            <p class="mb-0 font-weight-bold course-details-title">Instructor:</p>
                            <p class="course-details">{{\App\Models\User::findOrFail($course->user_id)->name}}</p>
                        </div>
                        <div class="col-6 col-md-3">
                            <p class="mb-0 font-weight-bold course-details-title">Category:</p>
                            <p class="course-details">{{$course->category}}</p>
                        </div>
                        <div class="col-6 col-md-3">
                            <p class="mb-0 font-weight-bold course-details-title">Length:</p>
                            <p class="course-details">{{$course->length}}</p>
                        </div>
                        <div class="col-6 col-md-3">
                            <p class="mb-0 font-weight-bold course-details-title">Reviews:</p>
                            <p class="reviews">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                </svg>
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                </svg>
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                </svg>
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-half" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.354 5.119L7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.55.55 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.519.519 0 0 1-.146.05c-.341.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.171-.403.59.59 0 0 1 .084-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027c.08 0 .16.018.232.056l3.686 1.894-.694-3.957a.564.564 0 0 1 .163-.505l2.906-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.002 2.223 8 2.226v9.8z"/>
                                </svg>
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                </svg>
                            </p>
                        </div>
                    </div>

                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="100%" class="embed-responsive-item" src="{{$course->video}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>

                    <h3 class="border-bottom mb-4 mt-5 pb-4">
                        <span class="about-course-title mr-5">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bookmark" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
                            </svg>
                            About
                        </span>
                        @if(count(json_decode($questionnaire)))
                            <span class="test-title">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-card-checklist" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                                  <path fill-rule="evenodd" d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
                                </svg>
                                Test
                            </span>
                        @endif
                    </h3>

                    <p class="mt-3 course-description">{{$course->description}}</p>

                    <div class="test-section">
                        <section>
                            <div class="questionnaire">
                            </div>
                            <div class="result">
                            </div>
                            <button type="button" class="check btn btn-primary">Check answers</button>
                        </section>
                        <script>
                            window.addEventListener('DOMContentLoaded', function() {
                                var questionnaire = JSON.parse('<?php echo $questionnaire; ?>');
                                var correct = [];
                                var counter = 0;
                                $.each(questionnaire, function (key, value) {
                                    var answers = "";
                                    correct.push(value.id + "-" + value.correct);
                                    $.each(value.answers, function (keyanswer, keyvalue) {
                                        counter++;
                                        answers += "<div><input type='radio' id='answer-counter-" + counter + "' name='question-" + (key+1) + "' class='mr-2' value='" + value.id + "-" + keyvalue + "' /><label class='mb-0' for='answer-counter-" + counter + "'>" + keyvalue + "</label><div>";
                                    });
                                    $(".questionnaire").append(`
                                        <div class='mb-3 question-holder'>
                                            <div><b>
                                                ` + value.question + `
                                            </b><div>
                                            <div>
                                                ` + answers + `
                                            </div>
                                        </div>
                                    `);
                                });
                                $(".check").click(function(){
                                    var answersCorrect = 0;
                                    var answersWrong = 0;
                                    if ($(':radio:checked').length == $(".question-holder").length) {
                                        $(':radio:checked').each(function(){
                                            if(correct.includes($(this).val())){
                                                answersCorrect++;
                                            } else {
                                                answersWrong++;
                                            }
                                        });
                                        $(".result").html(`
                                <div class="mb-4">
                                    <div><b>Correct</b>: ` + answersCorrect + `</div>
                                    <div><b>Wrong</b>: ` + answersWrong + `</div>
                                </div>
                            `);
                                    } else {
                                        alert("You have to answer all questions first!");
                                    }
                                });
                            });
                        </script>
                    </div>
                </section>

                <section class="mt-2">
                    <div id="disqus_thread"></div>
                    <script>
                        var disqus_config = function () {
                            this.page.url = "<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>";
                            this.page.identifier = "<?php echo $_SERVER['REQUEST_URI'] ?>";
                        };
                        (function() {
                            var d = document, s = d.createElement('script');
                            s.src = 'https://mwa-1.disqus.com/embed.js';
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                        })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                </section>

            </div>
        </div>
    </div>
@endsection
