@extends('layouts.layouts')
    
@section('content')
    
<div class="container" dir="rtl">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4> عرض طلبات التصميم
                    </h4>
                    <a href="{{ url('add-designForm') }}" class="btn btn-primary float-end">أضف جديد</a>

                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>الاسم</th>
                                <th> عنوان الطلب </th>
                                <th>الميزانية</th>
                                <th>عرض كامل الطلب</th>
                                <th>حالة الطلب</th>
                                <th>حذف  </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($design as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->subjects }}</td>
                                <td>{{ $item->budget }}</td>
                                <td>
                                    <a href="{{ url('view-designForm/'.$item->id) }}" class="btn btn-primary btn-sm">عرض كل البيانات</a>
                                </td>
                           
                                <td dir="ltr">

                                  <form action="{{url('designform_status_upadated/'.$item->id)}}" method="POST">
                                    
                                    {{ csrf_field() }}
                                    <div class="input-group mb-3">
                                    <select class="form-select" aria-label="Default select example" name="status">
                                    <option value="0" {{$item->status == '0' ? 'selected':''}}>Pending </option>
                                    <option value="1" {{$item->status == '1' ? 'selected':''}}>In Process </option>
                                    <option value="2" {{$item->status == '2' ? 'selected':''}}>Completed </option>
                                    <option value="3" {{$item->status == '3' ? 'selected':''}}>Cancelled </option>
                                    
    
                                      <?php 
                                      if ($item->status == '0'){
                                        echo "selected";}?>

                                    <?php 
                                    if ($item->status == '1'){
                                      echo "selected";}?>

                                     <?php 
                                     if ($item->status == '2'){
                                       echo "selected";} ?>   

                                    <?php 
                                    if ($item->status == '3'){
                                      echo "selected";}?> 
                                </select>
                                <button type="submit"  class="btn-sm btn-outline-success">Update</button>
    
                                </div>
                                  </form>
    
                                
                                </td> 
                                <td>
                                    {{-- <a href="{{ url('delete-student/'.$item->id) }}" class="btn btn-danger btn-sm">Delete</a> --}}
                                    <form action="{{ url('delete-designForm/'.$item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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
@stop
