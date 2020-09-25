
<div class="container mt-5 mb-5">
    <br>
    <h5 class="text-center">Daftar Video Terbaru</h5>
    <hr>
    <section style="margin-bottom: 30px;">
    <div class="container mt-3 daftar-video overflow-auto">
        <?php foreach($videoTerbaru->result() as $key=>$data) :?>
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

    
</div>
