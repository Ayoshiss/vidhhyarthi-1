@extends('master.master')
@section('title')
Register Page
@endsection
@section('container')

<div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <form class="login100-form validate-form" action="{{ route('userregister') }}" method="post">
  {{ csrf_field() }}

          <span class="login100-form-title p-b-43">
            Register to continue
          </span>
          
          
          <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <input class="input100" type="text" name="email">
            <span class="focus-input100"></span>
            <span class="label-input100">Email</span>
          </div>
          
          
          <div class="wrap-input100 validate-input" data-validate="Password is required">
            <input class="input100" type="password" name="password">
            <span class="focus-input100"></span>
            <span class="label-input100">Password</span>
          </div>

           <div class="wrap-input100 validate-input" data-validate="Password is required">
            <input class="input100" type="password" name="password2">
            <span class="focus-input100"></span>
            <span class="label-input100">Password Confirmation</span>
          </div>
          <br>
          <div class="flex-sb-m w-full p-t-3 p-b-32">
          <div class="form-group">

          <label>Who are you?</label><br>
          <input type="radio" value="1" name="isstudent"> A Student
          <input type="radio" value="0" name="isstudent"> A Company


        </div>


          </div>


      

          <div class="container-login100-form-btn">
            <button class="login100-form-btn" type="submit">
              Register
            </button>
          </div>
          
          <div class="text-center p-t-46 p-b-20">
            <span class="txt2">
              or sign up using
            </span>
          </div>

          <div class="login100-form-social flex-c-m">
            <a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
              <i class="fa fa-facebook-f" aria-hidden="true"></i>
            </a>

            <a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
          </div>
        </form>

        <div class="login100-more" style="background-image: url('images/bg-02.jpg');">
        </div>
      </div>
    </div>
  </div>

  



   @if(count($errors)>0)
  <div class="alert alert-danger">
    @foreach($errors->all() as $er)
   {{$er}}
    @endforeach
  </div>
  @endif
</div>
@endsection
