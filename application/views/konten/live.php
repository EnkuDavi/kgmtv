<?php if($this->db->affected_rows($live) > 0) :?>
    <?php foreach($live->result() as $key=>$data) :?>
    
    <section class="frame bg-secondary">
        <div class="container container-frame">
            <div class="embed-responsive embed-responsive-16by9 frameVideo">
            <iframe class="embed-responsive-item" src="<?= $data->url ;?>" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <section>
        <div class="container mt-3 p-3">
            <div class="row">
                <div class="col-sm-6">
                    <h5 class="judul-frame"><?= $data->judul;?></h5>
                    <h6 class="judul-frame"><?= $data->created ;?></h6>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="whatsapp://send?text=<?= site_url('live/view/'.$data->video_id) ;?>" class="btn btn-warning btn-share"  data-url="<?= $data->url ;?>"><h6 class="shared-link"><i class="fas fa-share-square"></i> Share Video</h6></a>
                </div>
            </div>
        </div>
    </section>
    <?php endforeach;?>

<?php else :?>

    <section class="frame bg-secondary">
        <div class="container">
            <div class="embed-responsive embed-responsive-16by9 frameVideo bg-dark">
                <h1 class="judul-live text-white text-center">Belum ada jadwal live streaming saat ini</h1>
            </div>
        </div>
    </section>

<?php endif;?>

<section class="p-3">
    <div class="container">
        <h4 class="text-center judul-frame">Video Lainnya</h4>
        <hr style="width: 10%;border: 1px solid black">
    </div>
</section>

<section style="margin-bottom: 30px;">
    <div class="container mt-3 daftar overflow-auto">
        <?php foreach($video->result() as $key=>$data) :?>
        <div class="row row-cols-2 mt-3">
            <div class="col daftarVideo">
                <div>
                    <a href="<?= site_url('live/'.$data->video_id) ;?>">
                    <div class="embed-responsive embed-responsive-16by9 kotak">
                        <iframe class="embed-responsive-item" src="<?= $data->url ;?>" allowfullscreen></iframe>
                    </div>
                    </a>
                </div>    
            </div>
            <div class="col">
                <a href="<?= site_url('live/view/'.$data->video_id) ;?>">
                <div class="daftar-judul">
                    <h6 class="font-weight-bold judul-daftar"><?= $data->judul ;?></h6>
                    <small class="judul-daftar"><?= $data->created ;?></small>
                </div>
                </a>    
            </div>
        </div>
        <?php endforeach;?>
    </div>
</section>

<!-- Modal -->
<!-- <div class="modal fade mt-5" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Copy Url</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <span id="url"></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
    $(document).ready(function(){
        $(document).on('click','#btn-share', function(){
            var url = $(this).data('url');
            $('#url').text(url);
        });
    });
</script> -->