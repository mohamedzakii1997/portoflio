@include('admin.header')

@section('title')
Projects
@endsection
@include('admin.sidebar')



<div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Products</a> <a href="#" class="current">Tables</a>
    
    </div>
 
      <h1>Products Data</h1>
      
    </div>
    <br>
    
  

    
            @if(Session::has('sucsess'))

            <div class="alert alert-success" style="margin:18px;" role="alert">
                   {{ Session::get('sucsess') }}
                  </div>
            @endif
         

    <br>
    <a class="btn btn-primary" style="margin-left:18px;" href="{{ url('/projects/create') }}"> Add Project</a> 
    <div class="widget-box">
        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
          <h5>Data table</h5>
        </div>
        
        <div class="widget-content nopadding">
          <table class="table table-bordered data-table">
            <thead>
              <tr>
                <th>#</th>
                <th>Project Name</th>
             
                <th>Project Description</th>
                <th>Project Category</th>
                <th>Project Image</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
              <tr class="gradeX">
                <td>{{ $project->id }}</td>
                <td>{{ $project->name }}
                  </td>
                  
               
                <td class="center">{{ $project->description }} </td>
                <td class="center">{{ $project->category->name}} </td>
                <td><img style="width: 100px;height: 100px" src="{{ url('projects/'.$project->id.'/getImage') }}"></td>
                <td> 
                        <a class="btn btn-warning" href="{{ url('/projects/'.$project->id.'/edit') }}"> Edit Product</a> 
                          
                        <form method="post" style="display: inline"  action="{{url('/projects/'.$project->id) }}">
                          @method('DELETE')
                          @csrf
                          <button type="submit" class="btn btn-danger" onclick="return confirm('Are You Sure You Want To Delete This project')"  > Delete</button>
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