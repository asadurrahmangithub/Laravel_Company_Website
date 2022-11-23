<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\QuestionTitle;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index(){
        return view("admin.question.add-question-title");
    }
    public function question(){
        return view("admin.question.add-question");
    }
    public function saveQuestionTitle(Request $request){
        $question_title = new QuestionTitle();
        $question_title->question_title = $request->question_title;
        $question_title->publication_status = $request->publication_status;
        $question_title->save();
        return redirect()->route('question-title')->with('message','Question Title Added Successfully!');
    }
    public function manageQuestionTitle(){
        return view('admin.question.manage-question-title',[
            'question_titles' =>QuestionTitle::all(),
        ]);
    }
    public function editQuestionTitle($id){
        return view('admin.question.edit-question-title',[
            'question_title' =>QuestionTitle::find($id),
        ]);
    }
    public function updateQuestionTitle(Request $request){
        $question_title = QuestionTitle::find($request->id);
        $question_title->question_title = $request->question_title;
        $question_title->publication_status = $request->publication_status;
        $question_title->save();
        return redirect()->route('manage-question-title')->with('message','Update Question Title Added Successfully!');
    }
    public function deleteQuestionTitle($id){
        $question_title = QuestionTitle::find($id);
        $question_title->delete();
        return redirect()->route('manage-question-title')->with('message','Delete Question Title Successfully!');
    }
    public function titleStatus($id){
        $question_title = QuestionTitle::find($id);
        if ($question_title->publication_status==1){
            $question_title->publication_status=2;
            $question_title->save();
            return redirect()->route('manage-question-title')->with('message','Publication Status UnPublic Update Successfully!');
        }
        else{
            $question_title->publication_status=1;
            $question_title->save();
            return redirect()->route('manage-question-title')->with('message','Publication Status Public Update Successfully!');
        }
    }

    //******************** Question Add ****************************

    public function saveQuestion(Request $request){
        $question = new Question();
        $question->question = $request->question;
        $question->question_ans = $request->question_ans;
        $question->publication_status = $request->publication_status;
        $question->save();
        return redirect()->route('question')->with('message','Question Added Successfully!');
    }
    public function manageQuestion(){
        return view('admin.question.manage-question',[
            'questions' =>Question::all(),
        ]);
    }
    public function editQuestion($id){
        return view('admin.question.edit-question',[
            'question' =>Question::find($id),
        ]);
    }
    public function updateQuestion(Request $request){
        $question = Question::find($request->id);
        $question->question = $request->question;
        $question->question_ans = $request->question_ans;
        $question->publication_status = $request->publication_status;
        $question->save();
        return redirect()->route('manage-question')->with('message','Update Question Added Successfully!');
    }
    public function deleteQuestion($id){
        $question = Question::find($id);
        $question->delete();
        return redirect()->route('manage-question')->with('message','Delete Question Successfully!');
    }
    public function questionStatus($id){
        $question = Question::find($id);
        if ($question->publication_status==1){
            $question->publication_status=2;
            $question->save();
            return redirect()->route('manage-question')->with('message','Publication Status UnPublic Update Successfully!');
        }
        else{
            $question->publication_status=1;
            $question->save();
            return redirect()->route('manage-question')->with('message','Publication Status Public Update Successfully!');
        }
    }
}
