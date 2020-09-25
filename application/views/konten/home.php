
        <!-- Banner -->

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active mt-5">
                <img src="<?= site_url('assets/img/logo_kgm.jpg') ;?>" style="background-size:initial;" class="d-block w-100 " alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- Akhir Banner -->
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12 text-left">
                    <ul class="links">
                        <li><a href="<?= site_url('home/terbaru') ;?>"><h4>Terbaru  <i class="fas fa-arrow-right"></i></h4></a></li>
                    </ul>
                </div>
            </div>
            

            <div class="row">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                        <?php foreach($videoBaru->result() as $key=>$data) :?>

                            <td>
                                <a href="<?= site_url('live/view/'.$data->video_id) ;?>">
                                    <div class="embed-responsive embed-responsive-16by9 kotak">
                                    <iframe class="embed-responsive-item" src="<?= $data->url ;?>" allowfullscreen></iframe>
                                    </div>
                                    <small class="font-weight-bold data-judul"><?=$data->judul ;?></small>    
                                </a>
                            </td>

                        <?php endforeach;?>
                        </tr>
                    </table>
                </div>
            </div>
            
        </div>
        
        <br>
        <!-- Baner -->
        <div class="container" >
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

                    <div class="carousel-item active">
                        <img src="<?= base_url('assets/img/logo_kgm.jpg') ;?>" class="d-block w-100" alt="...">
                    </div>
    
                <?php foreach($banner->result() as $key=>$data) :?>

                    <div class="carousel-item">
                        <img src="<?= base_url('uploads/layout/'.$data->layout) ;?>" class="d-block w-100" alt="...">
                    </div>

                <?php endforeach;?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
        </div>
        <!-- Baner -->
        <br>

        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12 text-left">
                    <ul class="links">
                        <li><a href="<?= site_url('home/populer') ;?>"><h4>Populer  <i class="fas fa-arrow-right"></i></h4></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <?php foreach($videoPopuler->result() as $key=>$data) :?>
                                <td>
                                    <a href="<?= site_url('live/view/'.$data->video_id) ;?>">
                                        <div class="embed-responsive embed-responsive-16by9 kotak">
                                        <iframe class="embed-responsive-item" src="<?= $data->url ;?>" allowfullscreen></iframe>
                                        </div>
                                        <small class="font-weight-bold data-judul"><?=$data->judul ;?></small>
                                    </a>
                                </td>
                            <?php endforeach;?>
                        </tr>
                    </table>
                </div>
            </div> 
        </div>
        <br><br>
        <footer style="background-color: #1a1717;padding:20px;">
            <div class="container">
                <div class="main">
                    <div class="row">
                        <div class="col-6 col-sm-6">
                            <div class="text-white">
                                <h4 class="subscribe">Subscribe Kami!</h4>
                                <p>
                                Jika Anda ingin mendapatkan email dari kami setiap kali kami mengupload video terbaru di youtube
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6 text-right buton">
                            <a href="https://www.youtube.com/channel/UCYgFWijKlo5LK96gGbSGFxA" target="_blank" class="btn btn-danger font-weight-bold rounded mt-3 buton"><h4 id="subc"> <i class="fab fa-youtube"></i> Subscribe</h4></a>
                            <!-- <div class="form mt-5"> -->
                                <!-- <form action="<?= base_url(); ?>subscribe-email" method="post">
                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <i class="fa fa-envelope"></i>
                                            <input type="text" placeholder="Masukan email kamu" class="form-control" autocomplete="off" name="email" />
                                        </div>
                                        <div class="col-sm-2">
                                        <button type="submit" class="btn btn-primary">Subscribe</button>
                                        </div>
                                    </div>    
                                </form> -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </footer>

        <!-- <div class="container mt-5">
            
            <div class="row">
                <div class="col-sm-4 rata">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti similique mollitia temporibus necessitatibus, nulla officia recusandae. Ab quisquam obcaecati sequi distinctio! Totam nam voluptas voluptatibus. Dolorum voluptate accusantium, obcaecati rerum consectetur enim blanditiis ratione? Nesciunt, minima voluptatum odio omnis, blanditiis quia asperiores odit laborum veritatis totam placeat nulla obcaecati quam corporis libero dolores natus? Eius dolor soluta libero dolore voluptate, mollitia doloribus ab tempore sequi reprehenderit. Porro sint qui similique.</p>
                </div>
                <div class="col-sm 2 rata">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati totam, sequi quas molestias earum modi? Dolore eaque dolores atque reiciendis earum id, impedit nemo nisi. Nulla, amet provident maiores laborum itaque facere! </p>
                </div>
                <div class="col-sm-2 rata">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam amet quisquam excepturi deleniti! Iure minus provident sint, odit quis, totam nisi magni ex eius </p>
                </div>
                <div class="col-sm-2 rata">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam ratione nam totam commodi expedita quos sequi id dolores assumenda aspernatur!</p>
                </div>
                <div class="col-sm-2 rata">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo recusandae eum soluta voluptate sequi sit.</p>
                </div>
            </div>
        </div> -->
