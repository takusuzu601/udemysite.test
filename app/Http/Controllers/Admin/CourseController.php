<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ApprovedCourse;
use App\Mail\RejectCourse;

class CourseController extends Controller
{
    public function index(){

        $courses=Course::where('status',2)->paginate();

       return view('admin.courses.index',compact('courses'));
    }

    public function show(Course $course){

        $this->authorize('revision',$course);

        return view('admin.courses.show',compact('course'));
    }

    public function approved(Course $course){

        $this->authorize('revision',$course);

        if(!$course->lessons || !$course->goals || !$course->requirements || !$course->image){
            return back()->with('info','完成していないコースを掲載することはできません。');
        }
        $course->status=3;
        $course->save();

        //メールを送信
        $mail=new ApprovedCourse($course);

        Mail::to($course->teacher->email)->queue($mail);

        return redirect()->route('admin.courses.index')->with('info','コースの公開に成功しました');

    }

    public function observation(Course $course){
        return view('admin.courses.observation',compact('course'));
    }

    public function reject(Request $request,Course $course){

        $request->validate([
            'body'=>'required'
        ]);
         $course->observation()->create($request->all());
         $course->status=1;
         $course->save();

                 //メールを送信
        $mail=new RejectCourse($course);

        Mail::to($course->teacher->email)->queue($mail);

        return redirect()->route('admin.courses.index')->with('info','コース府掲載拒否されました');


    }
}
