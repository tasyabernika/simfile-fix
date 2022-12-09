<div class="modal fade" id="addfile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form class="card-body form form-horizontal" method="POST" action="{{ url('addfile/add') }}">
            @method('POST')
              @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="Judul">Judul</label>
                        <input class="form-control" type="text" name="judul_file">
                    </div>
                    <div class="mb-3">
                        <label for="">Foto</label>
                        <input class="form-control" type="file" name="foto">
                    </div>
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
        </form>
      </div>
    </div>
  </div>