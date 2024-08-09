<h1>profile page</h1>



@if (session('user'))
<h1>welcome ,{{session('user')}}</h1>

@else
<h1>No user Found  <a href="login">Login</a></h1>



@endif


<a href="/logout">Logout</a>

<!-- <div>
{{session('alldata')['name']}}
{{session('alldata')['password']}}
</div> -->