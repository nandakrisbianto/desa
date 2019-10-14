<?php $this->load->view('_partials/head') ?>
<?php $this->load->view('_partials/nav') ?>
<!--pesan sistem-->
    <?php if ($this->session->flashdata('success')): ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Berhasil !</strong> <?php echo $this->session->flashdata('success'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <?php endif; ?>
    <!-- end pesan sistem -->

  <div class="card mb-3">
      <div class="card-header">
           <h5 class="text-center">Form tambah penduduk</h5>
      </div>
      <div class="card-body">
        <div class="container">
          <form method="post">
            <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">Nama Penduduk</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan nama penduduk">
              </div>
            </div>
            <div class="form-group row">
              <label for="nik" class="col-sm-2 col-form-label">No Induk Penduduk</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nik" id="nik" placeholder="Masukan nama penduduk">
                <small id="emailHelp" class="form-text text-muted">Masukan No Induk Penduduk sesuai dengan KTP.</small>
              </div>
            </div>
            <div class="form-group row">
              <label for="no_kk"  class="col-sm-2 col-form-label">No Induk Keluarga</label>
              <div class="col-sm-10">
                <input type="text" name="no_kk" class="form-control" id="no_kk" placeholder="Masukan nama penduduk">
                <small id="emailHelp" class="form-text text-muted">Masukan No Induk Keluarga sesuai dengan KK.</small>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Tempat/Tanggal Lahir</label>
              <div class="col-sm-5">
                <input type="text" name="tmp_lahir" class="form-control" id="tmp_lahir" placeholder="Masukan Tempat Lahir">
              </div>
              <div class="col-sm-5">
                <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="Masukan Tanggal Lahir">
              </div>
            </div>
            <fieldset class="form-group">
              <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                <div class="col-sm-10">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan" checked>
                    <label class="form-check-label" for="jenis_kelamin">
                      Perempuan
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-laki">
                    <label class="form-check-label" for="jenis_kelamin">
                      Laki-laki
                    </label>
                  </div>
                </div>
              </div>
            </fieldset>
            <div class="form-group row">
              <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
              <div class="col-sm-10">
                <div class="row">
                  <div class="col-sm-12">
                    <textarea class="form-control" id="alamat" name="alamat" placeholder="Masukan nama penduduk"> </textarea>
                  </div>
                  <div class="col">
                    <div class="form-row">
                      <div class="form-group col-md-3">
                        <label for="provinsi">Provinsi</label>
                        <input name="provinsi" type="text" class="form-control" id="provinsi">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="kabupaten">Kabupaten</label>
                        <input type="text" name="kabupaten" class="form-control" id="kabupaten">
                      </div>
                      <div class="form-group col-md-2">
                        <label for="kecamatan">Kecamatan</label>
                        <input type="text" class="form-control" name="kecamatan" id="kecamatan">
                      </div>
                      <div class="form-group col-md-2">
                        <label for="kelurahan">Kelurahan</label>
                        <input type="text" class="form-control" name="kelurahan" id="kelurahan">
                      </div>
                      <div class="form-group col-md-1">
                        <label for="rt">RT</label>
                        <input type="text" class="form-control" id="rt" name="rt">
                      </div>
                      <div class="form-group col-md-1">
                        <label for="rw">RW</label>
                        <input type="text" class="form-control" id="rw" name="rw">
                      </div>
                    </div>
                  </div>  
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="agama" class="col-sm-2 col-form-label">Agama</label>
              <div class="col-sm-3">
                <select id="agama" name="agama" class="form-control" >
                  <option>Islam</option>
                  <option>Kristen</option>
                </select>
              </div>
            </div>
            <fieldset class="form-group">
              <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Kwarganegaraan</legend>
                <div class="col-sm-10">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="kwarganegaraan" id="kwarganegaraan" value="option1" checked>
                    <label class="form-check-label" for="kwarganegaraan">
                      WNI
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="kwarganegaraan" id="kwarganegaraan" value="option2">
                    <label class="form-check-label" for="kwarganegaraan">
                      WNA
                    </label>
                  </div>
                </div>
              </div>
            </fieldset>
            <div class="form-group row">
              <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
              <div class="col-sm-10">
                <input id="pekerjaan" name="pekerjaan" type="text" class="form-control">
            </div>
            </div>
            <fieldset class="form-group">
              <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Status Perkawinan</legend>
                <div class="col-sm-10">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="status_perkawinan" id="status_perkawinan" value="option1" checked>
                    <label class="form-check-label" for="status_perkawinan">
                      Sudah Menikah
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="status_perkawinan" id="status_perkawinan" value="option2">
                    <label class="form-check-label" for="status_perkawinan">
                      Belum Menikah
                    </label>
                  </div>
                </div>
              </div>
            </fieldset>
            <center>
              <button class="btn btn-primary mb-3" type="submit">Submit form</button>
            </center>
          </form>
        </div>
      <div class="card-footer small text-muted">
          * required fields
    </div>
  </div>
 <?php $this->load->view('_partials/footer') ?>