<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class quizController extends Controller
{
	public function showQuizid(Request $idQuiz){
		
	}
	public function showMenuQuiz(){

	}
	public function showQuiz(){
		$title = 'ahaha';
		$tableQuiz = array(['idQuiz'=>'1', 'idImageQuiz' => 'img1.jpg', 'heightImage'=> '118', 'titleQuiz' => 'Kiểm tra định kỳ', 'tagQuiz' => 'math', 'description' => 'Mô tả về kiểm tra định kỳ môn toán cao cấp'], ['idQuiz'=>'1', 'idImageQuiz' => 'img1.jpg', 'heightImage'=> '118', 'titleQuiz' => 'Kiểm tra định kỳ', 'tagQuiz' => 'math', 'description' => 'Mô tả về kiểm tra định kỳ môn toán cao cấp'],['idQuiz'=>'1', 'idImageQuiz' => 'img1.jpg', 'heightImage'=> '118', 'titleQuiz' => 'Kiểm tra định kỳ', 'tagQuiz' => 'math', 'description' => 'Mô tả về kiểm tra định kỳ môn toán cao cấp'], ['idQuiz'=>'1', 'idImageQuiz' => 'img1.jpg', 'heightImage'=> '118', 'titleQuiz' => 'Kiểm tra định kỳ', 'tagQuiz' => 'math', 'description' => 'Mô tả về kiểm tra định kỳ môn toán cao cấp'],['idQuiz'=>'1', 'idImageQuiz' => 'img1.jpg', 'heightImage'=> '118', 'titleQuiz' => 'Kiểm tra định kỳ', 'tagQuiz' => 'math', 'description' => 'Mô tả về kiểm tra định kỳ môn toán cao cấp'], ['idQuiz'=>'1', 'idImageQuiz' => 'img1.jpg', 'heightImage'=> '118', 'titleQuiz' => 'Kiểm tra định kỳ', 'tagQuiz' => 'math', 'description' => 'Mô tả về kiểm tra định kỳ môn toán cao cấp']);
		return view('layouts.quiz', compact('tableQuiz', 'title'));
	}
}
