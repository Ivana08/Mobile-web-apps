@extends('layouts.app')
@section('content')
    <main class="py-4">
        <!-- HERE IS THE CAROUSSEL WITH A TITLE AND A SHORT PARAGRAPH-->
        <div class="container mt-md-5">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ul>
                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/carousel-courses.jpg" alt="Image of a woman studying online">
                        <!-- Caption for image 1 -->
                        <div class="carousel-caption">
                            <h3>Online courses</h3>
                            <p>Get the knowledge of those skills that will be helpful to you in the real world, just right in your home. No matter your age or your skills in using a laptop.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/carousel-experts.jpg" alt="Image of a man holding some folders">
                        <!-- Caption for image 2 -->
                        <div class="carousel-caption">
                            <h3>The most suitable instructor</h3>
                            <p>Albert Einstein was saying "I never teach my pupils. I can only attempt to provide the conditions in which they can learn."</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/carousel-schedule.jpg" alt="Image of a wooden calendar next to a laptop">
                        <!-- Caption for image 3 -->
                        <div class="carousel-caption">
                            <h3>Time is precious</h3>
                            <p>Time is the most valuable thing a man can spend and the key is in not spending, but investing it.</p>
                        </div>
                    </div>
                </div>
                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
        <!-- HERE GOES SOME OF THE COURSES. THERE WILL BE ALSO BUTTONS TO OPEN ALL COURSES-->
        <div class="container mt-5">
            <h2 class="mb-5 text-center">Our most popular courses</h2>
            <div class="row">
                @foreach(\App\Models\Course::where('featured', 1)->get() as $course)
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
            </div>
        </div>
        <!-- HERE ARE THE TESTIMONIALS -->
        <div class="container mt-5">
            <h2 class="mb-5 text-center">Testimonials</h2>
            <div id="myTestimonials" class="carousel carousel-testimonials slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item carousel-item active">
                        <div class="img-box"><img src="img/student1.png" alt="The image of a student"></div>
                        <p class="testimonial">"I believe that E-learning is an efficient source for acquiring education. Online education is not only cheaper but it also saves a lot of time. Online education gives you an opportunity to learn from the comfort of your home or anywhere in the world. Moreover, E-learning could be combined with other wonderful fields including neurosciences and psychology to improve the quality of education."</p>
                        <p class="overview"><b>Lukas Armitaitas</b>Student</p>
                    </div>
                    <div class="item carousel-item">
                        <div class="img-box"><img src="img/student2.png" alt="The image of a student"></div>
                        <p class="testimonial">"E-learning turns out to be a fruitful experience for everyone involved. It not only allows you a chance to get quality education but it is also quite convenient. Hence, I believe that E-learning is a wonderful alternative to traditional education especially in the times of COVID-19."</p>
                        <p class="overview"><b>Maria Ulaivinen</b>Student</p>
                    </div>
                    <div class="item carousel-item">
                        <div class="img-box"><img src="img/student3.png" alt="The image of a student"></div>
                        <p class="testimonial">"E-learning is a great concept. It allows for work life balance and it means you can study in your own time at your oen pace. However you need to remain focused and motivated, which can be hard when you dont have somone pushing you. But thankfully my instructor was always present... even virtually."</p>
                        <p class="overview"><b>Mario Olenis</b>Student</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5 text-center">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <h3 class="mb-4">About us</h3>
                        <p>E-learning is the innovative platform that can provide learning solutions to individuals, students or employees. It has been created on the basis that your time is valuable so it deserves the best treatment. </p>
                    </h3>
                </div>
                <div class="col-lg-6 col-md-12 mt-3 mt-md-0">
                    <h3 class="mb-4">Contact us</h3>
                    <p>E-mail: <a href="mailto:info@imaweb.sk"> info@e-learning.dk </a> <br />
                      (max response time 12 hours)
                    </p>
                    <p>Phone: <a href="tel:+4571421861"> (+45) 71 42 18 61 </a> <br />
                      (on weekdays 09.00-16.00)
                    </p>
                </div>
            </div>
        </div>
    </main>
@endsection
