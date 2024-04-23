<?php
// Phan tich so nguyen n thanh cac thua so nguyen to
$n = 0;
if (isset($_POST['n'])) {
    $n = $_POST['n'];
}

function phanTichSoNguyen($n)
{
    $i = 2;
    $arrNumbers = array();
    $arrNumbers[0] = "";
    $count = 0;
    // Phan tich so nguyen n thanh tich cac so ngto
    while ($n > 1) {
        if ($n % $i == 0) {
            $n = floor($n / $i);
            $arrNumbers[$count] = $i;
            $count += 1;
        } else {
            $i++;
        }
    }
    // neu listNumbers trong thi add n vao listNumbers
    if ($arrNumbers[0] == "") {
        $arrNumbers[0] = $n;
    }
    return $arrNumbers;
}

?>
<form action="#" method="post">
    <table>
        <tr>
            <td>Nhap so nguyen : </td>
            <td><input type="text" name="n" id="" value="<?= $n ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="phan tich"></td>
        </tr>
    </table>
</form>
<?php
if (filter_var($n, FILTER_VALIDATE_INT)) {
    // Phan tich so nguyen duong n
    $arrNumbers = phanTichSoNguyen($n);
    // In ket qua ra man hinh
    echo ("Ket qua : $n = ");
    $size = count($arrNumbers);
    // Hien thi cac phan tu cua mang
    for ($i = 0; $i < $size - 1; $i++) {
        echo "$arrNumbers[$i] x ";
    }
    echo $arrNumbers[$size - 1];
    
} else {
    echo 'Gia tri khong hop le !!!';
}
?>