@extends('layouts.user_type.guest')

@section('content')
<main class="main-content  mt-0" dir="rtl">
  <section class="pageDirection">
    <div class="page-header min-vh-75">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
            <div class="card card-plain mt-8">
              <div class="card-header pb-0 text-left bg-transparent" >
                <h3 class="font-weight-bolder text-primarycolor text-gradient"  style="  text-align: center;">أهلا بك</h3>
                <p class="mb-0 me-4 ">إنشاء حساب جديد<br></p>
                <p class="mb-0 me-4">او سجل دخول عن طريق البيانات التالية:</p>
                <p class="mb-0 me-4">الإيميل <b>admin@softui.com</b></p>
                <p class="mb-0 me-4">الرقم السري <b>secret</b></p>
              
              <div class="card-body">
                <form role="form" method="POST" action="/session">
                  @csrf
                  <label class="form_txt">إيميلك</label>
                  <div class="mb-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="admin@softui.com" aria-label="Email" aria-describedby="email-addon">
                    @error('email')
                      <p class="text-danger text-xs mt-2">{{ $message }}</p>
                    @enderror
                  </div>
                  <label class="form_txt1">الرقم السري</label>
                  <div class="mb-3">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="secret" aria-label="Password" aria-describedby="password-addon">
                    @error('password')
                      <p class="text-danger text-xs mt-2">{{ $message }}</p>
                    @enderror
                  </div>
                  <div class="form-check form-switch" dir="rtl">
                    <input class="form-check-input "dir="rtl" type="checkbox" id="rememberMe" checked="">
                    <label class="form-check-label" for="rememberMe">تذكرني </label>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-gradient w-100 mt-4 mb-0 btn-txt">تسجيل </button>
                  </div>
                </form>
              </div>
              </div>
              <div class="card-footer text-center pt-0 px-lg-2 px-1">
              <small class="text-muted">تسيت كلمة المرور؟ تغير كلمة المرور 
                <a href="password" class="text-primarycolor text-gradient font-weight-bold">هنا</a>
              </small>
                <p class="mb-4 text-sm mx-auto">
                  ليس لديك حساب؟
                  <a href="register" class="text-primarycolor text-gradient font-weight-bold">إنشاء حساب جديد</a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 mt-8">
              <img class="img_signinpage" src='../assets/img/pass.svg'>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

 

@endsection
