@include('admin.header')

@section('title')
Projects
@endsection
@include('admin.sidebar')



<div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Products</a> <a href="#" class="current">Tables</a>
    
    </div>
 
      <h1>Skills Data</h1>
      
    </div>
    <br>
    
  

    
            @if(Session::has('sucsess'))

            <div class="alert alert-success" style="margin:18px;" role="alert">
                   {{ Session::get('sucsess') }}
                  </div>
            @endif
         

    <br>
    <a class="btn btn-primary" style="margin-left:18px;" href="{{ url('/skills/create') }}"> Add Skill</a> 
    <div class="widget-box">
        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
          <h5>Data table</h5>
        </div>
        
        <div class="widget-content nopadding">
          <table class="table table-bordered data-table">
            <thead>
              <tr>
                <th>#</th>
                <th>Skill Name</th>
             
                <th>Skill Progress</th>
               
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach($skills as $skill)
              <tr class="gradeX">
                <td>{{ $skill->id }}</td>
                <td>{{ $skill->name }}
                  </td>
                  
               
                <td class="center">{{ $skill->progress }} </td>
               
                
                <td> 
                        <a class="btn btn-warning" href="{{ url('/skills/'.$skill->id.'/edit') }}"> Edit Skill</a> 
                          
                        <form method="post" style="display: inline"  action="{{url('/skills/'.$skill->id) }}">
                          @method('DELETE')
                          @csrf
                          <button type="submit" class="btn btn-danger" onclick="return confirm('Are You Sure You Want To Delete This Skill')"  > Delete Skill</button>
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