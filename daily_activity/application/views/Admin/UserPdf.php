<!DOCTYPE html>
<html>
<head>
<style>
 div {
    -webkit-column-count: 3;
    -moz-column-count: 3;
    column-count: 3;
  }
</style>
<h2><center>Sasaran Kinerja Pegawai</center></h2>
<hr/>

<table border="1" width="100%">
<thead style="text-align:center;">
	<tr >
        <th>No</th>
        <th colspan = "2">Pejabat Penilai</th>
        <th>No</th>
        <th colspan = "5">Pejabat Yang Dinilai</th>                              
    </tr>
    </thead>
        <?php foreach ($user as $us) : ?>
        <tbody>                                                                                              
        <tr>
            <td>1</td>
            <td>Nama</td>
            <td>Syamsul Arifin</td>
            <td>1</td>
            <td>Nama</td>                                        
            <td colspan = "4"><?= $us->nama ?></td>                                        
        </tr>                                                                
        <tr>
            <td>2</td>
            <td>NIP</td>
            <td>19771101 200112 1 001</td>
            <td>2</td>
            <td>NIP</td>                                        
            <td colspan = "4"></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Jabatan</td>
            <td>Kepala UPT Perpustakaan</td>
            <td>3</td>
            <td>Jabatan</td>                                        
            <td colspan = "4"><?= $us->posisi ?></td>
        </tr>                                
        <tr>
            <td>4</td>
            <td>Unit Kerja</td>
            <td>Perpustakaan Polinema</td>
            <td>4</td>
            <td>Unit Kerja</td>                                        
            <td colspan = "4">Perpustakaan Polinema</td>
        </tr>
        </tbody>
        <?php endforeach; ?>
        <thead>
		    <tr>
                <th rowspan = "2">No</th>
                <th rowspan = "2" colspan = "2">Kegiatan Tugas Jabatan</th>
                <th rowspan = "2">AK</th>
                <th colspan = "5">Target</th>                              
            </tr>
            <tr>
                <th colspan = "2">Kuant/Output</th>
                <th>Kual/Mutu</th>
                <th>Waktu</th>
                <th>Biaya</th>
            </tr>
        </thead>   
        <tbody>
            <?php
            $no = 1;
            foreach ($skp as $sk) : ?>
            <tr>
                <td><?= $no++?></td>
                <td colspan = "2"><?= $sk->nama_tugas?></td>
                <td><?= $sk->AK?></td>
                <td><?= $sk->kuantitas?></td>
                <td><?= $sk->satuan_hasil?></td>
                <td>100</td>
                <td><?= $sk->waktu?></td>
                <td>-</td>
            </tr>
            <?php endforeach ; ?>
        </tbody>
</table>
<div>
<br><br>
<p>
Pejabat Penilai<br>
Kepala UPT Perpustakaan Polinema<br><br><br><br><br>

Syamsul Arifin<br>
NIP. 19771101 200112 1 001
</p>
</div>
</body>
</html>