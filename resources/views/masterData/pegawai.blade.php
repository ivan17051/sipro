@extends('layouts.layout')

@section('title')
Data Pegawai
@endsection

@section('masterStatus')
active
@endsection

@section('pegawaiStatus')
active
@endsection

@section('content')
<!-- Modal Tambah -->
<div class="modal fade text-left modal-borderless" id="tambah" tabindex="-1"
    role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Pegawai</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="{{route('pegawai.update')}}" method="POST">
            @csrf
            @method('PUT')
            <div class="modal-body">
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="first-name-vertical">NIK</label>
                                <input type="text" id="nik" class="form-control"
                                    name="nik" placeholder="NIK">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="first-name-vertical">NIP</label>
                                <input type="text" id="nip" class="form-control"
                                    name="nip" placeholder="NIP" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="first-name-vertical">No. Kartu Pegawai</label>
                                <input type="text" id="nokartu" class="form-control"
                                    name="nokartu" placeholder="No Kartu Pegawai" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10">
                            <div class="form-group">
                                <label for="first-name-vertical">Nama</label>
                                <input type="text" id="nama" class="form-control"
                                    name="nama" placeholder="Nama" required>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="first-name-vertical">Jenis Kelamin</label>
                                <select class="form-select" id="jeniskelamin" name="jeniskelamin" required>
                                    <option value="L">L</option>
                                    <option value="P">P</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="first-name-vertical">Tempat Lahir</label>
                                <input type="text" id="tempatlahir" class="form-control"
                                    name="tempatlahir" placeholder="Tempat Lahir" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="first-name-vertical">Tanggal Lahir</label>
                                <input type="date" id="tanggallahir" class="form-control" name="tanggallahir" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="first-name-vertical">No. Telepon</label>
                                <input type="text" id="nohp" class="form-control" name="nohp" placeholder="No. Telepon">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="first-name-vertical">Alamat</label>
                        <input type="text" id="alamat" class="form-control" name="alamat" placeholder="Alamat">
                    </div>
                    <div class="form-group">
                        <label for="first-name-vertical">Status</label>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" value="1" id="status1" checked>
                                    <label class="form-check-label text-success" for="status1">
                                        Aktif
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" value="0" id="status0" disabled>
                                    <label class="form-check-label text-danger" for="status0">
                                        Pensiun
                                    </label>
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
                <button type="submit" class="btn btn-success ml-1">
                    <i class="bx bx-check d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Simpan</span>
                </button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Edit -->
<div class="modal fade text-left modal-borderless" id="sunting" tabindex="-1"
    role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Sunting Data Pegawai</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="{{route('pegawai.update')}}" method="POST">
            @csrf
            @method('PUT')
            <div class="modal-body">
                <div class="form-body">
                    <input type="hidden" id="id" name="id">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="first-name-vertical">NIK</label>
                                <input type="text" id="nik" class="form-control"
                                    name="nik" placeholder="NIK">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="first-name-vertical">NIP</label>
                                <input type="text" id="nip" class="form-control"
                                    name="nip" placeholder="NIP" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="first-name-vertical">No. Kartu Pegawai</label>
                                <input type="text" id="nokartu" class="form-control"
                                    name="nokartu" placeholder="No Kartu Pegawai" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10">
                            <div class="form-group">
                                <label for="first-name-vertical">Nama</label>
                                <input type="text" id="nama" class="form-control"
                                    name="nama" placeholder="Nama" required>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="first-name-vertical">Jenis Kelamin</label>
                                <select class="form-select" id="jeniskelamin" name="jeniskelamin" required>
                                    <option value="L">L</option>
                                    <option value="P">P</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="first-name-vertical">Tempat Lahir</label>
                                <input type="text" id="tempatlahir" class="form-control"
                                    name="tempatlahir" placeholder="Tempat Lahir" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="first-name-vertical">Tanggal Lahir</label>
                                <input type="date" id="tanggallahir" class="form-control" name="tanggallahir" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="first-name-vertical">No. Telepon</label>
                                <input type="text" id="nohp" class="form-control" name="nohp" placeholder="No. Telepon">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="first-name-vertical">Alamat</label>
                        <input type="text" id="alamat" class="form-control" name="alamat" placeholder="Alamat">
                    </div>
                    <div class="form-group">
                        <label for="first-name-vertical">Status</label>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" value="1" id="status3">
                                    <label class="form-check-label text-success" for="status3">
                                        Aktif
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" value="0" id="status4">
                                    <label class="form-check-label text-danger" for="status4">
                                        Pensiun
                                    </label>
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
                <button type="submit" class="btn btn-success ml-1">
                    <i class="bx bx-check d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Simpan</span>
                </button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Form -->
<form hidden action="{{route('pegawai.delete')}}" method="POST" id="delete">
    @csrf
    @method('delete')
    <input type="hidden" name="id">
</form>

