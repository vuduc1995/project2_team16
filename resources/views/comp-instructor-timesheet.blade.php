<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset= "utf-8">
    <title>Company Instructor Timesheet</title>

    <link rel ="stylesheet" type="text/css" href ="{{ URL::asset('css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('data/login/css/styles.css') }}">
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
            <li><a href="#">Outline</a></li>
            <li><a href="#">Mark's form</a></li>
            <li><a href="#">Timesheet</a></li>
            <li><a href="#">Rate</a></li>
          </ul>
        </li>
            <li><a href="#">Chat</a></li>
            </ul>

        
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
      
        <h2>timesheet</h2>

          <div class="fillin">
            <form class="form-horizontal">
              <div class="form-group">
               

                
                <div class="form-group">
                  <label for="skills" class="col-sm-2 control-label">Attachments</label>
                  <input id="input-folder-2" name="input-folder-2[]" class="file-loading" type="file" multiple webkitdirectory accept="image/*">
                  <div id="errorBlock" class="help-block"></div>
                  <script>
                  $(document).on('ready', function() {
                      $("#input-folder-2").fileinput({
                          browseLabel: 'Select Folder...',
                          previewFileIcon: '<i class="fa fa-file"></i>',
                          allowedPreviewTypes: null, // set to empty, null or false to disable preview for all types
                          previewFileIconSettings: {
                              'xls': '<i class="fa fa-file-excel-o text-success"></i>',
                              'zip': '<i class="fa fa-file-archive-o text-muted"></i>',
                          },
                          previewFileExtSettings: {
                              'xls': function(ext) {
                                return ext.match(/(xls|xlsx)$/i);
                              },
                              'zip': function(ext) {
                                  return ext.match(/(zip|rar|tar|gzip|gz|7z)$/i);
                              },
                                                        }
                      });
                  });
                  </script>
                  </div>

                <div class="form-group">
                  <div class="text-center">
                    <button type="submit" class="btn btn-default">Submit</button><button type="cancel" class="btn btn-default">Cancel</button>
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
