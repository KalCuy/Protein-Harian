<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protein</title>
</head>
<body>
    <center>
    <h2>Kebutuhan Protein Harian</h2>
    <form method="post" action="proses.php">
        <label for="berat">berat badan :</label> 
        <input type="number" name="berat" required> <br><br>
        Aktivitas :
        <select name="Aktivitas">
            <option value="1.40">Nggak Olahraga</option>
            <option value="2.00">Olahraga ringan (4 hari sekali)</option> 
            <option value="3.40">Olahraga Berat (setiap hari)</option>
        </select><br><br>
        <input type="submit" name="submit">
    </form>
    </center>
</body>
</html>