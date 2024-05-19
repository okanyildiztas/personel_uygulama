<?php include 'database.php' ?>


<!DOCTYPE html>
<html lang="en">

<?php ob_start(); ?>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Personel Liste</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous">
    </script>
</head>

<body class="sb-nav-fixed">
    <?php include_once "include/ustmenu.php" ?>
    <div id="layoutSidenav">
        <?php include_once "include/solmenu.php" ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Personel Listesi</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Personel Listeleme</li>
                    </ol>
                    <div class="card mb-4">
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
                                            <th>Action</th>

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
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        
                <?php
                $id = intval(@$_GET["id"]);
                if (@$_GET["is"] == "sil") {
                    $sil = $conn->prepare("DELETE FROM personeller WHERE id = :i");
                    $sil->bindValue(":i", $id, PDO::PARAM_INT);
                    if ($sil->execute()) {
                        header("Refresh:0;url=listeleme.php?i=silindi");
                    }
                }

                $cek = $conn->prepare("select*from personeller");
                $cek->execute();

                while ($row = $cek->fetch(PDO::FETCH_ASSOC)) {
                ?>
                                        <tr>
                                            <td><?=$row['Tc']?></td>
                                            <td><?=$row['Ad']?> <?=$row['Soyad']?></td>
                                            <td><?=$row['Meslek']?></td>
                                            <td><?=$row['Mail']?></td>
                                            <td><?=$row['Tel']?></td>
                                            <td><?=$row['Cinsiyet']?></td>
                                            <td><?=$row['Dogumtarih']?></td>
                                            <td><?=$row['Kayittarih']?></td>

                                            <td><textarea readonly id="" cols="20" rows="2">
                                            <?=$row['Adres']?></textarea>
                                            </td>
                                            <td><textarea readonly id="" cols="20" rows="2">
                                            <?=$row['Bilgi']?></textarea>
                                            </td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                <a class="btn btn-warning btn-xs" style="margin-right: 1%;" href="guncelle.php?id=<?= $row["id"] ?>"> Düzenle </a>
                                                    <a style="margin-left: 2%;" class="btn btn-danger"
                                                        href="listeleme.php?is=sil&id=<?= $row['id']?>">Sil</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                        }
                                       ?>
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
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous">
        </script>
        <script src="assets/demo/datatables-demo.js"></script>
</body>

</html>