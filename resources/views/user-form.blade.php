<form action="AddUser" method="POST" class="form">
    @csrf

    <!-- @if($errors->any())
        @foreach($errors->all() as $error)
            <div>
                {{$error}}
            </div>

        @endforeach

    @endif -->
    <div class="input-wrapper">
        <h1>Add new User</h1>
        <span style="color:red">@error('name'){{$message}}@enderror</span>
        <input type="text" placeholder="Enter your Name" name="name" class="input" value="{{old('name')}}">
    </div>
    <div class="input-wrapper">
    <span style="color:red">@error('email'){{$message}}@enderror</span>

        <input type="text" placeholder="Enter your Email" name="email" class="input" value="{{old('email')}}">
    </div>



    <div class="input-wrapper">
        <h4>User Skills</h4>

        <input type="checkbox" name="skill[]" value="PHP" id="php">
        <label for="php">PHP</label>

        <input type="checkbox" name="skill[]" value="JAVA" id="java">
        <label for="java">JAVA</label>

        <input type="checkbox" name="skill[]" value="Dart" id="dart">
        <label for="dart">Dart</label>
    </div>

    <div class="input-wrapper">
   

        <h4>User Gender</h4>

        <input type="radio" name="gender" value="Male" id="male">
        <label for="male">Male</label>

        <input type="radio" name="gender" value="Female" id="female">
        <label for="female">Female</label>
<br>
        <span style="color:red">@error('gender'){{$message}}@enderror</span>

    </div>

    <div class="input-wrapper">
        <h4>User City</h4>

        <select name="city">

            <option value="Karak">karak</option>
            <option value="Kohat">Kohat</option>
            <option value="Peshawar">Peshawar</option>
            <option value="Bannu">Bannu</option>
            <option value="Lakki Marwat">Lakki Marwat</option>
        </select>

    </div>
    <button type="submit">Add New User</button>
</form>

<style>
    .input {
        border: green 1px solid;
        height: 35px;
        width: 250;
        border-radius: 2px;
        color: blueviolet;

    }


    .input-wrapper {
        margin: 10px;

    }

    button {
        border: green 1px solid;
        height: 35px;
        width: 250px;
        border-radius: 2px;
        color: blueviolet;
        background-color: white;
        margin: 10px;

    }

    .form {
        border: green 1px solid;
        height: 800px;
        width: 300px;
        border-radius: 20px;
        color: blueviolet;
        background-color: lightgreen;
        margin: 30px;
        padding-left: 30;

    }
</style>