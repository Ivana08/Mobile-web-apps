@extends('layouts.app')

@section('content')
    <section class="pt-3 mt-3 mt-md-5">
        <div class="container">
            <a href="/course/create" class="float-right text-secondary">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                </svg>
                <span class="ml-2">Create new course</span>
            </a>
            <strong class="mb-4 pb-4 d-block border-bottom">MY COURSES</strong>
            <div class="row mt-4">
                @foreach($courses as $course)
                    <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
                        <div class="card">
                            <div class="img-wrapper">
                                <div class="img-card" style="background-image: url('/storage/images/{{$course->image}}');">
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{$course->name}}</h5>
                                <p class="card-text">{{ Str::limit($course->description, 190) }}</p>
                                <a href="/course/{{$course->id}}" class="btn btn-primary open-course-btn">Open course</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="mt-5">
        <div class="container">
            <strong class="mb-4 pb-4 d-block border-bottom">STUDENTS</strong>
            <div class="row">
                @foreach($students as $student)
                <div class="col-6 col-md-3 mb-5 mb-md-0 text-center">
                    <div class="student-img">
                        <svg width="4em" height="4em" viewBox="0 0 16 16" class="bi bi-person" fill="#3a526d" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                        </svg>
                    </div>
                    <p class="mb-0 mt-3">{{$student->name}}</p>
                    <p>{{$student->email}}</p>
                    <a href="/student/delete/{{$student->id}}" onclick="return confirm('Are you sure you want to delete this student?');" class='delete-student-btn'>
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="#cc2031" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg>
                         Delete
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @if(Session::has('success_message'))
        <div class="alert alert-success success-message"> {{ Session::get('success_message') }}</div>
    @endif
@endsection
