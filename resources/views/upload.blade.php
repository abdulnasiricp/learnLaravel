<x-layout>
    <x-slot name="title">Upload Page</x-slot>



</x-layout>
<br><br>
<h1>upload File</h1>

<form action="upload" , method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file" >
    <br>
    <br>

    <button>Upload</button>
</form>