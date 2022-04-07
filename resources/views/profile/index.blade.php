@extends('layouts.app')
@section('content')

    <div class="content-fluid">

        <div class="row">
            <div class="col-lg-4">
                <div class="card profile-card-2">
                    <div class="card-img-block">
                        <img class="img-fluid" src="{{ asset('assets/bgd.png') }}" alt="Card image cap">
                    </div>
                    <div class="card-body pt-5">
                        <img @if (Auth::user()->foto != null && Auth::user()->foto > 0) src="{{ asset('foto/' . Auth::user()->foto) }}"
                         @else src="{{ asset('foto/default.png') }}" @endif
                            alt="profile-image" class="profile">
                        <h5 class="card-title">{{ Auth()->user()->name }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                            <li class="nav-item">
                                <a href="javascript:void();" data-target="#profile" data-toggle="pill"
                                    class="nav-link active"><i class="icon-user"></i> <span
                                        class="hidden-xs">Profile</span></a>
                            </li>
                            @if (Auth::user()->role == 'user')
                                <li class="nav-item">
                                    <a href="javascript:void();" data-target="#messages" data-toggle="pill"
                                        class="nav-link"><i class="icon-envelope-open"></i> <span
                                            class="hidden-xs">data perjalanan</span></a>
                                </li>


                                <li class="nav-item">
                                    <a href="javascript:void();" data-target="#addPerjalanan" data-toggle="pill"
                                        class="nav-link"><i class="icon-envelope-open"></i> <span
                                            class="hidden-xs">Tambah PERJALANAN</span></a>
                                </li>

                                <li class="nav-item">
                                    <a href="javascript:void();" data-target="#edit" data-toggle="pill"
                                        class="nav-link"><i class="icon-note"></i> <span
                                            class="hidden-xs">Edit</span></a>
                                </li>
                            @endif
                        </ul>
                        {{-- -----------PROFILE------------- --}}
                        <div class="tab-content ">
                            <div class="tab-pane active" id="profile">
                                <h5 class="mb-3">Data User</h5>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <label for="" style="color:white">nik</label>
                                            </div>
                                            <div class="col-md-8">
                                                <label for="" style="color:white">{{Auth::user()->nik}}</label>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <label for="" style="color:white">name</label>
                                            </div>
                                            <div class="col-md-8">
                                                <label for="" style="color:white">{{Auth::user()->name}}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <label for="" style="color:white">Email</label>
                                            </div>
                                            <div class="col-md-8">
                                                <label for="" style="color:white">{{Auth::user()->email}}</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <label for="" style="color:white">Telpon</label>
                                            </div>
                                            <div class="col-md-8">
                                                <label for="" style="color:white">{{Auth::user()->telp}}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            {{-- <label class="col-lg-5 col-form-label form-control-label" style="color:white">
                                               Alamat</label>
                                            <label class="form-control-label" style="color:white">
                                                {{ Auth()->user()->alamat }}</label> --}}
                                                <div class="col-md-4">
                                                    <label for="" style="color:white">Alamat</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <label for="" style="color:white">{{Auth::user()->alamat}}</label>
                                                </div>                                             
                                    </div>
                                    </div> 
                                </div>
                                <!--/row-->
                            </div>
                            {{-- -----------END PROFILE------------- --}}


                            <div class="tab-pane" id="messages">
                                <div class="card-body">


                                    <div class="table-responsive">
                                        <table class="table">
                                            <tr>
                                                <th>NO</th>
                                                <th>TANGGAL PERJALANAN</th>
                                                <th>JAM</th>
                                                <th>LOKASI</th>
                                                <th>SUHU TUBUH</th>
                                                <th></th>
                                            </tr>

                                            @foreach ($user->perjalanan as $oh => $s)
                                                <tr>
                                                    <td>{{ $oh + 1 }}</td>
                                                    <td>{{ $s->tgl_perjalanan }}</td>
                                                    <td>{{ $s->jam }}</td>
                                                    <td>{{ $s->lokasi }}</td>
                                                    <td>{{ $s->suhu_tubuh }}°</td>
                                                    <td><a href="/perjalanan/destroy/{{ $s->id }}"><i
                                                                class="zmdi zmdi-block"></i> </a></td>

                                                </tr>
                                            @endforeach
                                        </table>



                                    </div>
                                </div>
                            </div>
                            {{-- -----------EDIT------------- --}}
                            <div class="tab-pane" id="edit">
                                <form action="/profile/{{ Auth()->user()->id }}/update" method="POST"
                                    enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                    <div class="form-group row"">
                                            <label class=" col-lg-3 col-form-label form-control-label" style="color:white">
                                        NIK</label>
                                        <div class="col-lg-9">
                                            <input name="nik" class="form-control" type="text"
                                                value="{{ Auth()->user()->nik }}">
                                        </div>
                                    </div>
                                    <div class="form-group row"">
                                        <label class=" col-lg-3 col-form-label form-control-label" style="color:white">
                                        Nama</label>
                                        <div class="col-lg-9">
                                            <input name="name" class="form-control" type="text"
                                                value="{{ Auth()->user()->name }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label"
                                            style="color:white">Email</label>
                                        <div class="col-lg-9">
                                            <input name="email" class="form-control" type="email"
                                                value="{{ Auth()->user()->email }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label" style="color:white">No.
                                            Telpon</label>
                                        <div class="col-lg-9">
                                            <input name="telp" class="form-control" type="text"
                                                value="{{ Auth()->user()->telp }}" placeholder="">
                                        </div>
                                    </div>
                                    <div class="card" style="width: 100%; margin-left: 0; border: none;">
                                        <ul class="list-unstyled">
                                            <li class="d-flex">
                                                <div class="flex-grow-1">
                                                    <div class="form-group">
                                                        <h6>Alamat</h6>
                                                        <select class="form-control mt-3" id="selectProvinsi">
                                                            <option>Provinsi</option>
                                                        </select>
                                                        <select class="form-control mt-3" id="selectKota">
                                                            <option>Kota</option>
                                                        </select>
                                                        <select class="form-control mt-3" id="selectKecamatan">
                                                            <option>Kecamatan</option>
                                                        </select>
                                                        <select class="form-control mt-3" id="selectKelurahan">
                                                            <option>Kelurahan</option>
                                                        </select>
                                                    </div>
                                                    <textarea class="form-control" value="" name="alamat" id="alamat" rows="3"></textarea>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    {{-- <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label"
                                            style="color:white">Alamat</label>
                                        <div class="col-lg-9">
                                            <input name="alamat" class="form-control" type="text"
                                                value="{{ Auth()->user()->alamat }}" placeholder="">
                                        </div>
                                    </div> --}}
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label" style="color:white">Change
                                            profile</label>
                                        <div class="col-lg-9">
                                            <input name="foto" class="form-control" type="file">
                                        </div>
                                    </div>

                                    {{-- <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label"></label>
                                        <div class="col-lg-6">
                                            <input class="form-control" type="text" value="sss" placeholder="sd">
                                        </div>

                                    </div>
                                   <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Sandi Lama</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="password" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Sandi Baru</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="password" value="">
                                        </div>
                                    </div> --}}
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label"></label>
                                        <div class="col-lg-9">
                                            <input type="reset" class="btn btn-secondary" value="Batal">
                                            <input type="Submit" class="btn btn-primary" value="Simpan Perubahan">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="addPerjalanan">
                                <form action="/perjalanan/create" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label"
                                            style="color:white">Tanggal</label>
                                        <div class="col-lg-9">
                                            <input name="tgl_perjalanan" class="form-control" type="date">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label"
                                            style="color:white">Jam</label>
                                        <div class="col-lg-9">
                                            <input name="jam" class="form-control" type="time">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label"
                                            style="color:white">Lokasi</label>
                                        <div class="col-lg-9">
                                            <input name="lokasi" class="form-control" type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label"
                                            style="color:white">Suhu</label>
                                        <div class="col-lg-9">
                                            <input name="suhu_tubuh" class="form-control" type="number">
                                        </div>
                                    </div>

                                    {{-- <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label"></label>
                                        <div class="col-lg-6">
                                            <input class="form-control" type="text" value="sss" placeholder="sd">
                                        </div>

                                    </div>
                                   <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Sandi Lama</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="password" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Sandi Baru</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="password" value="">
                                        </div>
                                    </div> --}}
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label"></label>
                                        <div class="col-lg-9">
                                            <input type="reset" class="btn btn-secondary" value="Batal">
                                            <input type="Submit" class="btn btn-primary" value="Simpan">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
        let selectProvinsi = document.getElementById('selectProvinsi');
        let selectKota = document.getElementById('selectKota');
        let selectKecamatan = document.getElementById('selectKecamatan');
        let selectKelurahan = document.getElementById('selectKelurahan');
        let alamat = document.getElementById('alamat');
        document.addEventListener("DOMContentLoaded", function() {
            fetchProvinsi();
            selectKota.style.display = "none";
            selectKecamatan.style.display = "none";
            selectKelurahan.style.display = "none";
            // fetchKota();
            // fetchKecamatan();
            // fetchKelurahan();
            getValueToAlamat();
        });
        const config = {
            method: "GET"
        };
        async function fetchProvinsi() {
            const URL = 'http://www.emsifa.com/api-wilayah-indonesia/api/provinces.json';
            await fetch(URL, config)
                .then(response => response.json())
                .then(provinsi => {
                    if (provinsi !== null || undefined) {
                        provinsi.map(data => {
                            let opt = document.createElement('option');
                            opt.value = data.id;
                            opt.innerHTML = data.name;
                            selectProvinsi.appendChild(opt);
                        })
                    } else {
                        let opt = document.createElement('option');
                        opt.value = "";
                        opt.innerHTML = "Data tidak tersedia";
                        selectKelurahan.appendChild(opt);
                    }
                }).catch(error => alert(`Data provinsi tidak ada`));
        }
        async function fetchKota(id) {
            const URL =
                `http://www.emsifa.com/api-wilayah-indonesia/api/regencies/${id === undefined || null ? "" : id}.json`;
            await fetch(URL, config)
                .then(response => response.json())
                .then(kota => {
                    if (kota !== null || undefined) {
                        kota.map(data => {
                            let opt = document.createElement('option');
                            opt.value = data.id;
                            opt.innerHTML = data.name;
                            selectKota.appendChild(opt);
                        })
                    } else {
                        let opt = document.createElement('option');
                        opt.value = "";
                        opt.innerHTML = "Data tidak tersedia";
                        selectKelurahan.appendChild(opt);
                    }
                });
        }
        async function fetchKecamatan(id) {
            const URL =
                `http://www.emsifa.com/api-wilayah-indonesia/api/districts/${id === undefined || null ? "" : id}.json`;
            await fetch(URL, config)
                .then(response => response.json())
                .then(kecamatan => {
                    if (kecamatan !== null || undefined) {
                        kecamatan.map(data => {
                            let opt = document.createElement('option');
                            opt.value = data.id;
                            opt.innerHTML = data.name;
                            selectKecamatan.appendChild(opt);
                        })
                    } else {
                        let opt = document.createElement('option');
                        opt.value = "";
                        opt.innerHTML = "Data tidak tersedia";
                        selectKelurahan.appendChild(opt);
                    }
                });
        }
        async function fetchKelurahan(id) {
            const URL =
                `http://www.emsifa.com/api-wilayah-indonesia/api/villages/${id === undefined || null ? "" : id}.json`;
            await fetch(URL, config)
                .then(response => response.json())
                .then(kelurahan => {
                    if (kelurahan !== null || undefined) {
                        kelurahan.map(data => {
                            let opt = document.createElement('option');
                            opt.value = data.id;
                            opt.innerHTML = data.name;
                            selectKelurahan.appendChild(opt);
                        })
                    } else {
                        let opt = document.createElement('option');
                        opt.value = "";
                        opt.innerHTML = "Data tidak tersedia";
                        selectKelurahan.appendChild(opt);
                    }
                });
        }
        // selectProvinsi.addEventListener('change', () => {
        //     console.log(selectProvinsi.options[selectProvinsi.selectedIndex].text);
        // })
        selectProvinsi.addEventListener('change', () => {
            fetchKota(selectProvinsi.value);
            selectKota.style.display = "block";
            selectKota.innerHTML = '';
            selectKecamatan.innerHTML = '';
            selectKelurahan.innerHTML = '';
        });
        selectKota.addEventListener('change', () => {
            fetchKecamatan(selectKota.value);
            selectKecamatan.style.display = "block";
            selectKecamatan.innerHTML = '';
            selectKelurahan.innerHTML = '';
        });
        selectKecamatan.addEventListener('change', () => {
            fetchKelurahan(selectKecamatan.value);
            selectKelurahan.style.display = "block";
            selectKelurahan.innerHTML = '';
        });

        function getValueToAlamat() {
            alamat.addEventListener('change', () => {
                let alamatText = alamat.value;
                document.getElementById('alamat').value =
                    `${alamatText}, ${selectKelurahan.options[selectKelurahan.selectedIndex].text}, ${selectKecamatan.options[selectKecamatan.selectedIndex].text}, ${selectKota.options[selectKota.selectedIndex].text}, ${selectProvinsi.options[selectProvinsi.selectedIndex].text}, `;
                // console.log(`${alamatText}, ${selectKelurahan.options[selectKelurahan.selectedIndex].text}, ${selectKecamatan.options[selectKecamatan.selectedIndex].text}, ${selectKota.options[selectKota.selectedIndex].text}, ${selectProvinsi.options[selectProvinsi.selectedIndex].text}, `);
            });
        }
    </script>

@stop
