@include('admin.header')

@section('title')
Projects
@endsection
@include('admin.sidebar')



<div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Products</a> <a href="#" class="current">Tables</a>
    
    </div>
 
      <h1>Categories Data</h1>
      
    </div>
    <br>
    
  

    
            @if(Session::has('sucsess'))

            <div class="alert alert-success" style="margin:18px;" role="alert">
                   {{ Session::get('sucsess') }}
                  </div>
            @endif
         

    <br>
    <a class="btn btn-primary" style="margin-left:18px;" href="{{ url('/categories/create') }}"> Add Category</a> 
    <div class="widget-box">
        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
          <h5>Data table</h5>
        </div>
        
        <div class="widget-content nopadding">
          <table class="table table-bordered data-table">
            <thead>
              <tr>
                <th>#</th>
                <th>Category Name</th>
             
              
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach($categories as $Category)
              <tr class="gradeX">
                <td>{{ $Category->id }}</td>
                <td>{{ $Category->name }}
                  </td>
                  
               
               
                <td> 
                        <a class="btn btn-warning" href="{{ url('/categories/'.$Category->id.'/edit') }}"> Edit Category</a> 
                          
                        <form method="post" style="display: inline"  action="{{url('/categories/'.$Category->id) }}">
                          @method('DELETE')
                          @csrf
                          <button type="submit" class="btn btn-danger" onclick="return confirm('Are You Sure You Want To Delete This Category')"  > Delete Category</button>
                        </form>
                </td>
              </tr>
             @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

@include('admin.footer')