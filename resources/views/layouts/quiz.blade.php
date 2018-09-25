<!--Layout Quiz hiển thị ngay trong trang chủ-->
@extends('master')
@section('title', "Funny Quiz-".$title)
@section('info')
@if(isset($stringAlert))
  <div class= "alert alert-info">
  <strong>{{$stringAlert}}</strong>
  </div>
@endif
@endsection
@section('quiz')
@foreach($tableQuiz as $quiz)
@if($loop->first) <!--Thẻ list fist & end cần phải giống nhau!-->
<li onclick="location.href='quiz?quiz={{$quiz['id']}}';">
  <img src="images/{{$quiz['image']}}" width="282" height="{{$quiz['heightImage']}}">
  <div class="post-info">
    <div class="post-basic-info">
      <h3><a href="quiz?quiz={{$quiz['id']}}">{{$quiz['title']}}</a></h3>
      <span><a href="tag?tag={{$quiz['tag']}}"><label> </label>{{$quiz['tag']}}</a></span>
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
<li onclick="location.href='quiz?quiz={{$quiz['id']}}';">
  <img src="images/{{$quiz['image']}}" width="282" height="{{$quiz['heightImage']}}">
  <div class="post-info">
    <div class="post-basic-info">
      <h3><a href="quiz?quiz={{$quiz['id']}}">{{$quiz['title']}}</a></h3>
      <span><a href="?tag={{$quiz['tag']}}"><label> </label>{{$quiz['tag']}}</a></span>
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