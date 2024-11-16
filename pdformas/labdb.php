<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Publiskā datubāze</title>
</head>
<body>
    <div class="dbcontainer">
        <!-- Кнопка "Назад на sākumlapu" -->
        <div class="back-button">
            <a href="index.php">&larr; Atpakaļ uz sākumlapu</a>
        </div>
        
        <!-- Заголовок -->
        <h1 class="main-title">Publiskā datubāze</h1>
        <p class="und_subtitle">Šajā datubāzē Tu vari apskatīt pieejamās vielas un aprīkojumu</p>

        <!-- Форма поиска -->
        <div class="search-container">
            <input type="text" class="search-input" placeholder="&#x1F50D Search">
            <button class="search-button">Rādīt visu</button>
            <button class="search-button">Rādīt vielas</button>
            <button class="search-button">Rādīt aprīkojumu</button>
        </div>

        <!-- Таблица -->
        <div class="table-container">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nosaukums</th>
                        <th>Tips</th>
                        <th>Apraksts</th>
                        <th>Skaits</th>
                        <th>Svars</th>
                        <th>Komentāri</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>KL1042724</td>
                        <td>Katalizators</td>
                        <td>Aprīkojums</td>
                        <td>Trauks</td>
                        <td>23</td>
                        <td></td>
                        <td>Daži komentāri</td>
                    </tr>
                    <tr>
                        <td>KL1042723</td>
                        <td>Birete</td>
                        <td>Aprīkojums</td>
                        <td>Trauks</td>
                        <td>20</td>
                        <td></td>
                        <td>Daži komentāri</td>
                    </tr>
                    <tr>
                        <td>KL1042742</td>
                        <td>HCl</td>
                        <td>Viela</td>
                        <td>Skābe</td>
                        <td>19</td>
                        <td>40</td>
                        <td>Daži komentāri</td>
                    </tr>
                    <tr>
                        <td>KL1042724</td>
                        <td>Kolba</td>
                        <td>Aprīkojums</td>
                        <td>Trauks</td>
                        <td>20</td>
                        <td></td>
                        <td>Daži komentāri</td>
                    </tr>
                    <tr>
                        <td>KL1042534</td>
                        <td>Fe</td>
                        <td>Viela</td>
                        <td>Metāls</td>
                        <td>48</td>
                        <td>10</td>
                        <td>Daži komentāri</td>
                    </tr>
                    <tr>
                        <td>KL1442721</td>
                        <td>Na</td>
                        <td>Viela</td>
                        <td>Metāls</td>
                        <td>20</td>
                        <td>20</td>
                        <td>Daži komentāri</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
    <!-- Кнопка "Zinot par kļūdu" -->
    <a href="#" class="error-button">Ziņot par kļūdu</a>
</body>
</html>
