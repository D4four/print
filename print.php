<?php
$content["head"] = "МИНИСТЕРСТВО НАУКИ И ВЫСШЕГО ОБРАЗОВАНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ\nфедеральное государственное автономное образовательное учреждение высшего образования \n\"Санкт-Петербургский государственный университет аэрокосмического приборостроения\"\nСанкт-Петербург, ул. Большая Морская, д.67\nП Р И Л О Ж Е Н И Е\nк заявлению о приеме на обучение по основным образовательным программам высшего образования –\nпрограммам бакалавриата и программам специалитета\n(заполняется печатными буквами)";
$content["iam"] = "Я, ".$_POST["LastName"].' '.$_POST["FirstName"].' '.$_POST["MiddleName"];
if ($_POST["Sex"] == "male") $temp = "Мужской"; else $temp = "Женский";
$content["sex"] = "Пол: ".$temp;
$content["birth"] = "Дата рождения: ".$_POST["BirthDate"];
if ($_POST["CitizenShipID"] == "1") $temp = "Российская Федерация";
$content["citizenship"] = "Гражданство: ".$temp;
if ($_POST["DocumentType"] == "1") $temp = "Паспорт гражданина РФ";
$content["documenttype"] = "Документ, удостоверяющий личность : ".$temp;
$content["series"] = "Серия :".$_POST["Series"];
$content["num"] = "Номер : ".$_POST["Num"];
$content["passdate"] = "Дата выдачи :".$_POST["PassDate"];
$content["organ"] = "Орган, выдавший документ: ".$_POST["Org"];
if ($_POST["CountryId"] == "1") $temp = "Паспорт гражданина РФ";
$content["live"] = "Зарегистрирован : ".$_POST["postcode"].', '.$temp.', '.$_POST["CountryID"].', '.$_POST["RegionId"].', '.$_POST["CityId"].', '.$_POST["street"].', '.$_POST["house"];
require('tfpdf.php');
require('makefont/makefont.php');
$pdf = new tFPDF();
// MakeFont('C:\\Windows\\Fonts\\Calibri.ttf','cp1252');
// $pdf->AddFont('Calibri','','Calibri.php');
$pdf->AddPage();
$pdf->AddFont('Calibri','','Calibri.ttf',true);
$pdf->AddFont('CalibriB','','Calibrib.ttf',true);
/*=========REGNOMER==========*/
$pdf->SetFont('Calibri','',14);
$len = strlen($_POST["regnumber"]); 
$pdf->Cell(10, 10, $_POST["regnumber"][0].$_POST["regnumber"][1], 1, 0,'C');
for ($i = 2; $i < $len; $i++) {
    $pdf->Cell(10, 10, $_POST["regnumber"][$i], 1, 0,'C');
}
/*=========HEADER==========*/
$pdf->SetFont('Calibri','',10);
$pdf->SetXY(10, 25);
$pdf->MultiCell(0, 3, $content["head"], 0,'C');
/*=========IAM==========*/
$pdf->SetFont('CalibriB','',10);
$pdf->SetXY(10, 55);
$pdf->MultiCell(0, 3, $content["iam"], 0,'L');
/*=========SEX==========*/
$pdf->SetFont('CalibriB','',10);
$pdf->SetXY(10, 60);
$pdf->MultiCell(0, 3, $content["sex"], 0,'L');
/*=========BIRTH==========*/
$pdf->SetFont('CalibriB','',10);
$pdf->SetXY(35, 60);
$pdf->MultiCell(0, 3, $content["birth"], 0,'L');
/*=========citizenship==========*/
$pdf->SetFont('CalibriB','',10);
$pdf->SetXY(80, 60);
$pdf->MultiCell(0, 3, $content["citizenship"], 0,'L');
/*=========DocumentType==========*/
$pdf->SetFont('CalibriB','',10);
$pdf->SetXY(10, 65);
$pdf->MultiCell(0, 3, $content["documenttype"], 0,'L');
/*=========SERIES==========*/
$pdf->SetFont('CalibriB','',10);
$pdf->SetXY(110, 65);
$pdf->MultiCell(0, 3, $content["series"], 0,'L');
/*=========NUM==========*/
$pdf->SetFont('CalibriB','',10);
$pdf->SetXY(130, 65);
$pdf->MultiCell(0, 3, $content["num"], 0,'L');
/*=========PASSDATE==========*/
$pdf->SetFont('CalibriB','',10);
$pdf->SetXY(10, 70);
$pdf->MultiCell(0, 3, $content["passdate"], 0,'L');
/*=========ORGAN==========*/
$pdf->SetFont('CalibriB','',10);
$pdf->SetXY(10, 75);
$pdf->MultiCell(0, 4, $content["organ"], 0,'L');
/*=========REG==========*/
$pdf->SetFont('CalibriB','',10);
$pdf->SetXY(10, 85);
$pdf->MultiCell(0, 3, $content["live"], 0,'L');

$pdf->Output();
