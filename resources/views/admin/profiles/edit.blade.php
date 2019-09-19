@include('admin.header')


@include('admin.sidebar')








<div id="content">
        <div id="content-header">
          <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Dashboard</a> <a href="#" class="tip-bottom">Add Product</a> <a href="#" class="current">Common elements</a> </div>
          <h1></h1>
        </div>
        <div class="container-fluid">
            
            @if(Session::has('sucsess'))

            <div class="alert alert-success" style="margin:18px;" role="alert">
                   {{ Session::get('sucsess') }}
                  </div>
            @endif
            
            @if($errors->any())
            <div class="alert alert-danger" style="margin:18px;" role="alert">
             <ul>
              @foreach($errors->all() as $error)
              <li>{{ $error }}</li>

              @endforeach
            </ul>
            </div>
            @endif
          <hr>
          <div class="row-fluid">
            <div class="span6">
              <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                  <h5>Profile-info   </h5>
                </div>
                <div class="widget-content nopadding">
                  <form action="{{ url('/profiles/'.$user->id) }}" enctype="multipart/form-data" method="post"  class="form-horizontal">
                      @csrf
                      @method('PUT')
                    <div class="control-group">
                      <label class="control-label"> Name :</label>
                      <div class="controls">
                        <input type="text" class="span11" placeholder=" name" name="name" value="{{ $user->name }}"/>
                      </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label"> Email :</label>
                        <div class="controls">
                          <input type="text" class="span11" placeholder=" email" name="email" value="{{ $user->email }}"/>
                        </div>
                      </div>
                      
                      <div class="control-group">
                        <label class="control-label"> Job :</label>
                        <div class="controls">
                          <input type="text" class="span11" placeholder=" job" name="job" value="{{ $user->job }}"/>
                        </div>
                      </div>



                      <div class="control-group">
                        <label class="control-label"> Country :</label>
                        <div class="controls">
                          <input type="text" class="span11" placeholder=" country" name="country" value="{{ $user->country }}"/>
                        </div>
                      </div>




                      <div class="control-group">
                        <label class="control-label"> City :</label>
                        <div class="controls">
                          <input type="text" class="span11" placeholder=" city" name="city" value="{{ $user->city }}"/>
                        </div>
                      </div>
                 


                      <div class="control-group">
                        <label class="control-label"> Major Job :</label>
                        <div class="controls">
                          <input type="text" class="span11" placeholder=" mejor" name="job_major" value="{{ $user->job_major }}"/>
                        </div>
                      </div>


                      <div class="control-group">
                        <label class="control-label"> Age :</label>
                        <div class="controls">
                          <input type="text" class="span11" placeholder=" age" name="age" value="{{ $user->age }}"/>
                        </div>
                      </div>


                      <div class="control-group">
                        <label class="control-label"> Phone :</label>
                        <div class="controls">
                          <input type="text" class="span11" placeholder=" phone" name="phone" value="{{ $user->phone }}"/>
                        </div>
                      </div>






                   

                          <div class="controls">
                                <label class="control-label">CV :</label>
                                <div class="uploader" id="uniform-undefined"><input type="file" name="cv" size="19" style="opacity: .1;"><span class="filename">No file selected</span><span class="action">Choose Photo</span></div>
                              </div>

                         
                           

                    
                    <div class="form-actions">
                      <button type="submit" class="btn btn-success">Save</button>
                    </div>
                  </form>
                </div>
              </div>





              <script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/bootstrap-colorpicker.js"></script> 
<script src="js/bootstrap-datepicker.js"></script> 
<script src="js/jquery.toggle.buttons.js"></script> 
<script src="js/masked.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.form_common.js"></script> 
<script src="js/wysihtml5-0.3.0.js"></script> 
<script src="js/jquery.peity.min.js"></script> 
<script src="js/bootstrap-wysihtml5.js"></script> 
<script>
	$('.textarea_editor').wysihtml5();
</script>
@include('admin.footer')