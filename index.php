<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Mailer </title>
</head>
<style>
    body{
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 0;
 
}
form{
    
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
}

</style>
<body>
    
   <form action="mailer_handle.php" method="post">
   <br>
   <br>
    <label for="email">Email :</label>
    <input type="email" name="email" id="email" required>
    <br>
    <br>
    
    <input type="submit" value="Sent Mail" /> 

   </form>
     
</body>
</html>

