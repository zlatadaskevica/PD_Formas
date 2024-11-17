<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pieslēgties</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="left">
        <div class="overlay">
                <h1>Esi sveicināts</h1>
                <h1>ĶLUS</h1>
                <hr class="custom-line">
                <p>Tavas laboratorijas uzskaites sistēma</p>
            </div>
            <img src="images/laboratory.jpg" alt="Laboratory" class="lab-image">
        </div>
        <div class="right">
          <div class="back-button">
             <a href="index.php">&larr; Atpakaļ uz sākumlapu</a>
          </div>
        <br><br>
            <h2>Pieslēgties</h2>
            <p>Ķīmijas laboratorijas uzskaites sistēmai</p><br><br>
            <form action="labdb.php" method="GET">
                <label for="username">Lietotājvārds:</label>
                <input type="text" id="username" placeholder="Ievadi lietotājvārdu">

                <label for="password">Parole:</label>
                <input type="password" id="password" placeholder="Ievadi paroli">

                <button type="submit">Pieslēgties</button>
            </form>
            <p>Neesi vēl reģistrēts? <a href="#">Izveidot profilu</a></p>
        </div>
    </div>
    <a href="#" class="error-button">Ziņot par kļūdu</a>
</body>
</html>
