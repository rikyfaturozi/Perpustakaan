<!DOCTYPE html>
<html>
<head>
	<title>Tampilan Data Matakuliah</title>
</head>
<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    Tampilan Data Matakuliah
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td> 
            </tr>
            <tr>
                <th>KODE MATAKULIAH</th>
                <th> : </th>
                <td>
                    <?= $kode; ?>
                </td>    
            </tr>
            <tr>
                <td>NAMA MATAKULIAH</td>
                <td> : </td>
                <td>
                    <?= $nama; ?>
                </td>    
            </tr>
            <td>SKS</td>
                <td> : </td>
                <td>
                    <?= $sks; ?>
                </td>    
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<? base_url('matakuliah)'; ?>">Kembali</a>
                </td>
            </tr>
        </table>
    </center>                 
</body>
</html>
