<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Sayuran</title>
</head>
<body>
    <h1> Data Sayuran </h1>
    <table border="1" cellspacing="0">
        <tr>
            <th>Nama Sayur</th>
            <th>price</th>
            <th>satuan</th>
        </tr>  
        
        <?php foreach ($sayurs as $sayur) : ?>
            <tr>
                <td><?= $sayur['nama_sayur']; ?></td>
                <td><?= $sayur['price']; ?></td>
                <td><?= $sayur['satuan']; ?></td>
        </tr>
        <?php endforeach; ?>

    </table>
            
</body>
</html>