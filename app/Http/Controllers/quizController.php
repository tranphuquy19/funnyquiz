<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Quiz;
use App\Tags;

class quizController extends Controller
{
	private $tableQuiz, $count, $stringAlert, $id;
	function __construct (){
		$this->tableQuiz = quizController::getArrayToView();
		$this->count = quizController::getCount();
		$this->stringAlert = 'Hiện tại có '.$this->count.' bài trắc nghiệm!';
	}
	public function showMenuQuiz(Request $request){
		$this->id = $request->input('id');
		if(isset($this->id)) quizController::showQuizid();
		else{
			$title = 'Quiz';
			$tableQuiz = $this->tableQuiz;
			$stringAlert = $this->stringAlert;
			return view('layouts.grid', compact('tableQuiz', 'title', 'stringAlert'));
		}
		
	}
	public function showQuizid(){
		return view('layouts.quiz');
	}
	
	public function showQuiz(){
		$title = 'Home';
		$tableQuiz = $this->tableQuiz;
		return view('layouts.grid', compact('tableQuiz', 'title'));
	}

	public static function getCount(){
		return $count = Quiz::all()->count();
	}
	public static function getArrayToView(){
		$tableQuizDB = Quiz::join('tags', 'quiz.id_tag', '=', 'tags.id')->select('quiz.*', 'tags.title as tag_title')->getQuery()->get();
		$tableQuiz = array();
		 foreach($tableQuizDB as $quiz){
			 $dataImage = getimagesize('images/'.$quiz->image);
			 $heightImage = $dataImage[1];
			 array_push($tableQuiz, array('id'=>$quiz->id,
										'title'=>$quiz->title,
										'tag'=>$quiz->tag_title,
										'description'=>$quiz->description,
										'heightImage' =>$heightImage,
										'image'=>$quiz->image
									));
		 }
		 return $tableQuiz;
	}
}
