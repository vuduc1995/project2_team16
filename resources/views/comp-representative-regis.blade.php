<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset= "utf-8">
    <title>Company Representative Registration</title>

    <link rel ="stylesheet" type="text/css" href ="{{ URL::asset('css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('data/comp.representative-regis/css/styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

</head>

<body>

<header id="header">

  <div class="header-main">
    <div class="header-main-content">
      <div class="container-fluid">
        <div class="container row">
          <div class="col-sm-2">
            <div id="logo"><img src="{{ URL::asset('images/logo60nambk.png') }}" width="165" height="77" alt="Klass">
            </div>
            
            
          </div>

          <div class="breadcrum col-sm-8">
              <p>hanoi university of science and technology</p>
              <h1>school of international education</h1>  
          </div>
            
              
            <div class="clearfix"></div>
        </div>
             
      </div>
    </div>
  </div>

    <div class="header-main-menubar">
  

      <nav class="navbar navbar-default">
        <div class="container-fluid">
  
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> HOME<span class="sr-only">(current)</span></a></li>
        
        <li class="dropdown" id="formcv">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Form <span class="caret"></span></a>
          <ul class="dropdown-menu">
             <li><a href="#">Registration</a></li>
             </ul>
        </li>

        <script>
          $('#formcv a').click.dropdown();
        </script>

        <li class="intern dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Intern <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Topic list</a></li>
          </ul>
        </li>
      </ul>
      
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
  
    </div>

  </div>
  
</header>
<!--E.O.Header--><!--Custom theme header-->

<!--E.O.Slider-->    
    
    
    
</div>
<!--Custom theme slider-->
<div class="form-register">
  <div class="container-fluid">
      
        <h2>Application for internship </h2>
<div class="fillin">
            <form class="form-horizontal">
               <div class="form-group">
               <label for="noi-dung" class="col-sm-2 control-label">1. General Information</label>
              </div>


          
              <div class="form-group">
                <label for="company-name" class="col-sm-2 control-label">Company name</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="company-name" placeholder="Company name">
                </div>
          </div>

              <div class="form-group">
              </div>

              <div class="form-group">
                <label for="address" class="col-sm-2 control-label">Address</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="address" placeholder="Address">
                </div>
              </div>

              <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Company instructor's name</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="name" placeholder="Name">
                </div>

             <div class="form-group">
             </div>

                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="email" placeholder="Email">
                </div>

                 <label for="phone" class="col-sm-2 control-label">Phone</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control" id="phone" placeholder="Phone number">
                </div>
              </div>

              
              <div class="form-group">
               <label for="so-luong" class="col-sm-2 control-label">2. Number of students can receive:</label>
               <div class="col-sm-4">
                  <input type="text" class="form-control" id="so-luong" placeholder="Number of students">
                </div>
             </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-2 control-label">3. Content and requirements</label>
                

                <div class="col-sm-4">
                  <input type="text" class="form-control" id="topic1" placeholder="Speciality ">
                </div>
                
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="topic2" placeholder="Requirement">
                </div>
              </div>

             
             
              

                 

                <div class="form-group">
                  <div class="text-center">
                    <button type="submit" class="btn btn-default">Submit</button>
                  </div>
                </div>
              </form>

     
      </div> 
      <!-- end-of-fillin -->

      
    </div>
</div>
<!-- end-of-form-register -->

<footer id="footer">    
  <div class="footer-main">
    <div class="container-fluid">
      <div class="row-fluid">

          <div class="infoarea">
            <div class="footer-logo">
              <a href="hust">
                <img src="{{ URL::asset('images/logo.png') }}" width="89" height="56" alt="footer-logo">
              </a>
            </div>
        
            <div class="info">
              <p> Add: Room 201, D7 Building, HUST | No.1, Dai Co Viet Street, Hanoi, Vietnam.</p>
              <p> Email: sievn@hust.edu.vn</p>
              <p> Copyright© <b>School of International Education | HUST</b></p>
            </div>


        
      </div>
    </div>
  </div>
</footer>
<!--E.O.Footer-->

</body>
