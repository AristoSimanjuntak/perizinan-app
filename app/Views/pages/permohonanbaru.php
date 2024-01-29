<?= $this->include('layouts/header'); ?>

<!-- Page Header -->
<div class="page-header">
    <div>
        <h2 class="main-content-title tx-24 mg-b-5">Selamat Datang di Perizinan</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Perizinan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Permohonan Baru</li>
        </ol>
    </div>
    <div class="d-flex">
        <div class="justify-content-center">
        </div>
    </div>
</div>
<!-- End Page Header -->

<!--content-->
<div class="row row-sm">
    <div class="col-sm-12 col-lg-12 col-xl-12">
        <!-- Row -->
        <div class="row row-sm">
            <!-- Tabel -->
            <div class="col-lg-12">
                <div class="card custom-card mg-b-20">
                    <div class="card-body">
                        <div>
                            <a class="btn ripple btn-primary" data-target="#modaldemo3" data-toggle="modal" href="">Tambah Permohonan</a>
                        </div>
                        <br>

                        <div class="table-responsive">
                            <table class="table w-100" id="example3">
                                <thead>
                                    <tr>
                                        <th class="wd-5p">#</th>
                                        <th class="wd-5p">No Resi</th>
                                        <th class="wd-10p">Nama Izin</th>
                                        <th class="wd-10p">No. Izin</th>
                                        <th class="wd-10p">Status</th>
                                        <th class="wd-10p">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td class="text-center">
                                            <button class="btn ripple btn-primary" data-toggle="dropdown">Aksi <i class="icon ion-ios-arrow-down tx-11 mg-l-3"></i></button>
                                            <div class="dropdown-menu">
                                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#editModal">Edit</button>
                                                <form action="" method="post">
                                                    <input type="hidden" name="_method" value="DELETE" />
                                                    <button type="submit" class="dropdown-item">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <div class="modal" id="editModal">
                                        <div class="modal-dialog modal-xl" role="document">
                                            <div class="modal-content modal-content-demo">
                                                <div class="modal-header">
                                                    <h6 class="modal-title">Edit Permohonan Baru</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row row-sm">
                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="card custom-card">
                                                                <div class="card-body">
                                                                    <form action="<?= base_url('/') ?>" method="post">
                                                                        <input type="hidden" name="_method" value="PUT" />
                                                                        <div class="">
                                                                            <div class="form-group">
                                                                                <label class="">Nama Agenda Rapat</label>
                                                                                <input class="form-control" required="" placeholder="Isi Nama Agenda Rapat" type="text" id="" name="" value="">
                                                                            </div>
                                                                            <div>
                                                                                <button class="btn btn-main-primary " type="submit">Simpan</button>
                                                                                <button class="btn btn-secondary" data-dismiss="modal" type="button">Batal</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- modal tambah -->

            <div class="modal" id="modaldemo3">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content modal-content-demo">
                        <div class="modal-header">
                            <h6 class="modal-title">Tambah Permohonan Baru</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="row row-sm">
                                <div class="col-lg-12 col-md-12">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <form action="" method="post">
                                                <input type="hidden" name="_method" value="POST" />
                                                <div class="">
                                                    <div class="form-group">
                                                        <label class="">Nama</label>
                                                        <input class="form-control" required="" placeholder="t" type="text">
                                                    </div>
                                                    <br>
                                                    <div>
                                                        <button class="btn btn-main-primary " type="submit">Simpan</button>
                                                        <button class="btn btn-secondary" data-dismiss="modal" type="button">Batal</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal tambah end -->


        </div>
        <!-- End Row -->
    </div><!-- content end -->

</div><!-- Row end -->

</div>
</div>
</div>

<?= $this->include('layouts/footer'); ?>
<?= $this->include('layouts/sidebar'); ?>
</div>
<?= $this->include('layouts/scripts'); ?>
</body>

</html>