<div class="page-heading">
  <div class="page-title">
      <div class="row">
          <div class="col-12 col-md-6 order-md-1 order-last">
              <h3>Data Pegawai</h3>
              <!-- <p class="text-subtitle text-muted">For user to check they list</p> -->
          </div>
          <div class="col-12 col-md-6 order-md-2 order-first">
              <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Pegawai</li>
                  </ol>
              </nav>
          </div>
      </div>
  </div>
  <section class="section">
      <div class="card">
        <div class="card-header">
            <div class="form-group text-left">
                <select class="choices form-select multiple-remove" multiple="multiple" id="filter">
                    <optgroup label="Jabatan">
                        @foreach($jabatan as $unit)
                        <option value="{{$unit->id}}">{{$unit->nama}} - {{$unit->detail}}</option>
                        @endforeach
                    </optgroup>
                    <optgroup label="Golongan">
                        @foreach($golongan as $unit)
                        <option value="{{$unit->id}}">{{$unit->golongan}} - {{$unit->nama}}</option>
                        @endforeach
                    </optgroup>
                </select>
            </div>
            <div class="text-right">
                <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">Tambah</button>
            </div>
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
    const isMobile = window.matchMedia("only screen and (max-width: 760px)").matches;

    function show(self){
        var tr = $(self).closest('tr');
        let idx = oTable.row(tr)[0]
        var data = oTable.data()[idx];
        
        sessionStorage.setItem('penilaian-filter', JSON.stringify(data));
        window.location.href = "{{url('/penilaian')}}";
    }

    function edit(self){
        var $modal=$('#sunting');
        var tr = $(self).closest('tr');
        let idx = oTable.row(tr)[0]
        var data = oTable.data()[idx];
        
        $modal.find('input[name=id]').val(data['id']);
        $modal.find('input[name=nik]').val(data['nik']);
        $modal.find('input[name=nip]').val(data['nip']);
        $modal.find('input[name=nama]').val(data['nama']);
        $modal.find('input[name=nokartu]').val(data['nokartu']);
        $modal.find('input[name=tempatlahir]').val(data['tempatlahir']);
        $modal.find('input[name=tanggallahir]').val(data['tanggallahir']);
        $modal.find('select[name=jeniskelamin]').val(data['jeniskelamin']).change();
        $modal.find('input[name=alamat]').val(data['alamat']);
        $modal.find('input[name=nohp]').val(data['nohp']);
        $modal.find('input[name=status][value='+data['status']+']').prop("checked",true);
    }

    function hapus(self){
        var tr = $(self).closest('tr');
        let idx = oTable.row(tr)[0]
        var data = oTable.data()[idx];
        $('#delete').find('input[name=id]').val(data['id']);
        Swal.fire({
            customClass: {
                confirmButton: 'btn btn-light me-2',
                cancelButton: 'btn btn-primary'
            },
            buttonsStyling: false,
            icon: 'warning',
            iconColor: '#f4b619',
            title: 'Yakin ingin menghapus?',
            showCancelButton: true,
            confirmButtonText: 'Ya',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                $('#delete').submit();
            }
        })
    }

    $(document).ready(function(){
        oTable = $("#table1").DataTable({
            select:{
                className: 'dataTable-selector form-select'
            },
            scrollX: isMobile?true:false,
            processing: true,
            serverSide: true,
            ajax: {type: "POST", url: '{{route("pegawai.data")}}', data:{'_token':@json(csrf_token())}},
            columns: [
                { data:'id', title:'ID', visible: false},
                { data:'idgolongan', title:'idgolongan', name:'idgolongan', visible: false},
                { data:'idjabatan', title:'idjabatan', name:'idjabatan', visible: false},
                { data:'nip', title:'NIP'},
                { data:'nama', title:'Nama'},
                { data:'nokartu', title:'No. Kartu'},
                { data:'nohp', title:'No. HP', visible: false},
                { data:'nik', title:'NIK', visible: false},
                { data:'tempatlahir', title:'TempatLahir', visible: false},
                { data:'tanggallahir', title:'TanggalLahir', visible: false},
                { data:'alamat', title:'Alamat', visible: false},
                { data:'status', title:'Status', render: function(e,d,row){
                    if(row['status']==1){
                        return '<span class="text-success">Aktif</span>'
                    }else{
                        return '<span class="text-danger">Pensiun</span>'
                    }
                } },
                { data:'action', title:'Aksi'},
            ],
        });
    });

    //filter tabel
    function filter(value, fieldDB, isRemove=false, delimitter="|"){
        let column = fieldDB+':name';
        let currentSearch = oTable.column(column).search();
        
        if(isRemove==true){
            currentSearch = currentSearch.split(delimitter);
            var index = currentSearch.indexOf(value);
            
            if (index !== -1) {
                currentSearch.splice(index, 1);
            }
            input = ''
            currentSearch.forEach(unit => {
                if(input==''){
                    input = unit;
                }
                else{
                    input += ('|'+unit);
                }
            });
            if(currentSearch==[]) input='';
            currentSearch = input;
        }
        else{
            if(currentSearch==''){
                currentSearch = value;
            }
            else{
                currentSearch += ('|'+value);
            }
        }
        
        oTable.column(column).search( currentSearch , true, false);
        oTable.draw();
    }

    document.getElementById('filter').addEventListener( 'addItem', function(e) {
            let id = 'id'+e.detail.groupValue.toLowerCase();
            filter(e.detail.value, id )
        },
        false,
    );

    document.getElementById('filter').addEventListener( 'removeItem', function(e) {
            let id = 'id'+e.detail.groupValue.toLowerCase();
            filter(e.detail.value, id, true )
        },
        false,
    );
</script>
@endsection