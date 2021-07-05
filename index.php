<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <title>
        WORLD BANK
    </title>
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://jqueryui.com/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="script.js"></script>
    <table>
        <tr>
            <td colspan="3">
                <div class="all_logo">
                    <div class="img">
                        <a href="WORLD_BANK.html"><img src="png/bank_ik.jpg"></a>
                    </div> 
                    <div class="logo">
                        <strong>
                            WORLD BANK</br>
                            Publications
                        </strong>
                    </div>
                </div>
            </td>
            <td colspan="3" class="nomber">
                8-800-100-5005</br> 
                +7(3452)522-000
            </td>
        </tr>
        <tr class="menu">
            <td><a href="kred_kart.html">Кредитные карты</a></td>
            <td class="aktiv"><a href="vkladi.html">Вклады</a></td>
            <td><a href="deb_kart.html">Дебетовые карты</a></td>
            <td><a href="strahovka.html">Страхование</a></td>
            <td><a href="druthia.html">Друзья</a></td>
            <td><a href="int_bank.html">Интернет-банк</a></td>
        </tr>
    </table>  
</head>
<body>
    <div class="bread">
        <p>
            <a href="WORLD_BANK.html">Главная</a>
             - 
            <a href="vkladi.html">Вклады</a>
             - 
            Калькулятор
        </p>
    </div>
    <div class="kalk">
        <h2>Калькулятор</h2>
        <form method="post" action="index.php">
            <table>
                <tr>
                    <td>Дата оформления вклада</td>
                    <td><input type="text" id="datepicker" size="9pt" name="date"></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Сумма вклада</td>
                    <td><input type="number" min="1000" max="3000000" size="9pt" class="nome1" name="sumvkl"></td>
                    <td>
                        <div class="polz">
                            <input type="range" min="1000" max="3000000" class="slider1">
                            <i class="curs1">1 тыс. руб.</i><i class="curs2">3 000 000</i>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Срок вклада</td>
                    <td>
                        <select name="srok">
                            <option label="1 год" value="1">
                            <option label="2 года" value="2">
                            <option label="3 года" value="3">
                            <option label="4 года" value="4">
                            <option label="5 лет" value="5">
                        </select>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Пополнение вклада</td>
                    <td>
                        <input type="radio" name="radio" value="0" checked> Нет <input type="radio" name="radio" value="1"> Да
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>Сумма пополнения вклада</td>
                    <td><input type="number" min="1000" max="3000000" size="9pt" class="nome2" name="sumpop"></td>
                    <td>
                        <div class="polz">
                            <input type="range" min="1000" max="3000000" class="slider2">
                            <i class="curs1">1 тыс. руб.</i><i class="curs2">3 000 000</i>
                        </div>
                    </td>
                </tr>
            </table>
            <div class="input">
                <input type="submit" name="submit" value="Рассчитать" id="kalkulete">
                <span>Результат:</span>
                <?php
                    require_once ("calc.php");
                    echo ($summ);
                ?>
            руб
            </div>
        </form>
    </div>
</body>
<footer>
    <ul>
        <li><a href="kred_kart.html">Кредитные карты</a></li>
        <li><a href="vkladi.html">Вклады</a></li>
        <li><a href="deb_kart.html">Дебетовые карты</a></li>
        <li><a href="strahovka.html">Страхование</a></li>
        <li><a href="druthia.html">Друзья</a></li>
        <li><a href="int_bank.html">Интернет-банк</a></li>   
    </ul> 
</footer>
</html>
