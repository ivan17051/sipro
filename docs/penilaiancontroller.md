## Penilaian Controller

:date: posted\: 06-04-2022

:memo: last updated\: 11-04-2022

:house: [to home](https://github.com/ivan17051/PAKFungsional/blob/master/README.md)

#### Contents

- [index](#index)
- [data](#data)
- [storeUpdate](#storeupdate)
- [delete](#delete)
- [cetak](#cetak)

## index 
Menampilkan halaman Penilaian kosong.

#### Return Value
[Penilaian View](https://github.com/ivan17051/PAKFungsional/blob/master/resources/views/penilaian.blade.php)<br>
with:<br>
&emsp;&emsp;[UnitKerja](https://github.com/ivan17051/PAKFungsional/blob/master/app/UnitKerja.php): Collections<br>
&emsp;&emsp;[Golongan](https://github.com/ivan17051/PAKFungsional/blob/master/app/Golongan.php): Collections<br>
&emsp;&emsp;[Jabatan](https://github.com/ivan17051/PAKFungsional/blob/master/app/Jabatan.php): Collections<br>
&emsp;&emsp;[Pendidikan](https://github.com/ivan17051/PAKFungsional/blob/master/app/Pendidikan.php): Collections<br>

:cyclone: [to top](#contents)

## data
Menarik data Penilaian dari tabel **penilaian** dan menghasilkan queri _Datatable server side_.

#### Parameters
Request

#### Return Value
Datatables

:cyclone: [to top](#contents)

## storeUpdate
Menyimpan data Penilaian baru atau data Penilaian yang diubah.

#### Parameters
Request

#### Return Value
Redirect

:cyclone: [to top](#contents)

## delete
Menghapus data Penilaian dari tabel **penilaian**.

#### Parameters
Request

#### Return Value
Redirect

:cyclone: [to top](#contents)

## cetak
Menampilkan surat PAK yang dapat diprint.

#### Parameters
Request, idpenilaian: [Penilaian](https://github.com/ivan17051/PAKFungsional/blob/master/app/Penilaian.php)

#### Return Value
[Report PAK View](https://github.com/ivan17051/PAKFungsional/blob/master/resources/views/report/pak.blade.php)<br>
with:<br>
&emsp;&emsp;[Penilaian](https://github.com/ivan17051/PAKFungsional/blob/master/app/Penilaian.php): Collections<br>
&emsp;&emsp;Nomor: Input<br>
&emsp;&emsp;Tipe: Pilihan Surat<br>
&emsp;&emsp;Masa Kerja: <br>

:cyclone: [to top](#contents)