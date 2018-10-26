
<?php
include "koneksiDatabase.php";
$queryDataSingle = mysqli_query($connect,"select * from data where id_data='21'");
$isiDataSingle = mysqli_fetch_array($queryDataSingle);

include 'function.php';
echo '
<h3>Hasil</h3>
<h4>Nilai setiap alternatif di setiap kriteria</h4>
<table border="1">
<tr style="background-color: greenyellow">
<th rowspan="2">Alternantif</th>
<th colspan="5">Kriteria</th>
</tr>
<tr style="background-color: greenyellow">
<th>C1</th>
<th>C2</th>
<th>C3</th>
<th>C4</th>
<th>C5</th>
</tr>';?>

<?php
$kt=mysqli_query($connect,"SELECT * FROM kriteria");
$at=mysqli_query($connect,"SELECT * FROM alternatif");
$ckt=mysqli_num_rows($kt);
$cat=mysqli_num_rows($at);
$cc=mysqli_query($connect,"SELECT * FROM nilai");
$dd=mysqli_fetch_array($at);
$batas1 = $cat;
$batas2 = $ckt;
?>


<?php for ($i=1;$i<=$batas1;$i++){
  $rw=mysqli_fetch_array($at);

  ?>
  <tr style="background-color: yellow">
    <td align="center"><?php echo $rw['alternatif_kode']; ?></td>
    <?php    for ($j=1;$j<=$batas2;$j++){ ?>
      <td align="center">
        <?php 
        $row=mysqli_fetch_array($cc);
        echo $row['nilai'];  ?>
      </td>
    <?php } ?>

  </tr>
<?php  }

echo '</table><br/>

W1=' . $isiDataSingle['w1'] . ' 
W2=' . $isiDataSingle['w2'] . ' 
W3=' . $isiDataSingle['w3'] . ' 
W4=' . $isiDataSingle['w4'] . ' 
W5=' . $isiDataSingle['w5'] . ' 

<br/><br/>

Tipe Kriteria C1 = ' . $isiDataSingle['typec1'] . ' <br/>
Tipe Kriteria C2 = ' . $isiDataSingle['typec2'] . ' <br/>
Tipe Kriteria C3 = ' . $isiDataSingle['typec3'] . ' <br/>
Tipe Kriteria C4 = ' . $isiDataSingle['typec4'] . ' <br/>
Tipe Kriteria C5 = ' . $isiDataSingle['typec5'] . ' <br/>

<h4>Matriks ternormalisasi, R</h4>
<table class="tableMatrix">
<tr>
<td rowspan="3">R = </td>
<td rowspan="3"><img style="height:100px" src="kurungbuka.png"/></td>
<td style="padding-right:30px">' . $isiDataSingle['a1c1'] / $jumlahPangkatC1 . '</td>
<td style="padding-right:30px">' . $isiDataSingle['a1c2'] / $jumlahPangkatC2 . '</td>
<td style="padding-right:30px">' . $isiDataSingle['a1c3'] / $jumlahPangkatC3 . '</td>
<td style="padding-right:30px">' . $isiDataSingle['a1c4'] / $jumlahPangkatC4 . '</td>
<td>' . $isiDataSingle['a1c5'] / $jumlahPangkatC5 . '</td>
<td rowspan="3"><img style="height:100px" src="kurungtutup.png"/></td>
</tr>
<tr>
<td style="padding-right:30px">' . $isiDataSingle['a2c1'] / $jumlahPangkatC1 . '</td>
<td style="padding-right:30px">' . $isiDataSingle['a2c2'] / $jumlahPangkatC2 . '</td>
<td style="padding-right:30px">' . $isiDataSingle['a2c3'] / $jumlahPangkatC3 . '</td>
<td style="padding-right:30px">' . $isiDataSingle['a2c4'] / $jumlahPangkatC4 . '</td>
<td>' . $isiDataSingle['a2c5'] / $jumlahPangkatC5 . '</td>
</tr>
<tr>
<td style="padding-right:30px">' . $isiDataSingle['a3c1'] / $jumlahPangkatC1 . '</td>
<td style="padding-right:30px">' . $isiDataSingle['a3c2'] / $jumlahPangkatC2 . '</td>
<td style="padding-right:30px">' . $isiDataSingle['a3c3'] / $jumlahPangkatC3 . '</td>
<td style="padding-right:30px">' . $isiDataSingle['a3c4'] / $jumlahPangkatC4 . '</td>
<td>' . $isiDataSingle['a3c5'] / $jumlahPangkatC5 . '</td>
</tr>
</table>

