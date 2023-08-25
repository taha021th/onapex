
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">    
    <title>onapex email</title>
</head>
<body style="background-color:white; ">
    <h3 style="color: rgb(148, 18, 255);">input user data:</h3>
    <br>
    full name: <p>{{request()->input('name')}}</p>
    <br>
    email: <p>{{request()->input('email')}}</p>
    <br>
    phone: <p>{{request()->input('phone')}}</p>
    <br>
    text: <p>{{request()->input('text')}}</p>    



    <h3 style="color: rgb(148, 18, 255);">user data:</h3>
    <br>
   id: <p>{{Auth::user()->id}}</p>
    <br>
    full name:<p>{{Auth::user()->name}}</p>
    <br>
    email: <p>{{Auth::user()->email}}</p>
    <br>
    phone: <p>{{Auth::user()->phone}}</p>
    <br>
    text: <p>{{request()->input('text')}}</p>    

</body>
</html>
