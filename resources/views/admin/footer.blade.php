<div class="row-fluid">
    <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
  </div>

  
<script src="{{ asset('backendjs/excanvas.min.js') }}"></script> 
<script src="{{ asset('backendjs/jquery.min.js') }}"></script> 
<script src="{{ asset('backendjs/jquery.ui.custom.js') }}"></script> 
<script src="{{ asset('backendjs/bootstrap.min.js') }}"></script> 
<script src="{{ asset('backendjs/jquery.flot.min.js') }}"></script> 
<script src="{{ asset('backendjs/jquery.flot.resize.min.js') }}"></script> 
<script src="{{ asset('backendjs/jquery.peity.min.js') }}"></script> 
<script src="{{ asset('backendjs/fullcalendar.min.js') }}"></script> 
<script src="{{ asset('backendjs/matrix.js') }}"></script> 
<script src="{{ asset('backendjs/matrix.dashboard.js') }}"></script> 
<script src="{{ asset('backendjs/jquery.gritter.min.js') }}"></script> 
<script src="{{ asset('backendjs/matrix.interface.js') }}"></script> 
<script src="{{ asset('backendjs/matrix.chat.js') }}"></script> 
<script src="{{ asset('backendjs/jquery.validate.js') }}"></script> 
<script src="{{ asset('backendjs/matrix.form_validation.js') }}"></script> 
<script src="{{ asset('backendjs/jquery.wizard.js') }}"></script> 
<script src="{{ asset('backendjs/jquery.uniform.js') }}"></script> 
<script src="{{ asset('backendjs/select2.min.js') }}"></script> 
<script src="{{ asset('backendjs/matrix.popover.js') }}"></script> 
<script src="{{ asset('backendjs/jquery.dataTables.min.js') }}"></script> 
<script src="{{ asset('backendjs/matrix.tables.js') }}"></script> 
<script src="{{ asset('backendjs/jquery.min.js') }}"></script> 
<script src="{{ asset('backendjs/jquery.ui.custom.js') }}"></script> 
<script src="{{ asset('backendjs/bootstrap.min.js') }}"></script> 
<script src="{{ asset('backendjs/jquery.uniform.js') }}"></script> 
<script src="{{ asset('backendjs/select2.min.js') }}"></script> 
<script src="{{ asset('backendjs/jquery.dataTables.min.js') }}"></script> 
<script src="{{ asset('backendjs/') }}js/matrix.js"></script> 
<script src="{{ asset('backendjs/matrix.tables.js') }}"></script>
<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>