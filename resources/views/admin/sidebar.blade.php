<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>
      <li class="{{ is_valied('dashboard') }}"><a href="#"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
      <li> <a href=" #" ><i class="icon icon-signal"></i> <span>Users</span></a> </li>
    <li class="{{ is_valied('projects') }}"> <a href="{{ url('/projects') }}"><i class="icon icon-inbox"></i> <span>Projects</span></a> </li>
    <li class="{{ is_valied('categories') }}"> <a href="{{ url('/categories') }}"><i class="icon icon-inbox"></i> <span>Categories</span></a> </li>
    <li class="{{ is_valied('skills') }}"> <a href="{{ url('/skills') }}"><i class="icon icon-inbox"></i> <span>Skills</span></a> </li>
    <li class="{{ is_valied('profiles') }}"> <a href="{{ url('/profiles/'.Auth::user()->id.'/edit') }}"><i class="icon icon-inbox"></i> <span>Profile</span></a> </li>
      <li class="{{ is_valied('messages') }}" > <a href="{{ url('/messages') }}"><i class="icon icon-inbox"></i> <span>Messages</span></a> </li>
      
    </ul>
</div>
<script>





</script>