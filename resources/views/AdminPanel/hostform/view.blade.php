@extends('layouts.layouts')
    
@section('content')
    
    <div class="container" dir="rtl">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      
                         <a href="{{ url('hostingform') }}" class="btn btn-danger float-end">BACK</a>
                        <h4 class="sub text-center">عرض بيانات العامة للعميل </h4>
                        <hr class="hr hr-blurry w-50 mx-auto" />
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <tr>
                                        <th>ID</th>
                                        <th>الاسم</th>
                                        <th>رقم الجوال </th>
                                        <th>الايميل </th>
                                    </tr>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($host as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->number }}</td>
                                    <td>{{ $item->email }}</td>
                                
                                    <td dir="ltr">

                                        <form action="{{url('hostingform_status_upadated/'.$item->id)}}" method="POST">
                                          
                                          {{ csrf_field() }}
                                          <div class="input-group">
                                          <select class="form-select h-10" aria-label="Default select example" name="status">
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
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row" dir="rtl" >
        <div class="col-md-12 mt-5">
            <div class="card">
              

                <div class="card-body me-5" >
                    <h3 class="mt-3 text-center">تفاصيل الطلب</h3>
                    <hr class="hr hr-blurry w-50 mx-auto" />
                    <table class="table table-bordered table-striped">
                        <thead>
                                <tr>
                                    <th>الميزانية </th>
                                    <th>bandwidth</th>
                                    <th> space</th>
                                </tr>
         
                        </thead>
                        <tbody>
                            @foreach ($host as $item)
                    
                            <tr>
                                <td>{{ $item->budget }}</td>
                                <td>{{ $item->bandwidth }}</td>
                                <td>{{ $item->space }}</td>

                                                                  
                            </tr>
                           
                        </tbody>
                        <thead>
                              
                                <tr>
                                    <th colspan="3"> تفاصيل الطلب</th>

                                </tr>
                        </thead>
                        <tbody>
                    
                           
                             <tr>
                                <td colspan="3">{{ $item->requests }}</td>
                             </tr>
                        </tbody>
                    </table>

                    
                </div>
                @endforeach

            </div>
        </div>
    </div>
    </div>
@stop
