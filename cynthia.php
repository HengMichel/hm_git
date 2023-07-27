<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="./css/cynthia.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
    <title>Form PHP</title>
</head>
<body>
    <!-- <form action=""> -->

    <h1>Formulaire PHP</h1>

    <form id="monForm">
        <fieldset class="ligne">
            
            <label for="firstName">First Name</label><br>
            <input type="text" id="firstName" placeholder=" Your first name" /><br>
        
            <label for=" lastName">Last Name</label><br>
            <input type="text" id="lastName" placeholder=" Your last name" /><br>
        
            <label for=" email">Email</label><br>
            <input type="email" id="email" placeholder=" Your email" /><br>
            
            <button id="submit">Submit</button>        
        </fieldset>
    </form> 
</body>
</html>