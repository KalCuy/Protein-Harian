<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protein</title>
</head>
<body>
    <?php
        if(isset($_POST['submit'])) {
            $berat = $_POST['berat'];
            $Aktivitas = $_POST['Aktivitas'];
            $total_protein = $berat * $Aktivitas;
            
            echo "<h2>Kebutuhan Protein :</h2>"; 
            echo "Berat Badan : ".$berat." kg";
            echo "<br>";
            echo "Aktivitas anda : ".$Aktivitas."";
            echo "<br>";
            echo "Protein Harian : ".$total_protein." gram";
        }
    ?> 
</body>
</html>