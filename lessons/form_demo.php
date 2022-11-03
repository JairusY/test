<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <!-- The <form> Element
    The action attribute
    the target attribute
    the method attribute
    GET and POST metid value
    the name attribute

    "HTML forms is used to collect user input"

    form elements:
        textbox
        buttons
        etc.
    -->

     <form action="form_demo_action.php" method="get" name="frmDemo">
    <!-- Notes on GET:

    * Appends form-data into URL in name/value pairs

    * The length od a URL is limited (2048 characters)

    * Never use GET to send sensitive data! (will be visible in the URL)

    * Useful for form submissions where a user wants to bookmark the result
    
    * GET is better for non-secure data, like query strings in Google 


    Notes on POST:
    * POST has no size limitation, and can be used to send large amounts of data.
    * Form submission with POST cannot be bookmarked

    -->
    Enter Text
    <input type="text" name="txtText">
    <input type="submit" name="btnSend" value="Send"> 

     </form>

</body>
</html>