<h4>Matriks ternormalisasi terbobot, Y</h4>
<table class="tableMatrix">
<tr>
<td rowspan="3">Y = </td>
<td rowspan="3"><img style="height:100px" src="kurungbuka.png"/></td>
<td style="padding-right:30px">' . $isiDataSingle['a1c1'] / $jumlahPangkatC1 * $isiDataSingle['w1'] . '</td>
<td style="padding-right:30px">' . $isiDataSingle['a1c2'] / $jumlahPangkatC2 * $isiDataSingle['w2'] . '</td>
<td style="padding-right:30px">' . $isiDataSingle['a1c3'] / $jumlahPangkatC3 * $isiDataSingle['w3'] . '</td>
<td style="padding-right:30px">' . $isiDataSingle['a1c4'] / $jumlahPangkatC4 * $isiDataSingle['w4'] . '</td>
<td>' . $isiDataSingle['a1c5'] / $jumlahPangkatC5 * $isiDataSingle['w5'] . '</td>
<td rowspan="3"><img style="height:100px" src="kurungtutup.png"/></td>
</tr>
<tr>
<td style="padding-right:30px">' . $isiDataSingle['a2c1'] / $jumlahPangkatC1 * $isiDataSingle['w1'] . '</td>
<td style="padding-right:30px">' . $isiDataSingle['a2c2'] / $jumlahPangkatC2 * $isiDataSingle['w2'] . '</td>
<td style="padding-right:30px">' . $isiDataSingle['a2c3'] / $jumlahPangkatC3 * $isiDataSingle['w3'] . '</td>
<td style="padding-right:30px">' . $isiDataSingle['a2c4'] / $jumlahPangkatC4 * $isiDataSingle['w4'] . '</td>
<td>' . $isiDataSingle['a2c5'] / $jumlahPangkatC5 * $isiDataSingle['w5'] . '</td>
</tr>
<tr>
<td style="padding-right:30px">' . $isiDataSingle['a3c1'] / $jumlahPangkatC1 * $isiDataSingle['w1'] . '</td>
<td style="padding-right:30px">' . $isiDataSingle['a3c2'] / $jumlahPangkatC2 * $isiDataSingle['w2'] . '</td>
<td style="padding-right:30px">' . $isiDataSingle['a3c3'] / $jumlahPangkatC3 * $isiDataSingle['w3'] . '</td>
<td style="padding-right:30px">' . $isiDataSingle['a3c4'] / $jumlahPangkatC4 * $isiDataSingle['w4'] . '</td>
<td>' . $isiDataSingle['a3c5'] / $jumlahPangkatC5 * $isiDataSingle['w5'] . '</td>
</tr>
</table>

<h4>Solusi Ideal Positif (A<sup>+</sup>):</h4>
y<sub>1</sub><sup>+</sup> = '.$statusy1.'{' . $y1a . '; ' . $y1b . '; ' . $y1c . '}=' . $y1 . '<br/>
y<sub>2</sub><sup>+</sup> = '.$statusy2.'{' . $y2a . '; ' . $y2b . '; ' . $y2c . '}=' . $y2 . '<br/>
y<sub>3</sub><sup>+</sup> = '.$statusy3.'{' . $y3a . '; ' . $y3b . '; ' . $y3c . '}=' . $y3 . '<br/>
y<sub>4</sub><sup>+</sup> = '.$statusy4.'{' . $y4a . '; ' . $y4b . '; ' . $y4c . '}=' . $y4 . '<br/>
y<sub>5</sub><sup>+</sup> = '.$statusy5.'{' . $y5a . '; ' . $y5b . '; ' . $y5c . '}=' . $y5 . '<br/><br/>
A<sup>+</sup> = {' . $y1 . '; ' . $y2 . '; ' . $y3 . '; ' . $y4 . '; ' . $y5 . '; }<br/>

