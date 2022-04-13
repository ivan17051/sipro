@extends('layouts.layout')

@section('title')
Penilaian
@endsection

@section('penilaianStatus')
active
@endsection

@section('content')
@include('component.searchpegawai')
<!-- Modal Tambah -->
<div class="modal fade text-left modal-borderless" id="tambah" tabindex="-1"
    role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Penilaian</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="{{route('penilaian.update')}}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="id">
            <input type="hidden" name="idpegawai">
            <div class="modal-body accordion accordion-flush" id="nilai">
                <div class="form-body">
                    <div class="row" >
                        <div class="col-12 btn text-start" data-bs-toggle="collapse" data-bs-target="#nilai-mp" aria-expanded="false" aria-controls="nilai-mp">
                            <h6 class="m-0"><div class="num me-2">1</div>Masa Penilaian</h6>
                            <!-- <div class="form-check float-end">
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox1" class="form-check-input" checked="">
                                    <label for="checkbox1">digunakan*</label>
                                </div>
                            </div> -->
                        </div>
                        <div class="col-12 accordion-collapse collapse" id="nilai-mp" data-bs-parent="#nilai">
                            <br>
                            <div class="row">
                                <div class="col-md-6" >
                                    <div class="form-group">
                                        <label for="first-name-vertical">Sejak</label>
                                        <div class="form-group position-relative has-icon-left">
                                            <input type="month" name="sejak" class="form-control" role="new" required>
                                            <div class="form-control-icon">
                                                <i class="bi bi-calendar4-event"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="first-name-vertical">Hingga</label>
                                        <div class="form-group position-relative has-icon-left">
                                            <input type="month" name="hingga" class="form-control" role="new" required>
                                            <div class="form-control-icon">
                                                <i class="bi bi-calendar4-week"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12 btn text-start" data-bs-toggle="collapse" data-bs-target="#nilai-uk" aria-expanded="false" aria-controls="nilai-uk">
                            <h6 class="m-0"><div class="num me-2">2</div>Unit Kerja & Jabatan</h6>
                        </div>
                        <div class="col-12 accordion-collapse collapse" id="nilai-uk" data-bs-parent="#nilai">
                            <br>
                            <div class="row">
                                <div class="col-md-12" id="keterangan-uk">
                                    <table class="border table table-borderless" style="width:auto;">
                                        <tbody>
                                            <tr>
                                                <td colspan="2">Info Sebelumnya</td>
                                            </tr>
                                            <tr>
                                                <td class="align-top">Unit Kerja</td>
                                                <td data-isi="unitkerja" >: Puskesmas Tanjungsari</td>
                                            </tr>
                                            <tr>
                                                <td class="align-top">Pendidikan</td>
                                                <td data-isi="pendidikan">: Sekolah Perawat Kesehatan</td>
                                            </tr>
                                            <tr>
                                                <td class="align-top">Golongan</td>
                                                <td data-isi="golongan">: I/a - juru muda</td>
                                            </tr>
                                            <tr>
                                                <td class="align-top">Jabatan</td>
                                                <td data-isi="jabatan">: Verifikator - Verifikator Keuangan</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="first-name-vertical">Unit Kerja</label>
                                        <select class="choices form-select" id="idunitkerja" name="idunitkerja" required>
                                            <!-- <option value="">--PILIH--</option> -->
                                            @foreach($unitKerja as $unit)
                                            <option value="{{$unit->id}}">{{$unit->nama}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="first-name-vertical">Pendidikan</label>
                                        <select class="choices form-select" id="idpendidikan" name="idpendidikan" required>
                                            <!-- <option value="">--PILIH--</option> -->
                                            @foreach($pendidikan as $unit)
                                            <option value="{{$unit->id}}">{{$unit->nama}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="first-name-vertical">Golongan</label>
                                        <select class="choices form-select" id="idgolongan" name="idgolongan" required>
                                            <!-- <option value="">--PILIH--</option> -->
                                            @foreach($golongan as $unit)
                                            <option value="{{$unit->id}}">{{$unit->golongan}} - {{$unit->nama}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="first-name-vertical">Jabatan</label>
                                        <select class="choices form-select" id="idjabatan" name="idjabatan" required>
                                            <!-- <option value="">--PILIH--</option> -->
                                            @foreach($jabatan as $unit)
                                            <option value="{{$unit->id}}">{{$unit->nama}} - {{$unit->detail}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12 btn text-start" data-bs-toggle="collapse" data-bs-target="#nilai-mk" aria-expanded="false" aria-controls="nilai-mk">
                            <h6 class="m-0"><div class="num me-2">3</div>Masa Kerja</h6>
                        </div>
                        <div class="col-12 accordion-collapse collapse" id="nilai-mk" data-bs-parent="#nilai">
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="first-name-vertical">Dari</label>
                                        <div class="form-group position-relative has-icon-left">
                                            <input type="date" name="awal" class="form-control"  required>
                                            <div class="form-control-icon">
                                                <i class="bi bi-calendar4-event"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="first-name-vertical">Hingga</label>
                                        <div class="form-group position-relative has-icon-left">
                                            <input type="date" name="akhir" class="form-control"  required>
                                            <div class="form-control-icon">
                                                <i class="bi bi-calendar4-week"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label >Masa kerja sebelumnya</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" aria-label="tahun" name="masakerjatahun_old" disabled>
                                            <span class="input-group-text">Tahun</span>
                                            <input type="number" class="form-control" aria-label="bulan" name="masakerjabulan_old" disabled>
                                            <span class="input-group-text">Bulan</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label >Masa kerja baru</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" aria-label="tahun" name="masakerjatahun"  min="0" required>
                                            <span class="input-group-text">Tahun</span>
                                            <input type="number" class="form-control" aria-label="bulan" name="masakerjabulan"  min="0" max="11" required>
                                            <span class="input-group-text">Bulan</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12 btn text-start" data-bs-toggle="collapse" data-bs-target="#nilai-p" aria-expanded="false" aria-controls="nilai-p">
                                <h6 class="m-0"><div class="num me-2">4</div>Penilaian</h6>
                        </div>
                        <div class="col-12 accordion-collapse collapse" id="nilai-p" data-bs-parent="#nilai">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-6 d-table">
                                            <p class="d-table-cell align-middle">Unsur Utama</p>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="first-name-vertical">Lama</label>
                                                <input type="number" class="form-control" name="utama" placeholder="000" required role="excluded">
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="first-name-vertical">Baru</label>
                                                <input type="number" class="form-control" name="utama_new" placeholder="000" required role="new">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-6 d-table">
                                            <p class="d-table-cell align-middle">Pend. Formal</p>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="first-name-vertical">Lama</label>
                                                <input type="number" class="form-control" name="pendformal" placeholder="000" required role="excluded">
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="first-name-vertical">Baru</label>
                                                <input type="number" class="form-control" name="pendformal_new" placeholder="000" required role="new">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-6 d-table">
                                            <p class="d-table-cell align-middle">Diklat Fungs/Teknis</p>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="first-name-vertical">Lama</label>
                                                <input type="number" class="form-control" name="diklat" placeholder="000" required role="excluded">
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="first-name-vertical">Baru</label>
                                                <input type="number" class="form-control" name="diklat_new" placeholder="000" required role="new">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-6 d-table">
                                            <p class="d-table-cell align-middle">STTPL</p>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="first-name-vertical">Lama</label>
                                                <input type="number" class="form-control" name="sttpl" placeholder="000" required role="excluded">
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="first-name-vertical">Baru</label>
                                                <input type="number" class="form-control" name="sttpl_new" placeholder="000" required role="new">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-6 d-table">
                                            <p class="d-table-cell align-middle">YANKES</p>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="first-name-vertical">Lama</label>
                                                <input type="number" class="form-control" name="yankes" placeholder="000" required role="excluded">
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="first-name-vertical">Baru</label>
                                                <input type="number" class="form-control" name="yankes_new" placeholder="000" required role="new">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-6 d-table">
                                            <p class="d-table-cell align-middle">PROFESI</p>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="first-name-vertical">Lama</label>
                                                <input type="number" class="form-control" name="profesi" placeholder="000" required role="excluded">
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="first-name-vertical">Baru</label>
                                                <input type="number" class="form-control" name="profesi_new" placeholder="000" required role="new">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-6 d-table">
                                            <p class="d-table-cell align-middle">PENGAB. MASY.</p>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="first-name-vertical">Lama</label>
                                                <input type="number" class="form-control" name="pengmas" placeholder="000" required role="excluded">
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="first-name-vertical">Baru</label>
                                                <input type="number" class="form-control" name="pengmas_new" placeholder="000" required role="new">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-6 d-table">
                                            <p class="d-table-cell align-middle">PENUNJANG YANKES</p>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="first-name-vertical">Lama</label>
                                                <input type="number" class="form-control" name="penyankes" placeholder="000" required role="excluded">
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="first-name-vertical">Baru</label>
                                                <input type="number" class="form-control" name="penyankes_new" placeholder="000" required role="new">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary" data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Tutup</span>
                </button>
                <span role="edit-buttons">
                    <button type="button" class="btn btn-warning text-dark" role="trigger-edit" onclick="edit()">Edit</button>
                    <button type="button" class="btn btn-light-danger" role="trigger-batal"  data-bs-dismiss="modal">Batal</button>
                </span>
                <button type="submit" class="btn btn-success ml-1">
                    <i class="bx bx-check d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Simpan</span>
                </button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Cetak -->
<div class="modal fade text-left modal-borderless" id="cetak" tabindex="-1"
    role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cetak</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="/" method="get" target="_blank">
                <input type="hidden" name="tipe" id="tipecetak">
                <div class="row">
                    <div class="col-12">
                        <div class="input-group mb-3">
                            <span class="input-group-text" >Nomor</span>
                            <input id="nomorcetak" name="nomor" maxlength="30" type="text" class="form-control" placeholder="--isi nomor--" aria-label="nomorcetak" aria-describedby="nomor" >
                        </div>
                    </div>
                    <div class="col-12 text-end">
                        <button type="submit" class="btn btn-sm btn-primary" id="cetak-kp" data-tipe="cetak-kp" >PAK Kenaikan Pangkat</button>
                        <button type="submit" class="btn btn-sm btn-primary" id="cetak-t" data-tipe="cetak-t" >PAK Temporer</button>
                        <button type="submit" class="btn btn-sm btn-primary" id="cetak-f1" data-tipe="cetak-f1" >PAK Fungsional 1</button>  
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="page-heading">
  <div class="page-title">
      <div class="row">
          <div class="col-12 col-md-6 order-md-1 order-last">
              <h3>Data Penilaian</h3>
              <!-- <p class="text-subtitle text-muted">For user to check they list</p> -->
          </div>
          <div class="col-12 col-md-6 order-md-2 order-first">
              <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Penilaian</li>
                  </ol>
              </nav>
          </div>
      </div>
  </div>
  <section class="section">
      <div class="card">
          <div class="card-body">
              <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="disabledInput">Pegawai</label>
                            <div class="input-group mb-3">
                                <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                                            data-bs-target="#searchpegawai"><i class="bi bi-search"></i></button>
                                <input name="searchnama" type="text" class="form-control" placeholder="Nama" aria-label="nama" aria-describedby="nama" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="disabledInput"></label>
                            <input name="searchnip" type="text" class="form-control" placeholder="NIP" disabled>
                        </div>
                    </div>
              </div>
          </div>
      </div>
    <div class="card" id="result-container" hidden>
        <div class="card-header text-end">
            <button type="button" class="btn btn-sm btn-primary" onclick="tambah()" ><i class="fa fa-plus"></i> Tambah</button>
        </div>
        <div class="card-body">
            <table class="table table-striped" id="table1">
                <thead>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
  </section>
</div>
@endsection

@section('script')
@include('layouts.alert')
<script>
    var oTable;
    var $form = $('#tambah');
    var Total;
    var lastData;
    var curData;
    var istambah=false;
    const isMobile = window.matchMedia("only screen and (max-width: 760px)").matches;

    function showInfoLama(data){
        choicesList['idunitkerja'].setChoiceByValue(data['idunitkerja']);
        choicesList['idgolongan'].setChoiceByValue(data['idgolongan']);
        choicesList['idjabatan'].setChoiceByValue(data['idjabatan']);
        choicesList['idpendidikan'].setChoiceByValue(data['idpendidikan']);
        let unitkerja_old = $('#idunitkerja').find('option[value='+data['idunitkerja']+']').text();
        let golongan_old = $('#idgolongan').find('option[value='+data['idgolongan']+']').text();
        let jabatan_old = $('#idjabatan').find('option[value='+data['idjabatan']+']').text();
        let pendidikan_old = $('#idpendidikan').find('option[value='+data['idpendidikan']+']').text();
        let ku = $('#keterangan-uk');
        ku.attr('hidden', false);
        ku.find('[data-isi=unitkerja]').text(': '+unitkerja_old);
        ku.find('[data-isi=golongan]').text(': '+golongan_old);
        ku.find('[data-isi=jabatan]').text(': '+jabatan_old);
        ku.find('[data-isi=pendidikan]').text(': '+pendidikan_old);
    }

    function setMasaKerja(mkold, mk, readonlyOld=false, readonly=false){
        $('[name=masakerjatahun_old]').attr('readonly',readonlyOld).val( Math.floor(mkold/12) );
        $('[name=masakerjabulan_old]').attr('readonly',readonlyOld).val( mkold%12 );
        $('[name=masakerjatahun]').attr('readonly',readonly).val( Math.floor(mk/12) );
        $('[name=masakerjabulan]').attr('readonly',readonly).val( mk%12 );
    }


    function tambah(){
        istambah=true;
        let today = moment().format("Y-MM-DD"); 
        let newMonth = moment().format("Y-MM"); 
        $form.find('.modal-title').text('Tambah Penilaian');
        if(Total){
            curData=lastData;
            let newDate = moment(lastData['akhir']).add(1, 'days').format("Y-MM-DD"); 
            $form.find('[role=excluded]').attr('disabled',true)
            $('[name=id]').val('');
            $('[name^=utama]').val(lastData['utama_new']);
            $('[name^=pendformal]').val(lastData['pendformal_new']);
            $('[name^=diklat]').val(lastData['diklat_new']);
            $('[name^=sttpl]').val(lastData['sttpl_new']);
            $('[name^=yankes]').val(lastData['yankes_new']);
            $('[name^=profesi]').val(lastData['profesi_new']);
            $('[name^=pengmas]').val(lastData['pengmas_new']);
            $('[name^=penyankes]').val(lastData['penyankes_new']);

            let masakerja = lastData['masakerja'];
            setMasaKerja(masakerja, masakerja, true, false);

            showInfoLama(lastData);

            choicesList['idunitkerja'].setChoiceByValue(lastData['idunitkerja']);
            choicesList['idgolongan'].setChoiceByValue(lastData['idgolongan']);
            choicesList['idjabatan'].setChoiceByValue(lastData['idjabatan']);
            choicesList['idpendidikan'].setChoiceByValue(lastData['idpendidikan']);
            $form.find('[name=awal]').attr('readonly',false).val(newDate);
            $form.find('[name=akhir]').attr('readonly',false).val(newDate).change();
        }else{
            curData=null;
            $form.find('[role=excluded]').val('').attr('disabled',false)
            $form.find('[name=awal]').attr('readonly',false).val(today);
            $form.find('[name=akhir]').attr('readonly',false).val(today).change();
            
            $('[name=utama]').val(0);
            $('[name=pendformal]').val(0);
            $('[name=diklat]').val(0);
            $('[name=sttpl]').val(0);
            $('[name=yankes]').val(0);
            $('[name=profesi]').val(0);
            $('[name=pengmas]').val(0);
            $('[name=penyankes]').val(0);

            $form.find('[role=new]').val(0);

            setMasaKerja(0, 0, false, false);

            $('#keterangan-uk').attr('hidden', true);
        }

        choicesList['idunitkerja'].enable();
        choicesList['idgolongan'].enable();
        choicesList['idjabatan'].enable();
        choicesList['idpendidikan'].enable();
        
        $form.find('[role=new]').attr('disabled',false);
       
        $form.find('[name=sejak]').val(newMonth).attr('disabled',false);
        $form.find('[name=hingga]').val(newMonth).attr('disabled',false);
        $form.find('[type=submit]').attr('hidden',false);
        $form.find('[role=trigger-edit]').attr('hidden',true);
        $form.find('[role=trigger-batal]').attr('hidden',true);
        $form.modal('show');
    }

    function show(self){
        istambah=false;
        var tr = $(self).closest('tr');
        let idx = oTable.row(tr)[0]
        var data = oTable.data()[idx];
        curData = data;

        for(let key in data){
            if(key) $form.find('[name='+key+']').val(data[key]);
        }

        if(curData['old']){
            showInfoLama(curData['old']);
            setMasaKerja(curData['old']['masakerja'], curData['masakerja'], true, true);
        }else{
            $('#keterangan-uk').attr('hidden', true);
            setMasaKerja(0, curData['masakerja'], true, true);
        }

        choicesList['idunitkerja'].setChoiceByValue(data['idunitkerja']).disable();
        choicesList['idgolongan'].setChoiceByValue(data['idgolongan']).disable();
        choicesList['idjabatan'].setChoiceByValue(data['idjabatan']).disable();
        choicesList['idpendidikan'].setChoiceByValue(data['idpendidikan']).disable();
        $form.find('.modal-title').text('Edit Penilaian');
        $form.find('[role=excluded]').attr('disabled',true);
        $form.find('[role=new]').attr('disabled',true);
        $form.find('[name=awal]').attr('readonly',true);
        $form.find('[name=akhir]').attr('readonly',true).change();
        $form.find('[type=submit]').attr('hidden',true);
        $form.find('[role=trigger-edit]').attr('hidden',false);
        $form.find('[role=trigger-batal]').attr('hidden',true);

        $form.modal('show');
    }

    function edit(){
        $form.find('[role=trigger-edit]').attr('hidden',true);
        $form.find('[role=trigger-batal]').attr('hidden',false);
        $form.find('[type=submit]').attr('hidden',false);
        $form.find('[role=new]').attr('disabled',false);

        $form.find('[name=awal]').attr('readonly',false);
        $form.find('[name=akhir]').attr('readonly',false);
        $('[name=masakerjatahun]').attr('readonly',false);
        $('[name=masakerjabulan]').attr('readonly',false);

        choicesList['idunitkerja'].enable();
        choicesList['idgolongan'].enable();
        choicesList['idjabatan'].enable();
        choicesList['idpendidikan'].enable();
    }

    // Datatable
    function showTable(id){
        $('#result-container').attr('hidden',false);
        $('#tambah input[name=idpegawai]').val(id);

        if ($.fn.dataTable.isDataTable('#table1') ) {
            $('#table1').DataTable().clear();
            $('#table1').DataTable().destroy();
            $('#table1').empty();
        }

        oTable = $("#table1").DataTable({
            select:{
                className: 'dataTable-selector form-select'
            },
            scrollX: isMobile?true:false,
            stateSave: true,
            searching: false,
            processing: true,
            serverSide: false,
            ajax: {type: "POST", url: '{{route("penilaian.data")}}', data:{'_token':@json(csrf_token()), 'id':id}},
            columns: [
                { data:'pegawai.nip', title:'NIP'},
                { data:'pegawai.nama', title:'Nama'},
                { data:'awal', title:'Awal', render: function(e,d,row){return moment(row['awal']).format('L');} },
                { data:'akhir', title:'Akhir', render: function(e,d,row){return moment(row['akhir']).format('L');} },
                { data:'pak', title:'PAK'},
                { data:'id', title:'Aksi', render: function(e,d,row){
                    return '<a class="btn btn-sm btn-outline-success" onclick="show(this)"><i class="bi bi-card-list"></i></a>&nbsp'+
                            '<button class="btn btn-sm btn-outline-primary" onclick="showCetak(this, '+row['id']+')" ><i class="bi bi-printer"></i></button>'
                } },
            ],
            initComplete: function(settings, data){
                Total=data['recordsTotal'];
                lastData= Total ? data['data'][Total-1] : null;
            }
        });
    }
    
    callback=function(item){
        sessionStorage.setItem('penilaian-filter', JSON.stringify(item));
        $('input[name=searchnama]').val(item['nama']);
        $('input[name=searchnip]').val(item['nip']);
        $('#searchpegawai').modal('hide');
        showTable(item['id']);
    }

    function showCetak(self, idpenilaian){
        var tr = $(self).closest('tr');
        let idx = oTable.row(tr)[0]
        var data = oTable.data()[idx];
        curData = data;

        let link='{{route("penilaian.cetak", ["idpenilaian" => "" ] )}}/';
        $('#cetak-kp').attr('formaction', link+idpenilaian);
        $('#cetak-t').attr('formaction', link+idpenilaian);
        $('#cetak-f1').attr('formaction', link+idpenilaian);
        
        $('#nomorcetak').val(curData['nomor'] || '').attr('readonly',true);
        $('#nomorcetak').parent()[0].isf.reset();
        $('#cetak').modal('show');
    }

    $(document).ready(function(){
        if(sessionStorage.hasOwnProperty('penilaian-filter')){
            let item = JSON.parse( sessionStorage.getItem('penilaian-filter'));
            callback(item);
        }

        $('[id^=cetak-]').click(function(e, v){
            $('#tipecetak').val(e.target.dataset.tipe);
        })

        //nomorcetak self edit toggle
        new C.InputSelfEdit($('#nomorcetak').parent()[0])
    })
</script>
@endsection