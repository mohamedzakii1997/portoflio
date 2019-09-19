@include('admin.header')


@include('admin.sidebar')








<div id="content">
        <div id="content-header">
          <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Dashboard</a> <a href="#" class="tip-bottom">Add Product</a> <a href="#" class="current">Common elements</a> </div>
          <h1></h1>
        </div>
        <div class="container-fluid">
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
                  <h5>ٌReplay To {{$message->customer_name}} Message  
                
                <br>
                <br>
              <br>
                Send To {{$message->email}}

                
                </h5>
                </div>
                <br>
                <br>

                <div class="widget-content nopadding">
                  <form action="{{ url('/messages/'.$message->id.'/mail') }}" enctype="multipart/form-data" method="post"  class="form-horizontal">
                      @csrf
                     
                    <div class="control-group">
                      <label class="control-label">Subject :</label>
                      <div class="controls">
                        <input type="text" class="span11" placeholder=" subject" name="subject" />
                      </div>
                    </div>

                   


                 


                    <div class="controls">
                            <label class="control-label">Message :</label>
                            <textarea class="span11" rows="5" name="content"></textarea>
                          </div>

                         
                    
                    <div class="form-actions">
                      <button type="submit" class="btn btn-success">Send</button>
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