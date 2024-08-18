<x-layout>
    <x-slot name="title">Login Page</x-slot>



</x-layout>
<br><br>
<h1>Login Form</h1>

{{session('massage')}}
<form action="add" method="POST">
    @csrf

    <input type="text" name="name" placeholder="Enter Name">
    <br>
    <br>
    <input type="password" name="password" placeholder="Enter password">
    <br>
    <br>
    <button type="submit">Login</button>

</form>