<!DOCTYPE html>
<html lang="en">
<head>
    <center>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kode Pegawai</title>


    <style>
        body{
           background-color: pink;
           font-family: Arial, sans-serif;
           padding: 80px;
        }

        form {
            width: 300px;
            margin: 5px;
            padding: 30px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f5f5f5;
            }

        table {
            width: 100%;
            margin-top: 5px;
        }

        input[type="number"] {
            text-align: center; 
        }

        td {
            padding: 8px;
            text-align: center;
        }

        input[type="submit"] {
            padding: 8px 20px;
            background-color: #EA1179;
            color: pink;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            margin-left: -280px;
        }

        .besar {
            font-size: 13px; 
            color: #fff; 
        }
            
        
       .gradasi {
            background: linear-gradient(to right, #ff6600, #ff3399); 
            padding: 10px; 
            border-radius: 5px; 
            width: 280px;
            height: 35px;
         }
    </style>
    
</head>
<body>
    <form action= "" method=post>
        <table>
        <tr>
           
            <div style="text-align: center;">
             <h2>Input Kode Pegawai</h2>
            </div>
            <td><input type="number" name="kode"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="cari" name= "submit"></td>
        </tr>
        </table>
    </form>

    <?php
    $kode_pegawai;
    $no_golongan;
    $tanggal;
    $bulan;
    $tahun;
    $no_urutan;
    $tanggal_lahir;

    if(isset($_POST['submit'])){
        $kode_pegawai=$_POST['kode'];

        $no_golongan=substr($kode_pegawai,0,1);
        $tanggal=substr($kode_pegawai,1,2);
        $bulan=substr($kode_pegawai,3,2);
        $tahun=substr($kode_pegawai,5,4);
        $no_urutan=substr($kode_pegawai,9,2);


        if ($kode_pegawai < 11){
            echo"no pegawai tidak sesuai";
        }else if ($bulan=="01"){
            $bulan = "Januari";
        } else if($bulan =="02"){
           $bulan = "Februari";
        } else if($bulan =="03"){
           $bulan = "Maret";
        } else if ($bulan =="04"){
           $bulan = "April";
        } else if ($bulan =="05"){
           $bulan =  "Mei";
        } else if ($bulan =="06"){
           $bulan = "Juni";
        } else if ($bulan =="07"){
           $bulan = "Juli";
        } else if ($bulan =="08"){
           $bulan = "Agustus";
        } else if ($bulan =="09"){
           $bulan = "Semptember";
        } else if ($bulan =="10"){
           $bulan = "Oktober";
        } else if($bulan =="11"){
           $bulan =  "november";
        } else {
           $bulan = "Desember";
        }

    
        echo"<br>";
        echo"<br>";
        
        $tanggal_lahir = " Tanggal " . $tanggal . " Bulan " . $bulan . " Tahun " . $tahun;
        echo "<div class='gradasi besar'>Kode Pegawai : " . $kode_pegawai . "</div></br>";
        echo "<div class='gradasi besar'>Nomor Golongan : " . $no_golongan . "</div></br>";
        echo "<div class='gradasi besar'>Tanggal Lahir : " . $tanggal_lahir . "</div></br>";
        echo "<div class='gradasi besar'>Nomor Urutan : " . $no_urutan . "</div></br>";
        


    }
    ?>
    </center>
</body>
</html>