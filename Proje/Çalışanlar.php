<!DOCTYPE html>
<html>
    <head>
        <Style>
#people {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#people td, #people th {
  border: 1px solid #ddd;
  padding: 8px;
}

#people tr:nth-child(even){background-color: #f2f2f2;}

#people tr:hover {background-color: #ddd;}

#people th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #1e90ff;
  color: white;
}

</style>
</head>

<head>
    <style>

body {
    margin: 0;
}

ul {
    list-style-type: none;

    margin: 0;

    padding: 0;

    width: 20%;

    background-color: #f1f1f1;

    position: fixed;

    height: 100%;

    overflow: auto;
}

li a {
    display: block;

    color: #1c1c1c;

    padding: 8px 16px;

    text-decoration: none;
}

li a.active {
    background-color: #000080;

    color: white;
}

li a:hover:not(.active) {
    background-color: #555;

    color: white;
}
</style>
<ul>
    <li><a class="active" href="Çalışanlar.php">Çalışan Bilgileri</a></li>
</ul>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
<h2>Aktif Çalışanlarımız</h2>
</ul>

<table id="people">
  <tr>
    <th>Ad Soyad</th>
    <th>Telefon</th>
    <th>Email</th>
  </tr>

</html>

<?php 
include("baglanti.php");
$sec="Select * From calisanlar";
$sonuc=$baglan->query($sec);

if($sonuc->num_rows>0)
{
    while($cek=$sonuc->fetch_assoc())
    {
        echo "
        <tr>
    <td>".$cek['adsoyad']."</td>
    <td>".$cek['telefon']."</td>
    <td>".$cek['email']."</td>

  </tr>
        
        ";
    }
}

else
{
    echo "Veritabanında kayıtlı veri bulunamadı";
}

?>
  
</table>
</body> 
</html>