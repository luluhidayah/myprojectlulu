<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Genre</title>
</head>
<body>
        <h1> Data Genre </h1>
        <table border="1" cellspacing="0">">
                <tr>
                <th>No</th>
                <th>Nama Genre</th>
                <th>Created_at</th>
                <th>Updated_at</th>
                </tr>

                <?php $i = 1;
                foreach ($genres as $genre) : ?>
                <tr>
                <td></td>          
                <td> <?php echo $genre['nama_genre']; ?></td>
                <td><?= $genre['created_at']; ?></td>
                <td><?= $genre['updated_at']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
</body>
</html>