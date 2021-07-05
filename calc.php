<?php

$data = $_POST['date'];
$sumvkl = $_POST['sumvkl'];
$srok = $_POST['srok'];
$popnal = $_POST['radio'];
$summadd = $_POST['sumpop'];

$summ = 0;

$detenov = date("d/m/Y");
$y_data = substr ($data, 6);
$d_data = substr ($data, 3, 2);
$m_data = substr ($data, 0, 2);

$dayall = (date("Y")-$y_data)*365 + (date("m")-$m_data)*30 + (date("d")-$d_data);
$month = (date("Y")-$y_data)*12 + (date("m")-$m_data);
if (date("d") < $d_data) {
    $month--;
}

if ($popnal==0) {
    $summ=$sumvkl*($dayall/365*0.1)+$sumvkl;
    if ($dayall>$srok*365) {
        $summ=$sumvkl*($srok*0.1)+$sumvkl;
    }
}
else {
    $summ = $sumvkl;
    if ($dayall>$srok*365) {
        $month = $srok*12;
    }
    for ($i=$month; $i > 0; $i--) { 
        $summ=$summ+$summadd+($summ+$summadd)*0.1/12;
    }
}

$summ = number_format($summ, 0, '.', '');



?>
