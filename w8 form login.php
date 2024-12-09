<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 8 Commission Info</title>
    <link rel="stylesheet" href="css.css">

    <script src="Validation.js"></script>
   
</head>
<body>
    
    <header>
    <h1>
        MAGS' COMMISSION FORM
    </h1>
    </header>

    <main>
    <form name="commForm" id="commForm" method="post" action="w8 form login.php" onsubmit="return validateForm();">

    <div id="divMessage" class="errorMessage"></div>

    <label for="txtCharDrawn" id="lblCharDrawn">Character Wanted to be Drawn:</label>
    <input type="text" id="txtCharDrawn" name="txtCharDrawn">
    <br>
    <br>
    <label for="txtCommType" id="lblCommType">Commission Type:</label>
    <input type="text" id="txtCommType" name="txtCommType" >
    <br>
    <br>
    <button type="submit">Submit Commission Form!</button>
 
    </form>

    </main>

</body>
</html>