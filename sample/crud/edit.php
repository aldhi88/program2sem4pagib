<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
</head>
<body>
    
    <form action="action/ac_index.php" method="POST" enctype="multipart/form-data">

        <table>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td>
                    <input value="123" readonly type="text" name="nim">
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <input value="Budi" type="text" name="nama">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>
                    <textarea name="alamat" cols="30" rows="5">alamat</textarea>
                </td>
            </tr>
            <tr>
                <td>HP</td>
                <td>:</td>
                <td>
                    <input value="081234341" type="text" name="hp">
                </td>
            </tr>
            <tr>
                <td>Photo</td>
                <td>:</td>
                <td>
                    <input type="file" name="photo">
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <br><br>
                    <button type="submit">Ubah Data Mahasiswa</button>
                </td>
            </tr>
        </table>

    </form>

</body>
</html>