<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset= "utf-8">
    <title>Company Instructor Mark</title>

    <link rel ="stylesheet" type="text/css" href ="{{ URL::asset('css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('data/comp.instructor-mark/css/styles.css') }}">
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

        <li class="intern dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Intern <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Submit outline</a></li>
            <li><a href="#">Mark's form</a></li>
            <li><a href="#">Rate</a></li>
            <li><a href="#">Timesheet</a></li>
          </ul>
        </li>
        
        <li><a href="#">Chat</a></li>
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
      
        <h2>final assessment</h2>
<div class="fillin">
            <form class="form-horizontal">
               <div class="form-group">
               <label for="companyname" class="col-sm-2 control-label" >Company Name</label>
              <div class="col-sm-4">
                  <input class="form-control" id="name" placeholder="Company Name">
                </div>
                </div>

                <div class="form-group">
                <label for="instructor" class="col-sm-2 control-label">Company instructor</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control" id="instructor" placeholder="Name ">
                </div>
                <label for="ins-phonenumber" class="col-sm-1 control-label">Phone</label>
                <div class="col-sm-2">
                  <input type="text" class="form-control" id="ins-phonenumber" placeholder="Phone number">
                </div>
                <label for="ins-email" class="col-sm-1 control-label">Email</label>
                <div class="col-sm-2">
                  <input type="email" class="form-control" id="ins-email" placeholder="Email ">
                </div>
              </div>

              <div class="form-group">
                <label for="instructor" class="col-sm-2 control-label">Student</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control" id="instructor" placeholder="Name ">
                </div>
                <label for="ins-phonenumber" class="col-sm-1 control-label">ID</label>
                <div class="col-sm-2">
                  <input type="text" class="form-control" id="student-id" placeholder="Student's ID">
                </div>
                <label for="ins-email" class="col-sm-1 control-label">Class</label>
                <div class="col-sm-2">
                  <input type="email" class="form-control" id="class" placeholder="Class">
                </div>
              </div>

              <p class="note"> Rating on the following scale:
                 A: Excellent, B: Very Good, C: Good, D: Pass, F: Fail, X: No comments
              </p>

              <div class="form-group">
               <label for="tieu-chi" class="col-sm-4 control-label" style="font-size: 20px; font-weight: bold;">A. Criteria</label>
              </div>

              <div class="form-group">
               <label for="tieu-chi" class="col-sm-4 control-label" style="font-size: 20px; font-weight: bold; color: #B22222">The Technical Level</label>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Technical level related to internship</label>
                <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point"> 
                  <option value=“”> Point</option>
                  <option value=“q”> A</option> 
                  <option value=“b”> B</option> 
                  <option value=“c”> C</option>
                  <option value=“d”> D</option>
                  <option value=“f”> E</option>
                  <option value=“x”> F</option>
                  </select>
                  </div>
              
                 
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Ability to catch new techniques</label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point"> 
                  <option value=“”> Point</option>
                  <option value=“q”> A</option> 
                  <option value=“b”> B</option> 
                  <option value=“c”> C</option>
                  <option value=“d”> D</option>
                  <option value=“f”> E</option>
                  <option value=“x”> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Technical level after being instructed</label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point"> 
                  <option value=“”> Point</option>
                  <option value=“q”> A</option> 
                  <option value=“b”> B</option> 
                  <option value=“c”> C</option>
                  <option value=“d”> D</option>
                  <option value=“f”> E</option>
                  <option value=“x”> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Analysis capabilities</label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point"> 
                  <option value=“”> Point</option>
                  <option value=“q”> A</option> 
                  <option value=“b”> B</option> 
                  <option value=“c”> C</option>
                  <option value=“d”> D</option>
                  <option value=“f”> E</option>
                  <option value=“x”> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Methodology </label>
                <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point"> 
                  <option value=“”> Point</option>
                  <option value=“q”> A</option> 
                  <option value=“b”> B</option> 
                  <option value=“c”> C</option>
                  <option value=“d”> D</option>
                  <option value=“f”> E</option>
                  <option value=“x”> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Creativity </label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point"> 
                  <option value=“”> Point</option>
                  <option value=“q”> A</option> 
                  <option value=“b”> B</option> 
                  <option value=“c”> C</option>
                  <option value=“d”> D</option>
                  <option value=“f”> E</option>
                  <option value=“x”> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">English Level </label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point"> 
                  <option value=“”> Point</option>
                  <option value=“q”> A</option> 
                  <option value=“b”> B</option> 
                  <option value=“c”> C</option>
                  <option value=“d”> D</option>
                  <option value=“f”> E</option>
                  <option value=“x”> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment">
                </div>
              </div>

              <div class="form-group">
               <label for="tieu-chi" class="col-sm-4 control-label" style="font-size: 20px; font-weight: bold; color: #B22222">Work Has Been Finished</label>
              </div>
              
              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">The quantity of work done during the internship </label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point"> 
                  <option value=“”> Point</option>
                  <option value=“q”> A</option> 
                  <option value=“b”> B</option> 
                  <option value=“c”> C</option>
                  <option value=“d”> D</option>
                  <option value=“f”> E</option>
                  <option value=“x”> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">The quality of work done during the internship </label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point"> 
                  <option value=“”> Point</option>
                  <option value=“q”> A</option> 
                  <option value=“b”> B</option> 
                  <option value=“c”> C</option>
                  <option value=“d”> D</option>
                  <option value=“f”> E</option>
                  <option value=“x”> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Ability to self-complete work and solve problems incurred</label>
                <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point"> 
                  <option value=“”> Point</option>
                  <option value=“q”> A</option> 
                  <option value=“b”> B</option> 
                  <option value=“c”> C</option>
                  <option value=“d”> D</option>
                  <option value=“f”> E</option>
                  <option value=“x”> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Write a document about the work done </label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point"> 
                  <option value=“”> Point</option>
                  <option value=“q”> A</option> 
                  <option value=“b”> B</option> 
                  <option value=“c”> C</option>
                  <option value=“d”> D</option>
                  <option value=“f”> E</option>
                  <option value=“x”> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Presentation </label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point"> 
                  <option value=“”> Point</option>
                  <option value=“q”> A</option> 
                  <option value=“b”> B</option> 
                  <option value=“c”> C</option>
                  <option value=“d”> D</option>
                  <option value=“f”> E</option>
                  <option value=“x”> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Abide by the rules of company</label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point"> 
                  <option value=“”> Point</option>
                  <option value=“q”> A</option> 
                  <option value=“b”> B</option> 
                  <option value=“c”> C</option>
                  <option value=“d”> D</option>
                  <option value=“f”> E</option>
                  <option value=“x”> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment">
                </div>
              </div>

              <div class="form-group">
               <label for="tieu-chi" class="col-sm-4 control-label" style="font-size: 20px; font-weight: bold; color: #B22222">Attitude</label>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">On time</label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point"> 
                  <option value=“”> Point</option>
                  <option value=“q”> A</option> 
                  <option value=“b”> B</option> 
                  <option value=“c”> C</option>
                  <option value=“d”> D</option>
                  <option value=“f”> E</option>
                  <option value=“x”> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Appearance </label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point"> 
                  <option value=“”> Point</option>
                  <option value=“q”> A</option> 
                  <option value=“b”> B</option> 
                  <option value=“c”> C</option>
                  <option value=“d”> D</option>
                  <option value=“f”> E</option>
                  <option value=“x”> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Attitude at companny </label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point"> 
                  <option value=“”> Point</option>
                  <option value=“q”> A</option> 
                  <option value=“b”> B</option> 
                  <option value=“c”> C</option>
                  <option value=“d”> D</option>
                  <option value=“f”> E</option>
                  <option value=“x”> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Teamwork </label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point"> 
                  <option value=“”> Point</option>
                  <option value=“q”> A</option> 
                  <option value=“b”> B</option> 
                  <option value=“c”> C</option>
                  <option value=“d”> D</option>
                  <option value=“f”> E</option>
                  <option value=“x”> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Communication with employees, clients at company  </label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point"> 
                  <option value=“”> Point</option>
                  <option value=“q”> A</option> 
                  <option value=“b”> B</option> 
                  <option value=“c”> C</option>
                  <option value=“d”> D</option>
                  <option value=“f”> E</option>
                  <option value=“x”> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment">
                </div>
              </div>

              <div class="form-group">
               <label for="tieu-chi" class="col-sm-4 control-label" style="font-size: 20px; font-weight: bold; color: #B22222">Improvement</label>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Improved capacity, technical level </label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point"> 
                  <option value=“”> Point</option>
                  <option value=“q”> A</option> 
                  <option value=“b”> B</option> 
                  <option value=“c”> C</option>
                  <option value=“d”> D</option>
                  <option value=“f”> E</option>
                  <option value=“x”> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Improved the attitude </label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point"> 
                  <option value=“”> Point</option>
                  <option value=“q”> A</option> 
                  <option value=“b”> B</option> 
                  <option value=“c”> C</option>
                  <option value=“d”> D</option>
                  <option value=“f”> E</option>
                  <option value=“x”> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment">
                </div>
              </div>

              <div class="form-group">
               <label for="noi-dung" class="col-sm-4 control-label">Improved work methods </label>
                 <div class="col-sm-1 selectContainer">
                 <select class="form-control" name="point"> 
                  <option value=“”> Point</option>
                  <option value=“q”> A</option> 
                  <option value=“b”> B</option> 
                  <option value=“c”> C</option>
                  <option value=“d”> D</option>
                  <option value=“f”> E</option>
                  <option value=“x”> F</option>
                  </select>
                  </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="comment" placeholder="Comment">
                </div>
              </div>

              
              <div class="form-group">
                  <label for="danh-gia" class="col-sm-4 control-label" style="font-size: 20px; font-weight: bold;"">B. General assessment</label>
                  <div class="col-sm-7">
                  <textarea class="form-control" col="9" rows="10" ></textarea>
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
