<div class="container-fluid">
    <h1 class="mt-4"><i class="fab fa-youtube"></i> Video</h1>
    <hr>
    <br>
    <div class="row">
    <div class="col-sm-12">
        <div class="card mb-4">
            <div class="card-header">
                <div class="row">
                    <div class="col-sm-12">
                    <i class="fas fa-table mr-1"></i>
                    Daftar Video
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-12">
                        <a href="<?= site_url('video/add') ;?>" class="btn btn-primary ml-auto"><i class="fas fa-plus"></i> Add Video</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th style="width: 10px;">No</th>
                                <th>Thumbnail</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Kategori</th>
                                <th>Status</th>
                                <th>Created</th>
                                <th style="width:150px;">Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1 ;?>
                            <?php foreach($video->result() as $key=>$data) :?>
                                <tr>
                                    <td><?= $no ;?></td>
                                    <td>
                                        <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="<?= $data->url ;?>" allowfullscreen></iframe>
                                        </div>
                                    </td>
                                    <td><?= $data->judul ;?></td>
                                    <td><?= $data->deskripsi ;?></td>
                                    <td><?= $data->kategori ;?></td>
                                    <td><?= $data->status ;?></td>
                                    <td><?= $data->created ;?></td>
                                    <td>
                                        <a
                                          class="btn btn-sm btn-warning" id="updateVideo" data-toggle="modal" data-target="#modalVideo"
                                          data-id="<?= $data->video_id;?>"
                                          data-judul="<?= $data->judul ;?>"
                                          data-desc="<?= $data->deskripsi ;?>"
                                          data-kategori="<?= $data->kategori ;?>"
                                          data-created="<?= $data->created ;?>"
                                          data-url="<?= $data->url ;?>"
                                          >
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <a href="<?php echo site_url('video/del/'.$data->video_id ) ;?>">
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
                                <th>Thumbnail</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Kategori</th>
                                <th>Status</th>
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
<div class="modal fade" id="modalVideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Video</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= site_url('video/edit') ;?>" method="post">

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
                <label for="">Kategori</label>
                <select name="kategori" id="kategori" class="form-control" required>
                    <option value="live">Live</option>
                    <option value="terbaru">Terbaru</option>
                    <option value="populer">Populer</option>
                </select>
            </div>

            <div class="form-group">
                <label for="">Created</label>
                <input type="date" id="date" class="form-control" readonly>
            </div>

            <div class="form-group">
                <label for="">Url</label>
                <input type="text" name="url" id="url" class="form-control" required>
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
        $(document).on('click','#updateVideo', function() {
            var id = $(this).data('id');
            var judul = $(this).data('judul');
            var deskripsi = $(this).data('desc');
            var kategori = $(this).data('kategori');
            var date = $(this).data('created');
            var url = $(this).data('url');
            $('#id').val(id);
            $('#judul').val(judul);
            $('#deskripsi').val(deskripsi);
            $('#kategori').val(kategori);
            $('#date').val(date);
            $('#url').val(url);
        });
    });
</script>