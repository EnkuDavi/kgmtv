<div class="container-fluid">
    <h1 class="mt-4"><i class="fas fa-tv"></i> Tambah Banner</h1>
    <hr>
    <br>
    <div class="container">
    <div class="row">
        <div class="col-sm-12 text-right">
            <a href="<?= site_url('banner') ;?>" class="btn btn-warning ml-auto"><i class="fa fa-undo"></i> Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form action="<?= site_url('banner/add_banner') ;?>" enctype="multipart/form-data" method="post" >
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" name="judul" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="">Source</label>
                    <input type="text" name="source" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="">Kategori</label>
                    <select name="kategori" id="" class="form-control">
                        <option value="">--Pilih--</option>
                        <option value="Iklan">Iklan</option>
                        <option value="Promo">Promosi</option>
                        <option value="Portfolio">Portfolio</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Status</label>
                    <select name="status" id="" class="form-control">
                        <option value="">--Pilih--</option>
                        <option value="Aktif">Aktif</option>
                        <option value="Non-aktif">Non-aktif</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Layout</label>
                    <input type="file" name="layout" class="form-control" required>
                </div>

                <div class="form-group text-right">
                    <button type="submit" name="add_banner" class="btn btn-success"><i class="fas fa-paper-plane"></i> Save</button>
                    <button type="reset" class="btn btn-secondary btn-flat"><i class="fa fa-undo"></i> Reset</button>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>