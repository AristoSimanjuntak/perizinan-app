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
                                                                    <form action="" method="post">
                                                                        <input type="hidden" name="_method" value="POST" />
                                                                        <div class="">
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <div class="form-group">
                                                                                        <label class="main-content-label tx-11 tx-medium tx-gray-600">Jenis Izin</label>
                                                                                        <select name="contry" class="form-control select1">
                                                                                            <option value="">Pilih Jenis Izin</option>
                                                                                            <option value="laki">1</option>
                                                                                            <option value="perempuan">2</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col">
                                                                                    <div class="form-group">
                                                                                        <label class="main-content-label tx-11 tx-medium tx-gray-600">Jenis Permohonan</label>
                                                                                        <select name="contry" class="form-control select1">
                                                                                            <option value="">Pilih Jenis Permohonan</option>
                                                                                            <option value="laki">1</option>
                                                                                            <option value="perempuan">2</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <div>
                                                                                    <label class="main-content-label mb-1 tx-gray-600">Sarana Kesehatan</label>
                                                                                </div>
                                                                                <div class="">
                                                                                    <div class="row row-xs align-items-center mg-b-20">
                                                                                        <div class="col-md-4">
                                                                                            <label class="main-content-label tx-11 tx-medium tx-gray-600">Izin Sebagai</label>
                                                                                        </div>
                                                                                        <div class="col-md-8 mg-t-5 mg-md-t-0">
                                                                                            <select name="contry" class="form-control select1 main-content-label tx-11 tx-medium tx-gray-600">
                                                                                                <option value="">Pilih Izin</option>
                                                                                                <option value="laki">1</option>
                                                                                                <option value="perempuan">2</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row row-xs align-items-center mg-b-20">
                                                                                        <div class="col-md-4">
                                                                                            <label class="main-content-label tx-11 tx-medium tx-gray-600">No STR/SK</label>
                                                                                        </div>
                                                                                        <div class="col-md-8 mg-t-5 mg-md-t-0">
                                                                                            <input class="form-control" placeholder="Contoh : 02 01 7 2 2 21 - 40288095" type="text">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row row-xs align-items-center mg-b-20">
                                                                                        <div class="col-md-4 ">
                                                                                            <label class="main-content-label tx-11 tx-medium tx-gray-600">Kategori Massa Berlaku STR</label>
                                                                                        </div>
                                                                                        <div class="col-md-8 mg-t-5 mg-md-t-0">
                                                                                            <select name="contry" class="form-control select1">
                                                                                                <option value="">Pilih Izin</option>
                                                                                                <option value="laki">1</option>
                                                                                                <option value="perempuan">2</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row row-xs align-items-center mg-b-20">
                                                                                        <div class="col-md-4">
                                                                                            <label class="main-content-label tx-11 tx-medium tx-gray-600">Izin Praktik Ke</label>
                                                                                        </div>
                                                                                        <div class="col-md-8 mg-t-5 mg-md-t-0">
                                                                                            <input class="form-control" placeholder="Izin Praktik Ke" type="praktik">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row justify-content-end mb-0">
                                                                                        <div class="col-md-8 pl-md-2">
                                                                                            <button class="btn ripple btn-secondary pd-x-30">Ambil Data Sarana</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
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
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label class="main-content-label tx-11 tx-medium tx-gray-600">Jenis Izin</label>
                                                                <select name="contry" class="form-control select1">
                                                                    <option value="">Pilih Jenis Izin</option>
                                                                    <option value="laki">1</option>
                                                                    <option value="perempuan">2</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label class="main-content-label tx-11 tx-medium tx-gray-600">Jenis Permohonan</label>
                                                                <select name="contry" class="form-control select1">
                                                                    <option value="">Pilih Jenis Permohonan</option>
                                                                    <option value="laki">1</option>
                                                                    <option value="perempuan">2</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div>
                                                            <label class="main-content-label mb-1 tx-gray-600">Sarana Kesehatan</label>
                                                        </div>
                                                        <div class="">
                                                            <div class="row row-xs align-items-center mg-b-20">
                                                                <div class="col-md-4">
                                                                    <label class="main-content-label tx-11 tx-medium tx-gray-600">Izin Sebagai</label>
                                                                </div>
                                                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                                                    <select name="contry" class="form-control select1 main-content-label tx-11 tx-medium tx-gray-600">
                                                                        <option value="">Pilih Izin</option>
                                                                        <option value="laki">1</option>
                                                                        <option value="perempuan">2</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row row-xs align-items-center mg-b-20">
                                                                <div class="col-md-4">
                                                                    <label class="main-content-label tx-11 tx-medium tx-gray-600">No STR/SK</label>
                                                                </div>
                                                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                                                    <input class="form-control" placeholder="Contoh : 02 01 7 2 2 21 - 40288095" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="row row-xs align-items-center mg-b-20">
                                                                <div class="col-md-4 ">
                                                                    <label class="main-content-label tx-11 tx-medium tx-gray-600">Kategori Massa Berlaku STR</label>
                                                                </div>
                                                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                                                    <select name="contry" class="form-control select1">
                                                                        <option value="">Pilih Izin</option>
                                                                        <option value="laki">1</option>
                                                                        <option value="perempuan">2</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row row-xs align-items-center mg-b-20">
                                                                <div class="col-md-4">
                                                                    <label class="main-content-label tx-11 tx-medium tx-gray-600">Izin Praktik Ke</label>
                                                                </div>
                                                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                                                    <input class="form-control" placeholder="Izin Praktik Ke" type="praktik">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row justify-content-end mb-0">
                                                                <div class="col-md-8 pl-md-2">
                                                                    <button class="btn ripple btn-secondary pd-x-30">Ambil Data Sarana</button>
                                                                </div>
                                                            </div>
                                                        </div>
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