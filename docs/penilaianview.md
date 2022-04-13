## Penilaian View

:date: posted\: 06-04-2022

:memo: last updated\: 11-04-2022

:house: [to home](https://github.com/ivan17051/PAKFungsional/blob/master/README.md)

#### Contents

- [showInfoLama](#showinfolama)
- [setMasaKerja](#setmasakerja)
- [tambah](#tambah)
- [show](#show)
- [edit](#edit)
- [showTable](#showtable)
- [callback](#callback)
- [showCetak](#showcetak)

## showInfoLama
Menampilkan dan menge-_set_ data unit kerja, pendidikan, jabatan, dan golongan pegawai dengan data saat ini.

#### Parameters
data: 

#### Return Value
Show Modal Tambah<br>

:cyclone: [to top](#contents)

## setMasaKerja
Menge-_set_ data Masa Kerja dengan data saat ini.

#### Parameters
mk: <br>
mkold: <br>
readOnlyOld: <br>
readonly: <br>

#### Return Value
Show Modal Tambah<br>

:cyclone: [to top](#contents)

## tambah
Menampilkan modal untuk menambahkan data penilaian.

#### Parameters

#### Return Value
Show Modal Tambah<br>

:cyclone: [to top](#contents)

## show
Menampilkan data penilaian dari baris yang dipilih.

#### Parameters
self: Self

#### Return Value
Show Modal Edit<br>

:cyclone: [to top](#contents)

## edit
Menampilkan tombol edit dan meng-_enable_ form user untuk mengubah data yang sudah ditampilkan.

#### Parameters
self: Self

#### Return Value
Value: Attribute<br>

:cyclone: [to top](#contents)

## showTable
Menampilkan tabel yang berisi data penilaian dari pegawai yang dipilih.

#### Parameters
id: 

#### Return Value
Swal: Modal<br>
with:<br>
&emsp;&emsp;Form Acc: Submit<br>

:cyclone: [to top](#contents)

## callback
Menge-_set_ _session_ dan tampilan _input_ _field_ dengan data pegawai dipilih.

#### Parameters
item: Collection

#### Return Value
Show Modal Penilaian <br>

:cyclone: [to top](#contents)

## showCetak
Mencetak laporan sesuai dengan permintaan _user_.

#### Parameters
self, idpenilaian

#### Return Value
Show Modal Cetak<br>

:cyclone: [to top](#contents)