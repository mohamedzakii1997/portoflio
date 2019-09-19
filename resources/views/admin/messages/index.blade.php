@include('admin.header')

@section('title')
Projects
@endsection
@include('admin.sidebar')



<div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Products</a> <a href="#" class="current">Tables</a>
    
    </div>
 
      <h1>Messages</h1>
      
    </div>
    <br>
    
  
    <a class="btn btn-danger" style="margin-left:18px;" href="{{ url('/messages/deleteall') }}"> Delete All Messages</a> 

    <br>
    <br>
   
    <a class="btn btn-primary" style="margin-left:18px;" href="{{ url('/messages/read') }}"> Mark All As Read</a> 
    
            @if(Session::has('sucsess'))

            <div class="alert alert-success" style="margin:18px;" role="alert">
                   {{ Session::get('sucsess') }}
                  </div>
            @endif
         

    <br>
    
    <div class="widget-box">
        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
          <h5>Data table</h5>
        </div>
        
        <div class="widget-content nopadding">
          <table class="table table-bordered data-table">
            <thead>
              <tr>
                <th>#</th>
                <th>client Name</th>
             
                <th>Client Email</th>
                <th>Subject</th>
                <th>Content</th>
                <th>Message Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach($messages as $message)
              <tr class="gradeX">
                <td>{{ $message->id }}</td>
                <td>{{ $message->customer_name }}
                  </td>
                  
                  <td class="center">{{ $message->email }} </td>
                <td class="center">{{ $message->subject }} </td>
                <td class="center">{{ $message->content}} </td>
               
                <td class="center"> @if($message->replayed == 0) Not Replayed Yet @else Replayed @endif </td>
                
               
                <td> 
                    @if($message->replayed == 0)
                        <a class="btn btn-warning" href="{{ url('/messages/'.$message->id.'/replay') }}">  Replay Message</a> 
                          @endif
                        <br>
                          <form method="post" style="display: inline"  action="{{url('/messages/'.$message->id) }}">
                          @method('DELETE')
                          @csrf
                          <button type="submit" class="btn btn-danger" onclick="return confirm('Are You Sure You Want To Delete This Message')"  > Delete Message</button>
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