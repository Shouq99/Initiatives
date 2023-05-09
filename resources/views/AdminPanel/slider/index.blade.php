@extends('layouts.layouts')
    
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>اعمالنا
                            <a href="{{ url('add-slider') }}" class="btn btn-primary float-end">أضف عمل جديد</a>
                        </h4>
                    </div>
                    <div class="card-body">
    
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>  العنوان</th>
                                    <th>صورة العمل</th>
                                    <th> التفاصيل</th>
                                    <th>الرابط</th>
                                    <th>اسم الرابط </th>
                                    <th> الحالة </th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($slider as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->heading }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>{{ $item->link }}</td>
                                    <td>{{ $item->link_name }}</td>
                                    <td>
                                        <img src="{{ asset('uploads/slider_image/'.$item->image) }}" width="70px" height="70px" alt="Image">
                                    </td>
                                    
                                    <td> @if ($item->statuss == '1')
                                            hidden
                                        @else
                                            visible
                                        @endif
                                    </td>
                                    
                                    <td>
                                        <a href="{{ url('edit-slider/'.$item->id) }}" class="btn btn-primary btn-sm">تعديل</a>
                                    </td>
                                    <td>
                                        {{-- <a href="{{ url('delete-student/'.$item->id) }}" class="btn btn-danger btn-sm">Delete</a> --}}
                                        <form action="{{ url('delete-slider/'.$item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">حذف</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
    
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection



