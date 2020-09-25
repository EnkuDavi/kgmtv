<div class="container-fluid">
    <h1 class="mt-4"><i class="fas fa-tv"></i> Banner</h1>
    <hr>
    <br>
    <div class="row">
    <div class="col-sm-12">
        <div class="card mb-4">
            <div class="card-header">
                <div class="row">
                    <div class="col-sm-12">
                    <i class="fas fa-table mr-1"></i>
                    Daftar Banner
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-12">
                        <a href="<?= site_url('banner/add') ;?>" class="btn btn-primary ml-auto"><i class="fas fa-plus"></i> Add Banner</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th style="width: 10px;">No</th>
                                <th>Layout</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Source</th>
                                <th>Kategori</th>
                                <th>Created</th>
                                <th style="width:150px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no = 1 ;?>
                            <?php foreach($banner->result() as $key=>$data) :?>
                                <tr>
                                    <td><?= $no ;?></td>
                                    <td>
                                        <div>
                                            <img src="<?= base_url('uploads/layout/'.$data->layout) ;?>" style="width: 120px;" alt="">
                                        </div>
                                    </td>
                                    <td><?= $data->judul_banner ;?></td>
                                    <td><?= $data->deskripsi ;?></td>
                                    <td><?= $data->sumber ;?></td>
                                    <td><?= $data->kategori ;?></td>
                                    <td><?= $data->created ;?></td>
                                    <td>
                                        <a
                                          class="btn btn-sm btn-warning" id="updateBanner" data-toggle="modal" data-target="#modalBanner"
                                          data-id="<?= $data->banner_id;?>"
                                          data-judul="<?= $data->judul_banner ;?>"
                                          data-desc="<?= $data->deskripsi ;?>"
                                          data-source="<?= $data->sumber ;?>"
                                          data-kategori="<?= $data->kategori ;?>"
                                          data-layout="<?= $data->layout ;?>"
                                          data-created="<?= $data->created ;?>"
                                          >
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <a href="<?php echo site_url('banner/del/'.$data->banner_id ) ;?>">
                                            <button class="btn btn-sm btn-danger" onclick="return confirm('Video ini Akan Dihapus !')">
                                                <i class="fas fa-trash-alt"></i> Hapus
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            <?php $no++ ;?>
                            <?php endforeach;?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Layout</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Source</th>
                                <th>Kategori</th>
                                <th>Created</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        
                    </table>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modalBanner" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Banner</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= site_url('banner/edit') ;?>" enctype="multipart/form-data" method="post">

            <div class="form-group">
                <label for="">Judul</label>
                <input type="hidden" name="id" id="id" class="form-control">
                <input type="text" name="judul" id="judul" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="">Deskripsi</label>
                <input type="text" name="deskripsi" id="deskripsi" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="">Source</label>
                <input type="text" name="source" id="source" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Kategori</label>
                <select name="kategori" id="kategori" class="form-control" required>
                    <option value="Iklan">Iklan</option>
                    <option value="Promo">Promo</option>
                    <option value="Portfolio">Portfolio</option>
                </select>
            </div>

            <div class="form-group">
                <label for="">Created</label>
                <input type="text" id="date" class="form-control" readonly>
            </div>

            
            <div class="form-group">
                <label for="">Layout</label>
                <input type="file" name="layout" value="" id="layout" class="form-control" required>
            </div>


            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="updateVideo" class="btn btn-primary">Update</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
    $(document).ready(function() {
        $(document).on('click','#updateBanner', function() {
            var id = $(this).data('id');
            var judul = $(this).data('judul');
            var deskripsi = $(this).data('desc');
            var sumber = $(this).data('source');
            var kategori = $(this).data('kategori');
            var date = $(this).data('created');
            var layout = $(this).data('layout');
            $('#id').val(id);
            $('#judul').val(judul);
            $('#deskripsi').val(deskripsi);
            $('#source').val(sumber);
            $('#kategori').val(kategori);
            $('#date').val(date);
            $('#layout').val(layout);
        });
    });
</script>