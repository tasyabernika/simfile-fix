
  <!-- Modal -->
  <div class="modal fade" id="biodata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="card-body form form-horizontal" method="POST" action="{{ url('biodata/add') }}">
                @method('POST')
                  @csrf
                  <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example18">Nama</label>
                      <input type="text" name="nama" id="form2Example18"
                          class="form-control form-control-lg" />
                  </div>

                  <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example28">Tempat Lahir</label>
                      <input type="text" name="tempat" id="form2Example28"
                          class="form-control form-control-lg" />
                  </div>

                  <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example28">Tanggal Lahir</label>
                      <input type="date" name="tanggal_lahir" id="form2Example28"
                          class="form-control form-control-lg" />
                  </div>

                  <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example28">No Telfon</label>
                      <input type="number" name="no_telfon" id="form2Example28"
                          class="form-control form-control-lg" />
                  </div>

                  <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example28">Suara</label>

                      <select name="daftar_suara">
                          <option value="sopran">Sopran</option>
                          <option value="mezzo">Mezzo</option>
                          <option value="alto">Alto</option>
                      </select>
                  </div>

                  <div class="pt-1 mb-4">
                      <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
          </div>


          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>