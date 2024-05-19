<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Personel Takip</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php include "include/ustmenu.php" ?>
        <div id="layoutSidenav">
           <?php include "include/solmenu.php" ?> 
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Anasayfa</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Lorem İpsum</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Personel Ekle</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="personelekle.php">Personel Ekle</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Personel Listele</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="listeleme.php">Personel Listele</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Kullanıcı Detay</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="kullanicidetay.php">Kullanıcı</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Çıkış Yap</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="cikis.php">Çıkış Yap</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card mb-4">
                        <div class="card-header">
                        <i class="fas fa-users"></i>
                            Personel Listesi
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Tc No</th>
                                            <th>Ad - Soyad</th>
                                            <th>Meslek</th>
                                            <th>Mail Adresi</th>
                                            <th>Teli</th>
                                            <th style="width: 5px;">E/K</th>
                                            <th>Doğum Tarihi</th>
                                            <th>Eklenme Tarihi</th>
                                            <th>Adresi Bilgisi</th>
                                            <th>Notlar</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Tc No</th>
                                            <th>Ad - Soyad</th>
                                            <th>Meslek</th>
                                            <th>Mail Adresi</th>
                                            <th>Teli</th>
                                            <th style="width: 5px;">Cinsiyet</th>
                                            <th>Doğum Tarihi</th>
                                            <th>Eklenme Tarihi</th>
                                            <th>Adresi Bilgisi</th>
                                            <th>Notlar</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1111</td>
                                            <td>asdasddas</td>
                                            <td>asdasddas</td>
                                            <td>asdasddas</td>
                                            <td>213123</td>
                                            <td>E</td>
                                            <td>10.25.2010</td>
                                            <td>10.10.2000</td>
                                            <td><textarea readonly id="" cols="20" rows="2">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error soluta tempora eveniet atque nihil ad, fugiat harum quo amet vel. Molestias laboriosam nemo provident quasi sit fuga nisi omnis ut?</textarea>
                                            </td>
                                            <td><textarea readonly id="" cols="20" rows="2">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error soluta tempora eveniet atque nihil ad, fugiat harum quo amet vel. Molestias laboriosam nemo provident quasi sit fuga nisi omnis ut?</textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1111</td>
                                            <td>asdasddas</td>
                                            <td>asdasddas</td>
                                            <td>asdasddas</td>
                                            <td>213123</td>
                                            <td>E</td>
                                            <td>10.10.2000</td>
                                            <td>10.10.2000</td>
                                            <td><textarea readonly id="" cols="20" rows="2">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error soluta tempora eveniet atque nihil ad, fugiat harum quo amet vel. Molestias laboriosam nemo provident quasi sit fuga nisi omnis ut?</textarea>
                                            </td>
                                            <td><textarea readonly id="" cols="20" rows="2">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error soluta tempora eveniet atque nihil ad, fugiat harum quo amet vel. Molestias laboriosam nemo provident quasi sit fuga nisi omnis ut?</textarea>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted"> &copy; MrCarrasco</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
