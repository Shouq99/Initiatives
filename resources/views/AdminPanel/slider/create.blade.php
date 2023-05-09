@extends('layouts.layouts')
    
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>إضافة سلايدر جديد
                        <a href="{{ url('slider') }}" class="btn btn-danger float-end">رجوع</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('add-slider') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="">العنوان</label>
                            <input type="text" name="heading" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">التفاصيل</label>
                            <textarea name="description" class="form-control"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">الرابط</label>
                            <input type="text" name="link" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">مسمى الرابط</label>
                            <input type="text" name="link_name" class="form-control">
                        </div>
             
                        <div class="form-group mb-3">
                            <label for="">صورةالسلايدر </label>
                            <input type="file" name="image" class="form-control" accept="image/*">
                        </div>
                        <div class="form-group">
                            <label for="">اخفاء الصورة </label>
                            <input type="checkbox" name="statuss"> 0=visible, 1=hidden
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">اضف </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection