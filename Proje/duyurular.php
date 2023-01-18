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
    <li><a class="active" href="duyurular.php">Duyurular|Etkinlikler</a></li>
</ul>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
<h2>Duyurular|Etkinlikler</h2>
</ul>

<table id="people">
  <tr>
    <th>Etkinlik Adı</th>
    <th>Etkinlik Yeri</th>
    <th>Etkinlik Zamanı</th>
  </tr>

</html>

<?php 
include("baglanti.php");
$sec="Select * From duyurular";
$sonuc=$baglan->query($sec);

if($sonuc->num_rows>0)
{
    while($cek=$sonuc->fetch_assoc())
    {
        echo "
        <tr>
    <td>".$cek['etkinlikad']."</td>
    <td>".$cek['etkinlikyer']."</td>
    <td>".$cek['etkinlikzaman']."</td>

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