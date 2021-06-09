<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Course;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Ramsey\Uuid\Uuid;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    // Ivana
    public function contact()
    {
        return view('contact');
    }

    // Ivana
    public function dashboard()
    {
        if (Auth::check()) {
            if (Auth::user()->role == 1) {
                return redirect('/dashboard-teacher');
            } else if (Auth::user()->role == 0) {
                return redirect('/courses');
            } else {
                return redirect('/');
            }
        }
        else {
            return redirect('/');
        }
    }
    // Ivana
    public function dashboard_teacher()
    {
        if (Auth::check()) {
            if (Auth::user()->role == 1) {
                $courses = Course::where('user_id', Auth::user()->id)->get(); // SELECT * FROM courses WHERE user_id = 1;
                $students = User::where('role', '0')->get(); //SELECT
                return view('dashboard-teacher')->with('courses', $courses)->with('students', $students);
            } else {
                return redirect('/');
            }
        }
    }
    // Ivana
    public function delete_student($id)
    {
        $student = User::findOrFail($id);
        $student->delete(); // DELETE FROM users WHERE id = 1;
        Session::flash('success_message','Student was successfully deleted.');
        return redirect('/dashboard-teacher');
    }

    // Martin
    public function courses()
    {
        $courses = Course::all();
        return view('courses')->with('courses', $courses);
    }

    // Martin
    public function new_course()
    {
        if (Auth::check()) {
            if (Auth::user()->role == 1) {
                return view('create_course');
            }
        } else {
            return redirect('/');
        }
    }

    // Martin & Ivana
    public function create_course(Request $request)
    {

        // Martin
        // Resize and upload image
        $image = $request->file('image');
        $fileName = Uuid::uuid4() . '.' . $image->getClientOriginalExtension();
        $manager = new ImageManager(array('driver' => 'imagick'));
        $img = $manager->make($image->getRealPath());
        $img->resize(960, 960, function ($constraint) {
            $constraint->aspectRatio();
        });
        $img->stream();
        Storage::disk('local')->put('public/images/' . $fileName, $img, 'public');

        // Ivana
        // Add course
        $course = new Course;
        $course->name = $request->name;
        $course->description = $request->description;
        $course->video = $request->video;
        $course->user_id = Auth::user()->id;
        $course->category = $request->category;
        $course->length = $request->length;
        $course->image = $fileName;
        $course->save();

        // Martin
        // Add question
        for ($x = 1; $x <= $request->count; $x++) {

            $question = new Question;
            $question->question = $request->input('question-' . $x);
            $question->course_id = $course->id;
            $question->save();

            $answer = new Answer();
            $answer->question_id = $question->id;
            $answer->option = $request->input('question-' . $x . '-option-1');
            if($request->input('question-' . $x . '-correct') == 1){
                $answer->correct = 1;
            } else {
                $answer->correct = 0;
            }
            $answer->save();

            $answer = new Answer();
            $answer->question_id = $question->id;
            $answer->option = $request->input('question-' . $x . '-option-2');
            if($request->input('question-' . $x . '-correct') == 2){
                $answer->correct = 1;
            } else {
                $answer->correct = 0;
            }
            $answer->save();

            $answer = new Answer();
            $answer->question_id = $question->id;
            $answer->option = $request->input('question-' . $x . '-option-3');
            if($request->input('question-' . $x . '-correct') == 3){
                $answer->correct = 1;
            } else {
                $answer->correct = 0;
            }
            $answer->save();

        }
        Session::flash('success_message','Course was successfully created.');
        return redirect('/dashboard-teacher');

    }

    // Ivana & Martin
    public function open_course($id)
    {

        // Ivana
        $course = Course::find($id);

        // Martin
        $questionnaire = array();
        $questions = Question::where('course_id', $course->id)->get();

        foreach ($questions as $question) {
            $current = array();
            $current['id'] = $question->id;
            $current['question'] = $question->question;
            $current['answers'] = [];
            $answers = Answer::where("question_id", $question->id)->get();
            foreach ($answers as $answer){
                array_push($current['answers'], $answer->option);
                if($answer->correct == 1) {
                    $current['correct'] = $answer->option;
                }
            }
            array_push($questionnaire, $current);
        }

        return view('course')
            ->withCourse($course) // Ivana
            ->withQuestionnaire(json_encode($questionnaire)); // Martin

    }

    // Martin
    public function delete_course($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();
        Session::flash('success_message','Course was successfully deleted.');
        return redirect('/dashboard-teacher');
    }

    // Ivana
    public function edit_course($id)
    {
        $course = Course::findOrFail($id);
        return view('edit_course')->with('course', $course);
    }

    // Ivana
    public function update_course(Request $request, $id)
    {
        $course = Course::findOrFail($id);
        $course->name = $request->name;
        $course->description = $request->description;
        $course->video = $request->video;
        $course->user_id = Auth::user()->id;
        $course->category = $request->category;
        $course->length = $request->length;
        $course->save();

        Session::flash('success_message','Course was successfully edited.');
        return redirect('/dashboard-teacher');

    }


}