<h4>Solusi Ideal Negatif (A<sup>-</sup>):</h4>
y<sub>1</sub><sup>-</sup> = '.$status2y1.'{' . $y1a . '; ' . $y1b . '; ' . $y1c . '}=' . $y1m . '<br/>
y<sub>2</sub><sup>-</sup> = '.$status2y2.'{' . $y2a . '; ' . $y2b . '; ' . $y2c . '}=' . $y2m . '<br/>
y<sub>3</sub><sup>-</sup> = '.$status2y3.'{' . $y3a . '; ' . $y3b . '; ' . $y3c . '}=' . $y3m . '<br/>
y<sub>4</sub><sup>-</sup> = '.$status2y4.'{' . $y4a . '; ' . $y4b . '; ' . $y4c . '}=' . $y4m . '<br/>
y<sub>5</sub><sup>-</sup> = '.$status2y5.'{' . $y5a . '; ' . $y5b . '; ' . $y5c . '}=' . $y5m . '<br/><br/>
A<sup>-</sup> = {' . $y1m . '; ' . $y2m . '; ' . $y3m . '; ' . $y4m . '; ' . $y5m . '; }<br/>

<h4>Jarak antara nilai terbobot setiap alternatif terhadap solusi ideal positif, S<sub>i<sup>+</sup></sub></h4>
D<sub>1<sup>+</sup></sub> = ' . $d1 . '<br/>
D<sub>2<sup>+</sup></sub> = ' . $d2 . '<br/>
D<sub>3<sup>+</sup></sub> = ' . $d3 . '<br/>

<h4>Jarak antara nilai terbobot setiap alternatif terhadap solusi ideal negatif, S<sub>i<sup>-</sup></sub></h4>
D<sub>1<sup>-</sup></sub> = ' . $d1m . '<br/>
D<sub>2<sup>-</sup></sub> = ' . $d2m . '<br/>
D<sub>3<sup>-</sup></sub> = ' . $d3m . '<br/>

<h4>Kedekatan setiap alternatif terhadap solusi ideal dihitung sebagai berikut</h4>
<table>
<tr>
<td rowspan="3">V<sub>1</sub></td>
<td rowspan="3">=</td>
<td align="center">' . $d1m . '</td>
<td rowspan="3">=</td>
<td align="center" rowspan="3">' . $d1m / ($d1 + $d1m) . '</td>
</tr>
<tr>
<td style="padding:0"><hr/></td>
</tr>
<tr>
<td align="center">' . $d1 . '+' . $d1m . '</td>
</tr>
</table>
<br/>
<table>
<tr>
<td rowspan="3">V<sub>2</sub></td>
<td rowspan="3">=</td>
<td align="center">' . $d2m . '</td>
<td rowspan="3">=</td>
<td align="center" rowspan="3">' . $d2m / ($d2 + $d2m) . '</td>
</tr>
<tr>
<td style="padding:0"><hr/></td>
</tr>
<tr>
<td align="center">' . $d2 . '+' . $d2m . '</td>
</tr>
</table>
<br/>
<table>
<tr>
<td rowspan="3">V<sub>3</sub></td>
<td rowspan="3">=</td>
<td align="center">' . $d3m . '</td>
<td rowspan="3">=</td>
<td align="center" rowspan="3">' . $d3m / ($d3 + $d3m) . '</td>
</tr>
<tr>
<td style="padding:0"><hr/></td>
</tr>
<tr>
<td align="center">' . $d3 . '+' . $d3m . '</td>
</tr>
</table>

<h3 style="color:green">Alternatif yang dipilih : Alternatif yang ' . $alternatif . ' = ' . $hasil . '</h3>';

?>
<br/>