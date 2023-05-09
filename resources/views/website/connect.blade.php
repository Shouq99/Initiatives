@extends('website.layouts.layouts')


@section('content')
<div class="container">
    <div class="form">
        <div class="contact-info">
            <h3 class="title">تواصل معنا</h3>
            <p class="text"> </p>
            <div class="info">
                <div class="social-information"> <i class="fa fa-map-marker"></i>
                    <p></p>
                </div>
                <div class="social-information"> <i class="fa fa-envelope-o"></i>
                  
                <div class="social-icons"> 

               <i class="bi bi-envelope-at pe-3"></i>
                </div>


               <a href="mailto:admin@panorama-q.com">admin@panorama-q.com</a>
                           </div>
                
                <div class="social-information"> 
              
                <i class="fa fa-mobile-phone "></i>

                <div class="social-icons"> 
                <i class="bi bi-telephone-outbound pe-3"></i>
                </div>
                <a href="+966554498558">966554498558+</a>              
              </div>


              <div class="social-information"> <i class="fa fa-envelope-o"></i>
                  
                  <div class="social-icons"> 
  

                  <i class="bi bi-geo-alt-fill pe-3"></i>
                  </div>
                 <a href="https://maps.app.goo.gl/NFggRqYLZayqpC949?g_st=ic">ادارة تعليم البنات؛ حى المنتزة طريق الملك فهد - غرب؛ بريدة</a>
                             </div>
                




                
            </div>
            <div class="social-media">
                <p> التواصل الاجتماعي</p>
                <div class="social-icons"> 
                <a href="https://m.facebook.com/palqassim">
                    <i class="bi bi-facebook" style="font-size:24px;"></i> </a> <a href="https://www.instagram.com/panorama.alqassim.e/">
                     <i class="bi bi-instagram" style="font-size:24px;"></i> </a> <a href="https://sa.linkedin.com/company/panoramaq">
                     <i class="bi bi-linkedin" style="font-size:24px;"></i> </a> <a href="https://twitter.com/panorama_q?lang=ar">

                     <i class="bi bi-twitter"style="font-size:24px;"></i> </a> 
                    
                     </div>
                     
            </div>
        </div>
        <div class="contact-info-form"> <span class="circle one"></span> <span class="circle two"></span>
            <form action="#" onclick="return false;" autocomplete="off">
            <h3 class="title">تواصل معنا</h3>
                <div class="social-input-containers"> <input type="text" name="name" class="input" placeholder="الاسم" /> </div>
                <div class="social-input-containers"> <input type="email" name="email" class="input" placeholder="الايميل" />  </div>
                <div class="social-input-containers"> <input type="tel" name="phone" class="input" placeholder="رقم الجوال" />  </div>
                <div class="social-input-containers textarea"> <textarea name="message" class="input" placeholder="محتوى الرساله"></textarea> </div> <input type="submit" value="ارسال" class="btn" />
            </form>
        </div>
    </div>
</div>
@stop