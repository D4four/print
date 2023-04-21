<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="print.php" method="POST" target="_blank">
                    <div class="form-group">
                        <input type="text" name="regnumber" class="form-control" id="regnumber" placeholder="num" value="Б1488">
                    </div>

                    <div class="form-group">
                        <label for="lastName" class="form-label">Фамилия</label>
                        <input type="text" name="LastName" class="form-control" id="lastName" placeholder="Ivanov" value="Wekman">
                    </div>
                    <div class="form-group">
                        <label for="firstName" class="form-label">Имя</label>
                        <input type="text" name="FirstName" class="form-control" id="firstName" placeholder="Ivan" value="Pashok">
                    </div>
                    <div class="form-group">
                        <label for="middleName" class="form-label">Отчество</label>
                        <input type="text" name="MiddleName" class="form-control" id="middleName" placeholder="Ivanovich" value="Andie">
                    </div>
                    <div class="form-group">
                        <label for="birthdate" class="form-label">Отчество</label>
                        <input type="text" name="BirthDate" class="form-control" id="birthdate" placeholder="ДД.ММ.ГГГГ" value="13.12.2000">
                    </div>
                    <br>
                    <select class="form-select" aria-label="Default select example" name="Sex">
                        <option selected>Пол</option>
                        <option value="male">Мужской</option>
                        <option value="female">Женский</option>
                    </select>
                    <br>
                    <select class="form-select" aria-label="Default select example" name="CitizenShipID">
                        <option selected>Гражданство</option>
                        <option value="1">Российская Федерация</option>
                    </select>
                    <br>
                    <select class="form-select" aria-label="Default select example" name="DocumentType">
                        <option selected>Документ, удостоверяющий личность</option>
                        <option value="1">Паспорт гражданина РФ</option>
                    </select>
                    <div class="form-group">
                        <label for="series" class="form-label">Серия</label>
                        <input type="text" name="Series" class="form-control" id="series" placeholder="" value="6969">
                    </div>
                    <div class="form-group">
                        <label for="num" class="form-label">Номер</label>
                        <input type="text" name="Num" class="form-control" id="num" placeholder="" value="010101">
                    </div>
                    <div class="form-group">
                        <label for="passdate" class="form-label">Дата выдачи</label>
                        <input type="text" name="PassDate" class="form-control" id="passdate" placeholder="" value="14.88.1999">
                    </div>
                    <div class="form-group">
                        <label for="org" class="form-label">Орган</label>
                        <input type="text" name="Org" class="form-control" id="org" placeholder="" value="ТП №50 отдела УФМС России по Санкт-Петербургу и Ленинградской обл. в Московском р-не г. Санкт-Петербурга">
                    </div>
                    <div class="form-group">
                        <label for="postcode" class="form-label">Индекс</label>
                        <input type="text" name="PostCode" class="form-control" id="postcode" placeholder="" value="19680">
                    </div>
                    <br>
                    <select class="form-select" aria-label="Default select example" name="CountryId">
                        <option selected>Страна</option>
                        <option value="1">Российская Федерация</option>
                    </select>
                    <div class="form-group">
                        <label for="regionid" class="form-label">Субъект</label>
                        <input type="text" name="RegionId" class="form-control" id="regionid" placeholder="" value="г. Санкт-Петербург">
                    </div>
                    <div class="form-group">
                        <label for="cityid" class="form-label">Город</label>
                        <input type="text" name="CityId" class="form-control" id="cityid" placeholder="" value="Санкт-Петербург">
                    </div>
                    <div class="form-group">
                        <label for="street" class="form-label">Улица</label>
                        <input type="text" name="street" class="form-control" id="street" placeholder="" value="Пушкина">
                    </div>
                    <div class="form-group">
                        <label for="house" class="form-label">Дом</label>
                        <input type="text" name="house" class="form-control" id="house" placeholder="" value="123">
                    </div>

                    <br><button type="submit" class="btn btn-primary">Print</button>
                </form>

            </div>

        </div>
    </div>


</body>

</html>

<?php
// print_r($_POST)
// require('makefont/makefont.php');

// MakeFont('C:\\Windows\\Fonts\\comic.ttf','cp1252');
?>