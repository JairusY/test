<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML form elements</title>
</head>
<body>
    <form>
        <!--
        1. The <input> element
        2. The <select> element
        3. The <textarea> element
        4. The <Button> element
        5. The <fieldset> element
        6. The <datalist> element
        -->
        <input type="text"> <!-- textbox -->
        
        <hr>
        
        <select name="drpCars" id=""> <!-- dropdownlist -->
            <option value="Toyota">Toyota</option>
            <option value="Nissan">Nissan</option>
            <option value="Mazda">Mazda</option>
            <option value="Mitsubishi">Mitsubishi</option>
        </select>

        <hr>

        <textarea name="" id="" cols="100" rows="1"></textarea> <!-- multi line textbox -->

        <hr>

        <button type="button">Click Me!</button> <!-- button, submit, reset -->
        
        <hr>

        <fieldset> <!-- to group related data in a form -->
             <legend>Personal Information</legend>
             First Name <input type="text"><br>
             Last Name <input type="text"><br>
        </fieldset>

        <hr>

        <input type="text" name="dlstBrowsers" list="browsers"> 
        <datalist id="browsers">
            <option value="Firefox">
            <option value="Chrome">
            <option value="Opera">
            <option value="Safari">
            <option value="Microsoft Edge">    
        </datalist>
    </form>
</body>
</html>