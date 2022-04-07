<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
                    <table class="table table-bordered" border="1px">
                        <thead>
                        <tr>
                            <th scope="col">NIK</th>
                            <th scope="col">NAMA</th>
                            <th scope="col">ALAMAT</th>
                            <th scope="col"> NO.TELP</th>
                            <th scope="col">EMAIL</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $u)
                        <tr>
                            <td>{{$u->nik}}</td>
                            <td>{{$u->name}}</td>
                            <td>{{$u->telp}}</td>
                            <td>{{$u->alamat}}</td>
                            <td>{{$u->email}}</td>
                        </tr>
                            @endforeach               
                        </tbody>
                       
                    </table>
                    <!-- End Table with hoverable rows -->
                   
                    </div>
                </div>
        </div>
    </body>
</html>