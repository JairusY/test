<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Types Demo</title>
</head>
<body>
    <!-- 
    * HTML Input Types
    * HTML Input restrictions = required,autofocus,pattern.....
    
    <input type="button">
    <input type="checkbox">
    <input type="color">
    <input type="date">
    <input type="datetime-local">
    <input type="email">
    <input type="text">
    <input type="file">
    <input type="hidden">
    <input type="image">
    <input type="month">
    <input type="number">
    <input type="password">
    <input type="radio">
    <input type="range">
    <input type="reset">
    <input type="search">
    <input type="submit">
    <input type="tel">
    <input type="text">
    <input type="time">
    <input type="url">
    <input type="week">

-->

    <form action="">
        <label for="txtFirstName">First Name</label>
        <input type="text" name="txtFirstName" Placeholder="type your name...." autofocus required id="txtFirstName"><br> <!-- attributes: Value, Placeholder -->

        <br>

        <label for="txtLastName">Last Name</label>
        <input type="text" name="txtLastName" Placeholder="type your name...." id="txtLastName" required><br>
    
        <br>

        <label for="txtPassword">Password:</label>
        <input type="password" name="txtPassword" Placeholder="input password" id="txtPassword"><br>
    
        <br>

        <button type="submit" name="btnSave">Send</button>
        <button type="reset" name="btnReset">Reset</button><br>

        <br>
        
        <input type="radio" name="radSex" id="radMale" value="Male" checked>
        <label for="radMale">Male</label><br>

        <br>

        <input type="radio" name="radSex" id="radFemale" value="Female">
        <label for="radFemale">Female</label><br>

        <br>

        <input type="checkbox" name="chkCar" id="chkCar" valur="Car">
        <label for="chkCar">I have a Car.</label><br>

        <br>
        
        <input type="checkbox" name="chkBoat" id="chkBoat" valur="Boat">
        <label for="chkBoat">I have a Boat.</label><br>

        <br>
        
        <input type="checkbox" name="chkBike" id="chkBike" valur="Bike">
        <label for="chkBike">I have a Bike.</label><br>

        <br>

        <label for="clrTheme">Pick a color: </label>
        <input type="color" name="clrTheme"><br>

        <br>

        <label for="dtpBirthday">Birthday</label>
        <input type="date" name="dtpBirthday" id="dtpBirthday" value="1990-01-01"><br>

        <br>

        <label for="txtEmail">Email Address: </label>
        <input type="email" name="txtEmail" required><br>

        <br>

        <label for="filPhoto">Select</label>
        <input type="file" name="filPhoto"><br>

        <br>

        <label for="txtNumber">Enter Quantity: </label>
        <input type="number" name="txtNumber" id="txtNumber"><br> <!-- attributes min and max -->

        <br>

        <label for="txtVolume">Selec Volume: </label>
        <input type="range" name="txtVolume" id="txtVolume"><br>

        <br>

        <label for="txtPhone">Enter Phone Number: </label>
        <input type="tel" name="txtPhone" id="txtPhone" required><br>

        <br>

        <label for="txtTime">Selec Time: </label>
        <input type="time" name="txtTime" id="txtTime"><br>

        <label for="txtURL">Selec URL: </label>
        <input type="url " name="txtURL" id="txtURL"><br>

    </form>
</body>
</html>