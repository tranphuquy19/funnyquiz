@extends('master')
@section('title', 'Funny Quiz')
@section('quiz')
@foreach($tableQuiz as $quiz)
@if($loop->first)
<li onclick="location.href='quiz?quiz={{$quiz['idQuiz']}}';">
  <img src="images/{{$quiz['idImageQuiz']}}" width="282" height="{{$quiz['heightImage']}}">
  <div class="post-info">
    <div class="post-basic-info">
      <h3><a href="quiz?quiz={{$quiz['idQuiz']}}">{{$quiz['titleQuiz']}}</a></h3>
      <span><a href="?tag={{$quiz['tagQuiz']}}"><label> </label>{{$quiz['tagQuiz']}}</a></span>
      <p>{{$quiz['description']}}</p>
    </div>
    <div class="post-info-rate-share">
      <div class="rateit">
        <span> </span>
      </div>
      <div class="post-share">
        <span> </span>
      </div>
      <div class="clear"> </div>
    </div>
  </div>
</li>
@else
<li onclick="location.href='quiz?quiz={{$quiz['idQuiz']}}';">
  <img src="images/{{$quiz['idImageQuiz']}}" width="282" height="{{$quiz['heightImage']}}">
  <div class="post-info">
    <div class="post-basic-info">
      <h3><a href="quiz?quiz={{$quiz['idQuiz']}}">{{$quiz['titleQuiz']}}</a></h3>
      <span><a href="?tag={{$quiz['tagQuiz']}}"><label> </label>{{$quiz['tagQuiz']}}</a></span>
      <p>{{$quiz['description']}}</p>
    </div>
    <div class="post-info-rate-share">
      <div class="rateit">
        <span> </span>
      </div>
      <div class="post-share">
        <span> </span>
      </div>
      <div class="clear"> </div>
    </div>
  </div>
</li>
@endif
@endforeach
@endsection