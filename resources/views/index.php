<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="siswa">
        <h2>Siswa</h2>
        <?php if(!empty($siswa)){?>
        <ul>
            <?php foreach($siswa as $anak) {?>
            <li><?php echo $anak?></li>
            }
        </ul>
        <?php}else{?>
        <p>Tidak ada data siswa</p>
        <?php}?>
    </div>
</body>
</html>