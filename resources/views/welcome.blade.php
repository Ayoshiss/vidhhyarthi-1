@extends('master.master')
@section('title')
VIDHHYARTHI PORTFOLIO
@endsection

@section('container')
<style>
 html,body{
   height: 100%;
 }
 body{
   margin: 0!important;
   padding: 0!important;
   width: 100%;

 }
 .container-fluid{
   text-align: center;
   vertical-align: middle;
 }
 .container-fluid img{
   max-width: 100%;
 }
 .content{
   text-align: center;
 }

 .centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-weight: 700;
    font-size: 50px;
    color: #212529;
}
.tagline h5{
   position: absolute;
   top: 50%;
   left: 50%;
   transform: translate(-50%, 100%);
   font-weight: 700;
   font-size: 28px;
   color: #212529;
}
.container-fluid .btn {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-100%, 200%);
  -ms-transform: translate(-50%, -50%);
  background-color: #1d809f;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
}
.container-fluid .btn2 {
  transform: translate(40%, 200%);
  -ms-transform: translate(-50%, -50%);
}
.container-fluid .btn:hover {
  background-color: #212529;
}
 </style>
<div class="container-fluid">
  <div class="content">
  <div class="col-lg-12" "col-md-12">
    <img src="img/bg-masthead.jpg" width="100%" height="768px">
    <div class = "centered">VIDHHYARTHI PORTFOLIO</div>
    <a href="{{route('signup')}}"><button class="btn">Register</button></a>
    <a href="{{route('getloginpage')}}"><button class="btn btn2">Login</button><a>
  </div>
    <div>
</div>

@endsection
