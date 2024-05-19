<?php include 'database.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Personel Ekleme </title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous">
    </script>
</head>

<body class="sb-nav-fixed">
    <?php include "include/ustmenu.php" ?>
    <div id="layoutSidenav">
        <?php include "include/solmenu.php" ?>
        <div id="layoutSidenav_content">
            <main>

                <div class="container-fluid">
                    <h1 class="mt-4">Personel Ekleme</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Personel Bilgi Formları</li>
                    </ol>
                    <?php
                    @$id = $_GET["id"];
                    $cek = $conn->prepare("select*from `personeller` where `id` = :id");
                    $cek->bindValue(":id", $id, PDO::PARAM_INT);
                    $cek->execute();
                    $row = $cek->fetch(PDO::FETCH_ASSOC);

                    if (@$_POST["submit"]) {
                        $Tc = $_POST["tcno"];
                        $Ad = $_POST["personelad"];
                        $Soyad = $_POST["personelsoyad"];
                        $Meslek = $_POST["personelmeslek"];
                        $Mail = $_POST["personelmail"];
                        $Tel = $_POST["personeltel"];
                        $Cinsiyet = $_POST["personelcinsiyet"];
                        $Dtarih = $_POST["personeldogumtarih"];
                        $Adres = $_POST["personeladres"];
                        $Bilgi = $_POST["personelbilgi"];

                        $guncelle = $conn->prepare("UPDATE `personeller` SET 
                        `Tc` = :Tc, 
                        `Ad` = :Ad, 
                        `Soyad` = :Soyad, 
                        `Meslek` = :Meslek, 
                        `Mail` =:Mail, 
                        `Tel` = :Tel,
                        `Cinsiyet`= :Cinsiyet,
                        `Dogumtarih` = :Dtarih,
                        `Adres` = :Adres, 
                        `Bilgi` = :Bilgi 
                        WHERE `id` =:id" );
                        $guncelle->bindValue(":id",$id, PDO::PARAM_INT);
                        $guncelle->bindValue(":Tc",$Tc, PDO::PARAM_STR);
                        $guncelle->bindValue(":Ad",$Ad, PDO::PARAM_STR);
                        $guncelle->bindValue(":Soyad",$Soyad, PDO::PARAM_STR);
                        $guncelle->bindValue(":Meslek",$Meslek,PDO::PARAM_STR);
                        $guncelle->bindValue(":Mail",$Mail,PDO::PARAM_STR);
                        $guncelle->bindValue(":Tel",$Tel,PDO::PARAM_STR);
                        $guncelle->bindValue(":Cinsiyet",$Cinsiyet,PDO::PARAM_STR);
                        $guncelle->bindValue(":Dtarih",$Dtarih);
                        $guncelle->bindValue(":Adres",$Adres,PDO::PARAM_STR);
                        $guncelle->bindValue(":Bilgi",$Bilgi,PDO::PARAM_STR);

                        if ($guncelle->execute()) {
                            header("Location: listeleme.php?i=guncellendi");
                        }
                        else {
                            print_r($guncelle->errorInfo());    
                        }
                                 
                    }
                    ?>
                   
                    <form role="form" action="" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="tcno" class="form-label">Kimlik Numarası</label>
                            <input name="tcno" type="text" value="<?=$row["Tc"] ?>" class="form-control" id="tcno">
                        </div>

                        <div class="mb-3">
                            <label for="personelad" class="form-label">Personel Adı</label>
                            <input name="personelad" type="text" value="<?=$row["Ad"] ?>" class="form-control" id="personelad">
                        </div>
                        <div class="mb-3">
                            <label for="personelsoyad" class="form-label">Personel Soyad</label>
                            <input name="personelsoyad" type="text" value="<?=$row["Soyad"] ?>"  class="form-control" id="personelsoyad">
                        </div>
                        <div class="mb-3">
                            <label for="personelmeslek" class="form-label">Personel Mesleği</label>
                            <input name="personelmeslek" type="text" value ="<?=$row["Meslek"] ?>" class="form-control" id="personelmeslek">
                        </div>
                        <div class="mb-3">
                            <label for="personelmail" class="form-label">Personel Mail</label>
                            <input name="personelmail" type="text"value= "<?=$row["Mail"] ?>" class="form-control" id="personelmail">

                        </div>
                        <div class="mb-3">
                            <label for="personeltel" class="form-label">Personel Teli</label>
                            <input name="personeltel" type="text" value="<?=$row["Tel"] ?>" class="form-control" id="personeltel">
                        </div>

                        <div class="mb-3">
                            <select class="form-select" name="personelcinsiyet">
                            <option value="<?=$row["Cinsiyet"] ?>" selected><?=$row["Cinsiyet"] ?></option>
                                <option value="Erkek">Erkek</option>
                                <option value="Kadın">Kadın</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="personeldogumtarih" class="form-label">Doğum Tarihi</label>
                            <input name="personeldogumtarih" type="date" value="<?= date("Y-m-d", strtotime($row["Dogumtarih"])) ?>" " class="form-control" id="personeldogumtarih">
                        </div>

                        <div class="mb-3">
                            <label for="personeladres" class="form-label">Personel Adres</label>
                            <textarea class="form-control" name="personeladres" id="personeladres" cols="20" rows="5"><?=$row["Adres"] ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="personelbilgi" class="form-label">Personel Bilgi</label>
                            <textarea class="form-control"  name="personelbilgi" id="personelbilgi" cols="20" rows="5"><?=$row["Bilgi"] ?></textarea>
                        </div>
                        
                        <input type="submit" name="submit" class="btn btn-primary" value="Kaydet">
                    </form>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>
</body>

</html>