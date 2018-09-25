<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Quiz;
use App\Tags;

class quizController extends Controller
{
	private $tableQuiz, $count, $stringAlert;
	function __construct (){
		$this->tableQuiz = quizController::getArrayToView();
		$this->count = quizController::getCount();
		$this->stringAlert = 'Hiện tại có '.$this->count.' bài trắc nghiệm!';
	}
	public function showQuizid(Request $idQuiz){
		
	}
	public function showMenuQuiz(){
		$title = 'Quiz';
		$tableQuiz = $this->tableQuiz;
		$stringAlert = $this->stringAlert;
		return view('layouts.quiz', compact('tableQuiz', 'title', 'stringAlert'));
	}
	
	public function showQuiz(){
		$title = 'Home';
		$tableQuiz = $this->tableQuiz;
		return view('layouts.quiz', compact('tableQuiz', 'title'));
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
