<?php
// membuat instance
$dataPaket=NEW Paket;
// aksi tampil data
if($_GET['aksi']=='tampil'){
// aksi untuk tampil data
$html = null;
$html .='<center><br/> <h3>Data Paket</h3>';
$html .='<table border="1" width="50%" class="table table-striped">
<br/>
<thead class="thead-dark">
<th>No Paket</th>
<th>Nama Penerima</th>
<th>Alamat Penerima</th>
<th>No Telepon Penerima</th>
<th>Nama Pengirim</th>
<th>Alamat Pengirim</th>
<th>Harga</th>
<th>Action</th>
</thead>
<tbody>';
// variabel $data menyimpan hasil return
$data = $dataPaket->tampil();
$no=null;
if(isset($data)){
foreach($data as $barisSiswa){
$no++;
$html .='<tr>
<td>'.$barisSiswa->no_paket.'</td>
<td>'.$barisSiswa->nama_penerima.'</td>
<td>'.$barisSiswa->alamat_penerima.'</td>
<td>'.$barisSiswa->no_telepon.'</td>
<td>'.$barisSiswa->nama_pengirim.'</td>
<td>'.$barisSiswa->alamat_pengirim.'</td>
<td>'.$barisSiswa->harga.'</td>
<td>
<a href="index.php?file=paket&aksi=edit&no_paket='.$barisSiswa->no_paket.'">Edit</a>
<a href="index.php?file=paket&aksi=hapus&no_paket='.$barisSiswa->no_paket.'">Hapus</a>
</td></tr>';
}
}
$html .='</tbody> </table>';
echo $html;
}
// aksi tambah data
else if ($_GET['aksi']=='tambah') {
$html =null;
$html .='<h3>Form Tambah Paket</h3>';
$html .='<p>Silahkan masukan data paket</p>';
$html .='<form method="POST" action="index.php?file=paket&aksi=simpan" class="form-group">';
$html .='<p>Nomor Paket<br/>';
$html .='<input type="text"  name="txtnopaket" placeholder="Masukan No. Paket"  autofocus/></p>';
$html .='<p>Nama Penerima<br/>';
$html .='<input type="text"  name="txtNama" placeholder="Masukan Nama Penerima" size="30"  required/></p>';
$html .='<p>Alamat Penerima<br/>';
$html .='<textarea  name="txtalamatpenerima" placeholder="Masukan Alamat Lengkap" cols="50" rows="5" required/></textarea></p>';
$html .='<p>No Telepon<br/>';
$html .='<input type="text"  name="txtnotelepon" placeholder="Masukan No Telepon Penerima" size="30" required/></p>';
$html .='<p>Nama Pengirim<br/>';
$html .='<input type="text"  name="txtnamapengirim" placeholder="Masukan Nama Pengirim" size="30" required/></p>';
$html .='<p>Alamat Pengirim<br/>';
$html .='<textarea  name="txtAlamatpengirim" placeholder="Masukan alamat pengirim" cols="50" rows="5" required></textarea></p>';
$html .='<p>Harga<br/>';
$html .='<input type="text" name="txtharga" placeholder="Masukan Harga" size="30" required/></p>';
$html .='<p><input type="submit" name="tombolSimpan" value="Simpan"/></p>';
$html .='</form>';
echo $html;
}
// aksi tambah data
else if ($_GET['aksi']=='simpan') {
$data=array(
'no_paket'=>$_POST['txtnopaket'],
'nama_penerima'=>$_POST['txtNama'],
'alamat_penerima'=>$_POST['txtalamatpenerima'],
'no_telepon'=>$_POST['txtnotelepon'],
'nama_pengirim'=>$_POST['txtnamapengirim'],
'alamat_pengirim'=>$_POST['txtAlamatpengirim'], 
'harga'=>$_POST['txtharga'] 
);
// simpan siswa dengan menjalankan method simpan
$dataPaket->simpan($data);
echo '<meta http-equiv="refresh" content="0;
url=index.php?file=paket&aksi=tampil">';
}
// aksi tambah data
else if ($_GET['aksi']=='edit') {
// ambil data siswa
    $paket=$dataPaket->detail($_GET['no_paket']);
    $html =null;
    $html .='<h3>Form Tambah</h3>';
    $html .='<p>Silahkan masukan form </p>';
    $html .='<form method="POST" action="index.php?file=paket&aksi=update">';
    $html .='<p>Nomor Paket<br/>';
    $html .='<input type="text" name="txtnopaket" value="'.$paket->no_paket.'"  placeholder="Masukan No. Paket" autofocus/></p>';
    $html .='<p>Nama Penerima<br/>';
    $html .='<input type="text" name="txtNama" value="'.$paket->nama_penerima.'" placeholder="Masukan Nama Penerima" size="30" required/></p>';
    $html .='<p>Alamat Penerima<br/>';
    $html .='<textarea name="txtalamatpenerima" value="" placeholder="Masukan Alamat Lengkap" cols="50" rows="5" required/> '.$paket->alamat_penerima.'</textarea></p>';
    $html .='<p>No Telepon<br/>';
    $html .='<input type="text" name="txtnotelepon" value="'.$paket->no_telepon.'" placeholder="Masukan No Telepon Penerima" size="30" required/></p>';
    $html .='<p>Nama Pengirim<br/>';
    $html .='<input type="text" name="txtnamapengirim" value="'.$paket->nama_pengirim.'" placeholder="Masukan Nama Penngirim" size="30" required/></p>';
    $html .='<p>Alamat Pengirim<br/>';
    $html .='<textarea name="txtAlamatpengirim" value="" placeholder="Masukan alamat pengirim" cols="50" rows="5" required>'.$paket->alamat_pengirim.'</textarea></p>';
    $html .='<p>Harga<br/>';
    $html .='<input type="text" name="txtharga" value="'.$paket->harga.'" placeholder="Masukan Harga" size="30" required/></p>';
    $html .='<p><input type="submit" name="tombolSimpan" value="Simpan"/></p>';
    $html .='</form>';
    echo $html;
    }
    // aksi tambah data
    else if ($_GET['aksi']=='update') {
    $data=array(
    'no_paket'=>$_POST['txtnopaket'],
    'nama_penerima'=>$_POST['txtNama'],
    'alamat_penerima'=>$_POST['txtalamatpenerima'],
    'no_telepon'=>$_POST['txtnotelepon'],
    'nama_pengirim'=>$_POST['txtnamapengirim'],
    'alamat_pengirim'=>$_POST['txtAlamatpengirim'], 
    'harga'=>$_POST['txtharga'] 
);
$dataPaket->update($_POST['txtnopaket'],$data);
echo '<meta http-equiv="refresh" content="0;
url=index.php?file=paket&aksi=tampil">';

}
// aksi tambah data
else if ($_GET['aksi']=='hapus') {
$dataPaket->hapus($_GET['no_paket']);
echo '<meta http-equiv="refresh" content="0;
url=index.php?file=paket&aksi=tampil">';
}
// aksi tidak terdaftar
else {
echo '<p>Error 404 : Halaman tidak ditemukan !</p>';
}
?>