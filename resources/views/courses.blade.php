@extends('layouts.app')

@section('content')

    <section>
        <div class="hero-image">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 pt-5">
                        <h1>Boost your career</h1>
                        <p>Ambition accepted. Learn the latest skills to reach your professional goals.</p>
                        <a href="#explore-courses" class="btn btn-primary">Explore courses</a>
                    </div>
                    <div class="col-md-6 text-right">
                        <img src="/img/hero.png" alt="E-learning platform">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="all-courses-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-3 col-lg-2">
                            <div class="svg-holder svg-courses">
                                <svg viewBox="0 0 16 16" class="bi bi-collection-play" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M14.5 13.5h-13A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5zm-13 1A1.5 1.5 0 0 1 0 13V6a1.5 1.5 0 0 1 1.5-1.5h13A1.5 1.5 0 0 1 16 6v7a1.5 1.5 0 0 1-1.5 1.5h-13zM2 3a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11A.5.5 0 0 0 2 3zm2-2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7A.5.5 0 0 0 4 1z"/>
                                    <path fill-rule="evenodd" d="M6.258 6.563a.5.5 0 0 1 .507.013l4 2.5a.5.5 0 0 1 0 .848l-4 2.5A.5.5 0 0 1 6 12V7a.5.5 0 0 1 .258-.437z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h5 class="mb-0">{{\App\Models\Course::count()}} online courses</h5>
                            <p class="mb-0">Enjoy a variety of fresh topics</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-3 col-lg-2">
                            <div class="svg-holder svg-teachers">
                                <svg viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h5 class="mb-0">Expert instruction</h5>
                            <p class="mb-0">Find the right instructor for you</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-3 col-lg-2">
                            <div class="svg-holder svg-lifetime">
                                <svg id="icon-lifetime" viewBox="0 0 24 24">
                                    <path d="M18.6 6.62c-1.44 0-2.8.56-3.77 1.53L12 10.66 10.48 12h.01L7.8 14.39c-.64.64-1.49.99-2.4.99-1.87 0-3.39-1.51-3.39-3.38S3.53 8.62 5.4 8.62c.91 0 1.76.35 2.44 1.03l1.13 1 1.51-1.34L9.22 8.2A5.37 5.37 0 005.4 6.62C2.42 6.62 0 9.04 0 12s2.42 5.38 5.4 5.38c1.44 0 2.8-.56 3.77-1.53l2.83-2.5.01.01L13.52 12h-.01l2.69-2.39c.64-.64 1.49-.99 2.4-.99 1.87 0 3.39 1.51 3.39 3.38s-1.52 3.38-3.39 3.38c-.9 0-1.76-.35-2.44-1.03l-1.14-1.01-1.51 1.34 1.27 1.12a5.386 5.386 0 003.82 1.57c2.98 0 5.4-2.41 5.4-5.38s-2.42-5.37-5.4-5.37z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h5 class="mb-0">Lifetime access</h5>
                            <p class="mb-0">Learn on your schedule</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="explore-courses">
        <div class="container">

            <strong class="mb-4 pt-5 pt-sm-0 pb-4 d-block border-bottom">EXPLORE OUR COURSES</strong>

            <div class="search-area">
                <div class="search-icon">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                        <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                    </svg>
                </div>
                <input type="text" placeholder="Search for a course" class="form-control mb-3 search-form">
            </div>

<div class="row mt-4">
    @foreach($courses as $course)
        <div class="col-sm-12 col-md-6 col-lg-4 mb-4 single-course" search="{{$course->name}}" data-aos="fade-up">
            <div class="card">
                <div class="img-wrapper">
                    <div class="img-card" style="background-image: url('/storage/images/{{$course->image}}');">
                    </div>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">{{$course->name}}</h5>
                                <p class="card-text">{{ Str::limit($course->description, 190) }}</p>
                                @auth
                                    <a href="/course/{{$course->id}}" class="btn btn-primary open-course-btn">Open the course</a>
                                @else
                                    <a href="/login" class="btn btn-primary open-course-btn">Log in to see the course</a>
                                @endauth
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-lg-12 no-matching">
                    <div class="text-center pt-5 pb-5">
                        No course matched your search phrase
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        window.addEventListener('DOMContentLoaded', function() {
            $(".search-form").keyup(function () {
                var phrase = $(this).val();
                if(phrase.length > 0) {
                    var anyDisplayed = false;
                    $(".single-course").hide();
                    $(".single-course").each(function() {
                        if($(this).attr('search').toLowerCase().indexOf(phrase.toLowerCase()) >= 0) {
                            $(this).show();
                            anyDisplayed = true;
                        }
                    });
                    if(anyDisplayed) {
                        $(".no-matching").hide();
                    } else {
                        $(".no-matching").show();
                    }
                } else {
                    $(".single-course").show();
                }
            });
        });
    </script>

@endsection
