@extends('website.layouts.layouts')


@section('content')
<div class="container my-5 py-5 text-dark">
    <div class="row d-flex justify-content-center">
      <div class="col-md-10 col-lg-8 col-xl-6">
        <div class="card">
          <div class="card-body p-4">
            <div class="d-flex flex-start w-100">

            <div class="col-lg-4 d-flex justify-content">
     <img src="assets/img/img.png"
          class="rounded-circle-left shadow-1 mb-4 mb-lg-0"  width="65"
          height="60" />
      </div>
              <!-- <img class="rounded-circle shadow-1-strong me-3"
                src="" alt="avatar"
                 width="100"
                height="50" /> -->
              <div class="w-100">
                <h5>شاركنا رايك</h5>
              
                <div class="rating"> <input type="radio"
                 name="rating" value="5" id="5"><label for="5">☆</label>
                  <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
                   <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label> 
                   <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label> 
                   <input type="radio"
                   name="rating" value="1" id="1"><label for="1">☆</label>
                </div>


                <div class="buttons px-4 mt-0">

        
                
            </div>
                <div class="form-outline">
                  <textarea class="form-control" id="textAreaExample" rows="4"></textarea>
                  <label class="form-label" for="textAreaExample"></label>
                </div>
                <div class="d-flex justify-content-between mt-3">
        
                  <button type="button" class="btn" style="color: #fac68a;">
                    Send <i class="fas fa-long-arrow-alt-right ms-1"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  @stop