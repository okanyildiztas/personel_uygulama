<?php
session_start();
if (@$_SESSION["girisKontrol"] == 1) {
    header("Refresh:0;url=index.php");
}
?>

<?php include 'database.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Giriş Yap</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</head>

<?php

if (@$_POST["giris"]) {
    $kadi = $_POST["kullaniciadi"];
    $password = $_POST["sifre"];
    $dogrulama = strtolower($_POST["kod"]);
    if (empty($kadi) or empty($password)) {
        echo 'ALANLAR BOŞ BIRAKILAMAZ';
    } else {

        if ($dogrulama == strtolower($_SESSION["dogrulamakodu"]) ) {
            $sql = $conn->prepare("SELECT * FROM kullanici WHERE kullaniciadi='$kadi' AND sifre='$password'");
            $query = $conn->query(" SELECT * FROM kullanici WHERE kullaniciadi='{$kadi}' AND sifre='{$password}'")->fetch(PDO::FETCH_ASSOC);
    
            $sql->execute();
    
            if ($sql->rowCount()) {
                $_SESSION["girisKontrol"] = 1;
                $_SESSION["kadi"] = $query["kullaniciadi"];
                $_SESSION["sifre"] = $query["sifre"];
                $kullanici = $_SESSION["kadi"];
                $is = 'giriş';

                $girisLogEkle = $conn->prepare("INSERT INTO log(`kullanici`,`is`)
                VALUES ('$kullanici','$is')");
                $girisLogEkle->execute();
                
                header("Refresh:0;url=index.php");
            } else {
                echo 'BİLGİLERİ DOĞRU GİRİNİZ';
            }
        }

        else {
            echo '<script>alert("Doğrulama Kodunuz Yanlış");</script>';
        }
       
    }
}

?>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Giriş Yap</h3>
                                </div>
                                <div class="card-body">
                                    <form role="form" action="" method="POST">
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputEmailAddress">Kullanıcı Adı</label>
                                            <input class="form-control py-4" id="inputEmailAddress" type="text" name="kullaniciadi" placeholder="" />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputPassword">Şifre</label>
                                            <input class="form-control py-4" id="inputPassword" name="sifre" type="password" placeholder="" />
                                        </div>
                                        <br>
                                        <img src="img.php" height="25" width="75" style="margin-left:10px;" />
                                        Doğrulama Kodu: <input style="margin-top: 5%;"  placeholder="Dogrulama Kodu (Büyük Harf DuyarSIZ)" class="form-control" size="4"
                                        maxlength="4" name="kod" type="text" required />
                                        <br>
                                        <br>
                                        <div style="float:right" class="form-group d-flex align-items-center justify-content-between  mb-0">
                                            <input type="submit" name="giris" value="Giriş" class="btn btn-primary" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
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
</body>

</html>