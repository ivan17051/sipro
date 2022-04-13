$.extend( true, $.fn.dataTable.defaults, {
    "language": {
        "emptyTable":     "Tidak ada data.",
        "info":           "Menampilkan _START_ s/d _END_ dari _TOTAL_ data",
        "infoEmpty":      "",
        "infoFiltered":   "(filter dari _MAX_ total data)",
        "thousands":      ".",
        "lengthMenu":     "_MENU_ data",
        "loadingRecords": "Memuat...",
        "processing":     "Memproses...",
        "search":         "",
        "zeroRecords":    "Tidak ada yang cocok.",
        "paginate": {
            "first":      "Awal",
            "last":       "Akhir",
            "next":       "›",
            "previous":   "‹"
        },
        "aria": {
            "sortAscending":  ": activate to sort column ascending",
            "sortDescending": ": activate to sort column descending"
        }
    }
} );

const my={
    "request":{
        get: function(url){
            return $.ajax({
                url: url,
                type: 'GET',
            });
        },
        post: function(url, data){
            data["_token"] = "{{ csrf_token() }}"
            return $.ajax({
                url: url,
                method: 'POST',
                data: data,
            });
        },
        delete: function(url){
            const data = {"_token" : "{{ csrf_token() }}"}
            return $.ajax({
                url: url,
                method: 'DELETE',
                data: data,
            });
        },
        put: function(url, data){
            data["_token"] = "{{ csrf_token() }}"
            return $.ajax({
                url: url,
                method: 'PUT',
                data: data,
            });
        },
        upload: function(url, formdata){
            console.log(url)
            // return
            return $.ajax({
                xhr : function() {
                    var xhr = new window.XMLHttpRequest();
                    xhr.upload.addEventListener('progress', function(e){
                        if(e.lengthComputable){
                    
                        }
                    });
                    return xhr;
                },
                url: url,
                method: 'POST',
                data: formdata,
                contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
                processData: false, // NEEDED, DON'T OMIT THIS
            });
        },
    },
    'getFormData':function($form){
        var unindexed_array = $form.serializeArray();
        var indexed_array = {};

        $.map(unindexed_array, function(n, i){
            var key =n['name'];
            var is_arr=false;
            if(/(\[\d+\])$/.test(key)){
                key = key.replace( /(\[\d+\])$/, "");
                is_arr=true;
            }else if(/(\[\])$/.test(key)){
                key = key.replace( /(\[\])$/, "");
                is_arr=true;
            }

            if(is_arr && !(key in indexed_array)) indexed_array[key] = [];            
            if(typeof n['value'] === 'string') n['value']=n['value'].trim()

            if(is_arr){
                indexed_array[key].push( n['value']);
            }else{
                if(n['value'].length || !(key in indexed_array)){
                    indexed_array[key] = n['value'];
                }
            }
            
        });

        return indexed_array;
    },
    "formatRupiah": function(angka, prefix=''){
        angka = angka.toString();
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
        split   		= number_string.split(','),
        sisa     		= split[0].length % 3,
        rupiah     		= split[0].substr(0, sisa),
        ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if(ribuan){
          separator = sisa ? '.' : '';
          rupiah += separator + ribuan.join('.');
        }
  
        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix.toString() + rupiah ;
    },
    "openModalView": async function(url, id){
        var modal = document.getElementById(id);
        if(modal){
            $(modal).modal('show');
        }else{
            var res = await this.request.get(url);
            const modaldiv = document.createElement("div");
            modaldiv.innerHTML = res.html;
            modal = modaldiv.firstChild;
            modal.id = id;
            document.body.prepend(modal);
            $(modal).modal('show');
        }
    },
}

var C = {};
C.InputSelfEdit = class {
    constructor(dom) {
        this.dom = dom;
        this.temporaryValue;
        this.build();
    }

    build(){
        const self = this;
        this.dom.classList.add('input-group');
        this.input = this.dom.getElementsByTagName('input')[0];
        let btnEdit = document.createElement('div');
        let btnBatal = document.createElement('div');
        let btnOK = document.createElement('div');
        btnEdit.innerHTML = '<button class="btn btn-secondary rounded-end" type="button" title="edit"> <i class="bi bi-pencil-fill"></i></button>';
        btnBatal.innerHTML = '<button class="btn btn-outline-secondary " type="button" title="batal"><i class="bi bi-x"></i></button>';
        btnOK.innerHTML = '<button class="btn btn-outline-success rounded-end" type="button" title="ok"><i class="bi bi-check"></i></button>';
        this.btnEdit = btnEdit.firstChild;
        this.btnBatal = btnBatal.firstChild;
        this.btnOK = btnOK.firstChild;
        this.btnEdit.addEventListener("click", function(){ self.edit(); });
        this.btnBatal.addEventListener("click", function(){ self.cancel(); });
        this.btnOK.addEventListener("click", function(){ 
            self.reset();
        });

        this.dom.appendChild(this.btnEdit);
        this.dom.appendChild(this.btnBatal);
        this.dom.appendChild(this.btnOK);
        this.dom.isf = this;
    }

    reset(){
        this.temporaryValue = '';
        this.btnEdit.removeAttribute('disabled')
        this.btnEdit.removeAttribute('hidden');
        this.btnBatal.setAttribute('disabled','disabled')
        this.btnBatal.setAttribute('hidden','hidden');
        this.btnOK.setAttribute('disabled','disabled')
        this.btnOK.setAttribute('hidden','hidden');
        this.input.setAttribute('readonly','readonly');
    }

    edit(){
        this.temporaryValue = this.input.value;
        this.btnEdit.setAttribute('disabled','disabled');
        this.btnEdit.setAttribute('hidden','hidden');
        this.btnBatal.removeAttribute('disabled');
        this.btnBatal.removeAttribute('hidden');
        this.btnOK.removeAttribute('disabled')
        this.btnOK.removeAttribute('hidden');
        this.input.removeAttribute('readonly');
    }

    cancel(){
        this.input.value = this.temporaryValue;
        this.btnEdit.removeAttribute('disabled');
        this.btnBatal.setAttribute('disabled','disabled');
        this.btnBatal.setAttribute('hidden','hidden');
        this.btnOK.setAttribute('disabled','disabled')
        this.btnOK.setAttribute('hidden','hidden');
        this.btnEdit.setAttribute('readonly','readonly');
        this.btnEdit.removeAttribute('hidden');
        this.input.setAttribute('readonly','readonly');
    }
}