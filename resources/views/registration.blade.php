<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form</title>
</head>
<body>
    <h1>Laravel Forms</h1>
    <hr>
    <form action="" method="post">
    @csrf
      Name:  <input type="text" name="name" id="">
  Email:   <input type="email" name="email" id="">
    Password:    <input type="password" name="password" id="">
        <input type="submit" value="submit" name="submit">
    </form>
    
</body>
</html>