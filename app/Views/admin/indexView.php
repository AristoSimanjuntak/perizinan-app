<?= $this->include('layouts/header-admin'); ?>

<!-- Page Header -->
<div class="page-header">
    <div>
        <h2 class="main-content-title tx-24 mg-b-5">Selamat Datang di Dashboard Admin</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </div>
    <div class="d-flex">
        <div class="justify-content-center">

        </div>
    </div>
</div>
<!-- End Page Header -->

<!--Row-->
<div class="row row-sm">
    <div class="col-sm-12 col-lg-12 col-xl-12">
        <!--Row-->
        <div class="row row-sm  mt-lg-4">
            <div class="col-lg-12 col-md-12">
                <div class="card custom-card overflow-hidden">
                    <div class="card-body">
                        <div>
                            <h6 class="main-content-label mb-1">Grafik Permohonan Izin</h6>
                            <p class="text-muted  card-sub-title">Data per Bulan</p>
                        </div>
                        <div class="card">
                            <canvas id="myCanvas" width="1000" height="500"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Row -->

        <!--Row-->
        <div class="row row-sm">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                <div class="card custom-card">
                    <div class="card-body">
                        <div class="card-item">
                            <div class="card-item-icon card-icon">
                                <svg class="text-primary" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24">
                                    <g>
                                        <rect height="14" opacity=".3" width="14" x="5" y="5" />
                                        <g>
                                            <rect fill="none" height="24" width="24" />
                                            <g>
                                                <path d="M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3z M19,19H5V5h14V19z" />
                                                <rect height="5" width="2" x="7" y="12" />
                                                <rect height="10" width="2" x="15" y="7" />
                                                <rect height="3" width="2" x="11" y="14" />
                                                <rect height="2" width="2" x="11" y="10" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="card-item-title mb-2">
                                <label class="main-content-label tx-13 font-weight-bold mb-1">Permohonan</label>
                                <span class="d-block tx-12 mb-0 text-muted">Sedang di Proses</span>
                            </div>
                            <div class="card-item-body">
                                <div class="card-item-stat">
                                    <p class="mb-0 tx-32 mt-2"><b class="text-primary">145</b></p>
                                    <!-- <small><b class="text-success">55%</b> higher</small> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                <div class="card custom-card">
                    <div class="card-body">
                        <div class="card-item">
                            <div class="card-item-icon card-icon">
                                <i class="ti-wallet sidemenu-icon font-weight-bold text-primary"></i>
                            </div>
                            <div class="card-item-title mb-2">
                                <label class="main-content-label tx-13 font-weight-bold mb-1">Permohonan</label>
                                <span class="d-block tx-12 mb-0 text-muted">Perbaikan</span>
                            </div>
                            <div class="card-item-body">
                                <div class="card-item-stat">
                                    <p class="mb-0 tx-32 mt-2"><b class="text-primary">145</b></p>
                                    <!-- <small><b class="text-success">5%</b> Increased</small> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
                <div class="card custom-card">
                    <div class="card-body">
                        <div class="card-item">
                            <div class="card-item-icon card-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                                    <path d="M0 0h24v24H0V0z" fill="none" />
                                    <path d="M12 4c-4.41 0-8 3.59-8 8 0 1.82.62 3.49 1.64 4.83 1.43-1.74 4.9-2.33 6.36-2.33s4.93.59 6.36 2.33C19.38 15.49 20 13.82 20 12c0-4.41-3.59-8-8-8zm0 9c-1.94 0-3.5-1.56-3.5-3.5S10.06 6 12 6s3.5 1.56 3.5 3.5S13.94 13 12 13z" opacity=".3" />
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM7.07 18.28c.43-.9 3.05-1.78 4.93-1.78s4.51.88 4.93 1.78C15.57 19.36 13.86 20 12 20s-3.57-.64-4.93-1.72zm11.29-1.45c-1.43-1.74-4.9-2.33-6.36-2.33s-4.93.59-6.36 2.33C4.62 15.49 4 13.82 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8c0 1.82-.62 3.49-1.64 4.83zM12 6c-1.94 0-3.5 1.56-3.5 3.5S10.06 13 12 13s3.5-1.56 3.5-3.5S13.94 6 12 6zm0 5c-.83 0-1.5-.67-1.5-1.5S11.17 8 12 8s1.5.67 1.5 1.5S12.83 11 12 11z" />
                                </svg>
                            </div>
                            <div class="card-item-title mb-2">
                                <label class="main-content-label tx-13 font-weight-bold mb-1">Permohonan</label>
                                <span class="d-block tx-12 mb-0 text-muted">Selesai</span>
                            </div>
                            <div class="card-item-body">
                                <div class="card-item-stat">
                                    <p class="mb-0 tx-32 mt-2"><b class="text-primary">145</b></p>
                                    <!-- <small><b class="text-success">5%</b> Increased</small> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End row-->
    </div><!-- col end -->

