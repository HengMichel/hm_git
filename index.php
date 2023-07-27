<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Form PHP</title>
</head>
<body>

    <h1>Formulaire exo PHP</h1>

    <form id="monForm">
        <fieldset>
            <div class="ligne">
              <label for=" firstName"></label>
              <input type="text" id="firstName" placeholder="Your first name" />
            </div>
            <div class="ligne">
              <label for=" lastName"></label>
              <input type="text" id="lastName" placeholder="Your last name" />
            </div>

            <div class="ligne">
              <label for=" email"></label>
              <input type="email" id="email" placeholder="Your email" />
            </div>
            <button id="submit">Submit</button>        
        </fieldset>
    </form>

</body>
</html>