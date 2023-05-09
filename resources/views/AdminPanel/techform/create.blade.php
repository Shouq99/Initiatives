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
                    <h4>
                        <a href="{{ url('tech_supportform') }}" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('add-tech_supportform') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="">الاسم</label>
                            <input type="text" name="name" class="form-control">
                        </div>
             
                        <div class="form-group mb-3">
                            <label for=""> الميزانية</label>
                            <input type="text" name="budget" class="form-control" accept="image/*">
                        </div>

                        <div class="form-group mb-3">
                            <label for=""> رقم الجوال</label>
                            <input type="tel" name="number" class="form-control" accept="image/*">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">الايميل</label>
                            <input type="email" name="email" class="form-control" accept="image/*">
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="">  الطلب  </label>
                            <input type="text" name="requests" class="form-control">
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
@stop