</div><!-- Row end -->

</div>
</div>
</div>

<?= $this->include('layouts/footer'); ?>
<?= $this->include('layouts/sidebar'); ?>


</div>

<script type="application/javascript" src="<?php echo  base_url('assets/js/rbar.js'); ?>"></script>

<script type="application/javascript">
    var data = [{
        'Januari': 90
    }, {
        'Februari': 80
    }, {
        'Maret': 65
    }, {
        'April': 70
    }, {
        'Mei': 80    
    }, {
        'Juni': 90   
    }, {
        'Juli': 70    
    }, {
        'Agustus': 110    
    }, {
        'September': 100    
    }, {
        'Oktober': 50    
    }, {
        'November': 50    
    }, {
        'Desember': 70    
    
    }];
    var barcolor = ['#5c5fff'];
    var obj = {
        barId: 'myCanvas', // Need To pass canvas id  and mandatory to generate the bar graph
        barData: data, // Bar data in the form of array of object and mandatory to pass atleast 1 value
        barColour: barcolor, // Bar colour as array and the default value is '#020202'
        barStroke: 40, // Bar Stroke as per your requirement and the default value is 50
        barSpaces: 70, // Space between 2 bar graph and the default value is 80
        barInnerPadding: 80, // Padding inside all side of the canvas and the default value is 80
        barDivisionPositionFromLineX: 20, // X-Axis division position from left side of the bar graph and the deafult value is 20
        barDivisionPositionFromLineY: 20, // Y-Axis division position from bottom side of the bar graph and the deafult value is 20
        barAnimation: true, // Used to define the animation from the bottom to top position and the default value is true
        barAnimationSpeed: 1, // Define the animation spedd of the graph and the default value is 1
        barTextFont: "12px Arial", // Define font size with font family name and the default value is 14px Arial
        barDivision: 12, // Define the division to the Y-Axis and the default value is 5
        barScaleDivisionReqX: true, // Define the scale division marking to the X-Axis and the default value is true
        barScaleDivisionReqY: true, // Define the scale division marking to the Y-Axis and the default value is true
        barScaleDivisionY: 20, // Define the manually setup the Y-Axis division upto the highest value of your array default value is null 
        barScaleDivisionStroke: 1, //Define the stroke of scale division and the default value is 1
        barScaleDivisionColour: '#333', //Define the stroke colour of the scale division and the default value is #333
        barAxisLineStroke: 2, //Define the stroke of the X & Y-Axis line and the default value is 1
        barAxisLineColour: '#333', //Define the stroke colour of the X & Y-axis line and the default value is #333
        // barMaxHeight: 120 // Define the maximum height of the Y-Axis line of the bar graph and the default value is null
    };

    generateBarGraph(obj);
</script>
<!-- Internal Chartjs charts js-->
<script src="<?= base_url('assets/plugins/chart.js/Chart.bundle.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/chart.chartjs.js'); ?>"></script>

<?= $this->include('layouts/scripts'); ?>

</body>

</html>