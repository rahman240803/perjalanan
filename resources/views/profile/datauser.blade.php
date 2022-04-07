@extends('layouts.app')
@section('content')
<div class="tab-pane" id="messages">
    <div class="card-body">


        <div class="table-responsive">
            <table class="table">
                <tr>
                    
                    <th>NIK</th>
                    <th>NAMA</th>
                    <th>ALAMAT</th>
                    <th>NO. TELP</th>
                    <th>EMAIL</th>
                    <th>aksi</th>
                </tr>
 
                @foreach ($user as $s)
                    <tr>
                        <td>{{ $s->nik }}</td>
                        <td>{{ $s->name}}</td>
                        <td>{{ $s->alamat }}</td>
                        <td>{{ $s->telp }}</td>
                        <td>{{ $s->email }}</td>
                        <td>@if ($s->role !== 'admin')
                            <a href="/datauser/destroy/{{ $s->id }}"><i
                                    class="zmdi zmdi-block"></i> </a></td>                                        
                                        @endif
                    </tr>
                @endforeach
            </table>
            <button class="btn "><a href="cetak_pdf" class="bg-theme bg-theme9">cetak</a></button>
                
            </button>



        </div>
    </div>
</div>
@endsection
