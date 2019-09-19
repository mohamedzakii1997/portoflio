<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>Matrix Admin</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="{{ asset('backendcss/bootstrap.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('backendcss/bootstrap-responsive.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('backendcss/matrix-login.css') }}" />
        <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    </head>
    <body>
        <div id="loginbox">            
            <form id="loginform" method="post" class="form-vertical" action="{{ route('login') }}">
                @csrf 
                <div class="control-group normal_text"> <h3>Login</h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="email" placeholder="email" name="email" />
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                       
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                         
                           <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" placeholder="Password" name="password" />
                           @error('password')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                        </div>

                    </div>
                </div>
                <div class="form-actions">
                    <span class="pull-left"><a href="{{ route('register') }}" class="flip-link btn btn-info" id="">Register</a></span>
                    <span class="pull-right"><button type="submit" href="#" class="btn btn-success" />Login</button></span>
                </div>
            </form>
           
        </div>
        
        <script src="js/jquery.min.js"></script>  
        <script src="js/matrix.login.js"></script> 
    </body>

</html>
