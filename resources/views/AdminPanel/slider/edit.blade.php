@extends('layouts.layouts')
    
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
    
                @if (session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif
    
                <div class="card">
                    <div class="card-header">
                        <h4>تعديل السلايدر
                            <a href="{{ url('slider') }}" class="btn btn-danger float-end">رجوع</a>
                        </h4>
                    </div>
                    <div class="card-body">
    
                        <form action="{{ url('update-slider/'.$slider->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
    
                            <div class="form-group mb-3">
                                <label for="">عنوان</label>
                                <input type="text" name="heading" value="{{$slider->heading}}" class="form-control">
                            </div>
                            
                            <div class="form-group mb-3">
                                <label for="">التفاصيل</label>
                                <input type="text" name="description" value="{{$slider->description}}" class="form-control">
                            </div>


                            <div class="form-group mb-3">
                                <label for="">الرابط</label>
                                <input type="text" name="link" value="{{$slider->link}}" class="form-control">
                            </div>

                  

                            <div class="form-group mb-3">
                                <label for="">مسمى الرابط</label>
                                <input type="text" name="link_name" value="{{$slider->link_name}}" class="form-control">
                            </div>
                          
                            <label for=""> الصور</label>

                                <input type="file" name="image" class="form-control" accept="image/*">
                                <img src="{{ asset('uploads/slider_image/'.$slider->image) }}" width="70px" height="70px" alt="Image">
                            </div>

                            <div class="form-group">
                                <label for=""> الحالة </label>
                                <input type="checkbox" name="statuss" value="{{$slider->statuss == '1' ? 'checked':''}}"> 0=visible, 1=hidden
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">حفظ التعديلات</button>
                            </div>
    
                        </form>
    
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection