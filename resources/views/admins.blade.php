<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
    <form action="adduser" method="post">
        @csrf
       Name: 
       <input type="text" name="name" id="name"><br><br>
       
       Username: 
       <input type="text" name="uname" id="uname"><br><br>

       Date of Birth:
       <input type="text" name="DOB" id="DOB"><br><br>    
       
       Email:  
       <input type="email" name="email" id="email"><br><br>

       Telephone No: 
       <input type="text" name="telephone" id="telephone"><br><br>

       NIC No: 
       <input type="text" name="NIC" id="NIC"><br><br>

       Gender: 
       <input type="text" name="gender" id="gender"><br><br>

       Password: 
       <input type="password" name="pass" id="pass"><br><br>

       <input type="submit" value="Add Data">
    </form>
</body>
</html>