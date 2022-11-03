<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
</head>
<body>
    <form action="caturing_form_data_receiver_demo.php" method="get">
        <label for="textFirsname">First Name</label>
        <input type="text" name="txtFirstname" id="txtFirstname" autofocus><br>

        <label for="txt">Last Name</label>
        <input type="text" name="txtLastname" id="txtLastname"><br>
    
        <input type="radio" name="radSex" id="radMale" value="Male" checked>
        <label for="radMale" >Male</label>
        
        <input type="radio" name="radSex" id="radFemale" value="Female">
        <label for="radFemale" >Female</label> 

        <button type="submit" name="btmSend">Send</button>
    </form>
</body>
</html>