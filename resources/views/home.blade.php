@extends('layouts.app')
@section('content')

    @if(session('sabi'))
    <div class="alert" role="alert">
        {{session('sabi')}}
        </div>
    @endif
    <div class="row">
        
        <div class="card-body">
            
                <div class="col-11">
               <div class="icon col-sm- float-right" data-code="f1ff" data-name="account-add">
                  <a href="" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="zmdi zmdi-account-add"></i> account-add</a>
                </div>

   
               
      <div class="table-responsive">
          <table class="table">
              <tr>
                  <th>No</th>
                  <th>Tanggal Perjalanan</th>
                  <th>Jam</th>
                  <th>Lokasi</th>
                  <th>Suhu tubuh</th>
                  <th></th>
               </tr>
         
          </table>

            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="" >Tambah Data</h5>
        <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="perjalanan/create" method="POST">
        @csrf
        <label for="" class="form-label">Tanggal perjalanan</label>
        <input name="tgl_perjalanan" type="date" class="form-control" id="" aria-describedby="">
   

  
        <label for="" class="form-label">Jam</label>
        <input name="jam" type="time" class="form-control" id="" aria-describedby="">
  
    
  
        <label for="" class="form-label">Lokasi</label>
        <input name="lokasi" type="text" class="form-control" id="" aria-describedby="">
  

  
        <label for="" class="form-label">Suhu Tubuh</label>
        <input name="suhu_tubuh" type="text" class="form-control" id="" aria-describedby="">
  

      
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
        </div>
    </div>
  </div>
</div>
@endsection

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
