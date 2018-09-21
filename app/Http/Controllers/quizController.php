<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Quiz;
use App\Tags;

class quizController extends Controller
{
	public function showQuizid(Request $idQuiz){
		
	}
	public function showMenuQuiz(){

	}
	public function showQuiz(){
		$title = 'Home';
		$tableQuiz = quizController::getArrayToView();
		return view('layouts.quiz', compact('tableQuiz', 'title'));
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
