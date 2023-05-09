<nav class="navbar navbar-expand-xl">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="img\Logo.png" width="100px" height="auto"></a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mx-auto text-center">
            
          <li class="nav-item">
            <a href="{{url('/') }}"class="nav-item nav-link">الرئيسية</a>
          </li>

          <li class="nav-item">
            <a href="{{url('Posts') }}" class="nav-item nav-link">المنشورات</a>			
          </li>
         
        
          <li class="nav-item">
            <a href="{{url('Advertisements') }}" class="nav-item nav-link">الأعلانات</a>			
          </li>

          <li class="nav-item">
            <a href="/Advertisements" class="nav-item nav-link "> ورش العمل /المساحات</a>

          </li>
          <li class="nav-item">
            <a onclick="location.href = href=''" class="nav-item nav-link">التواصل</a>
          </li>
    
         
        </ul>
      </div>
   
    </div>
  </nav>