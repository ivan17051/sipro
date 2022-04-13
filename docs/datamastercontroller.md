## Data Master Controller

:date: posted\: 06-04-2022

:memo: last updated\: 06-04-2022

:house: [to home](https://github.com/ivan17051/PAKFungsional/blob/master/README.md)

#### Contents

| **Base**                   | **Store and Update**    
|----------------------------|-------------------------
| [unitKerja](#viewdata)     |                         
| [jabatan](#viewdata)       | [storeUpdateJabatan](#createupdatedata)   
| [golongan](#viewdata)      | [storeUpdateGolongan](#createupdatedata)
| [pegawai](#viewdata)       | [storeUpdatePegawai](#createupdatedata)   
| [pendidikan](#viewdata)    | [storeUpdatePendidikan](#createupdatedata)    
  

## ViewData
Menampilkan halaman dengan isi tabel sesuai dengan data yang dipilih _user_

#### Parameters

#### Return Value
[View Master Data](https://github.com/ivan17051/PAKFungsional/blob/master/resources/views/masterData)<br>
with:<br>
&emsp;&emsp;[Modal Data Master](https://github.com/ivan17051/PAKFungsional/blob/master/app): Collections<br>

:cyclone: [to top](#contents)

## CreateUpdateData
Menyimpan data yang sudah diinputkan atau diubah oleh _user_

#### Parameters
Request

#### Return Value
Redirect<br>
with:<br>
&emsp;&emsp;Success/Error: Alert<br>

:cyclone: [to top](#contents)