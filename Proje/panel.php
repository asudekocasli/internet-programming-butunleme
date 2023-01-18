<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #1e90ff;
  color: white;
}

</style>
</head>
<!DOCTYPE html>
<html>
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
    <li><a class="active" href="panel.php">İstekler|Şikayetler</a></li>
</ul>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
</ul>
<body>

<h1><b>Balıkesir Büyükşehir Belediyesi</b></h1>
<h1>İstekler|Şikayetler</h1>

<table id="customers">
  <tr>
    <th>Ad Soyad</th>
    <th>Telefon</th>
    <th>Email</th>
    <th>Konu</th>
    <th>Mesaj</th>
  </tr>

  <?php


    session_start();
    if($_SESSION["user"]=="")
    {

      echo "<script>window.location.href='cikis.php'</script>";

    }

    else
    {
      echo"Hoşgeldin :".$_SESSION['user']."<br>";
      echo "<a href='cikis.php'>Çıkış Yap</a><br><br>";
      include("baglanti.php");
    }


$sec="Select * From iletisim";
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
    <td>".$cek['konu']."</td>
    <td>".$cek['mesaj']."</td>

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


