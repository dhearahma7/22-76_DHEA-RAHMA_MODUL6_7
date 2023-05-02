<!doctype html>
<html>
<head>
    <title>Kalkulator Sederhana</title>
    <link rel="stylesheet" type="text/css" href="kal2.css">
</head>

<body>

    <form  action="" method="post">
    <div class="bingkai">
		<h1 class="judul"> <b> KALKULATOR </b> </h1>
        Angka 1 <input type="text" name="angka1" autocomplete="off" class="textarea"> <br>
        <br>Angka 2 <input type="text" name="angka2" autocomplete="off" class="textarea"> <br>
        <br>Operator <select name="operator" id="">
            <option  value="+">+</option>
            <option  value="-">-</option>
            <option  value="x">x</option>
            <option  value="/">/</option>
        </select><br>
        <button type="submit" name="eksekusi" class="finish" align="center" >ekseskusi</button>
    </form><br>
    <?php
        if(isset($_POST['eksekusi'])){
            $angka1 = $_POST['angka1'];
            $angka2 = $_POST['angka2'];
            $operator = $_POST['operator'];
          

            //pejumlahan
            if ($operator == "+"){
                $hasil = $angka1 + $angka2;
            }

            //pengurangan
            else if ($operator == "-"){
                $hasil = $angka1 - $angka2;
            }

            //perkalian
            else if ($operator == "x"){
                $hasil = $angka1 * $angka2;
            }

            //pembagian 
            else if ($operator == "/"){
                if ($angka2 == 0) {
                    echo "tidak bisa dibagi nol";
                }
                else{
                    $hasil = $angka1 / $angka2;}
            }

            
            
            echo "$angka1 $operator $angka2 <br>";
          
        }
        
        
    ?>
    <br>
    Hasil   = <input type="text" value="<?php echo $hasil; ?>" class="hasil"/>
