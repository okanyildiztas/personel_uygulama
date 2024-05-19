<!DOCTYPE html>
<html lang="en">
<? include_once 'database.php'; ?>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Kullanıcı Detay</title>
  <link href="css/styles.css" rel="stylesheet" />
  <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
  <link rel="stylesheet" href="css/detay.css">
 
</head>

<body class="sb-nav-fixed">
<?php include "include/ustmenu.php" ?>
    <div id="layoutSidenav">
    <?php include "include/solmenu.php" ?>
        <div id="layoutSidenav_content">
        <main style="margin-top: 5%;">

        <div class="container main-section">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 image-section" style="max-width: 97.89%;">
              
            </div>
            <div class="row col-md-12">
              <div class="col-md-3 col-sm-3 col-xs-12 user-profil-part pull-left">
                <div class="row ">
                  <div class="col-md-12 col-md-12-sm-12 col-xs-12 user-image text-center">
                    
                  </div>
                  
                  <div class="row user-detail-row">
                  </div>
                </div>
              </div>
              <div class="col-md-9 col-sm-9 col-xs-12 pull-right profile-right-section">
                <div class="row profile-right-section-row">
                  <div class="col-md-12 profile-header">
                    <div class="row">
                      <div class="col-md-8 col-sm-6 col-xs-6 profile-header-section1 pull-left">
                        <h1></h1>
                        <h5>Kullanıcı Adı ve Şifre Güncelleme</h5>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-12">
                        <ul class="nav nav-tabs" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" href="#profile" role="tab" data-toggle="tab"><i class="fas fa-user-circle"></i> Personel Bilgi</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#buzz" role="tab" data-toggle="tab"><i class="fas fa-info-circle"></i> Loglar</a>
                          </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                          <div role="tabpanel" class="tab-pane fade show active" id="profile">
                          <?php 
                            
                            if (@$_POST["kaydet"])  {
                            
                            $kullaniciadi = $_POST["kullaniciadi"];
                            $sifre = $_POST["sifre"];

                            $guncelle = $conn->prepare("UPDATE `kullanici` SET 
                            `kullaniciadi`=:kullaniciadi,
                            `sifre`=:sifre WHERE `id`=1");

                            $guncelle->bindValue(":kullaniciadi",$kullaniciadi,PDO::PARAM_STR);
                            $guncelle->bindValue(":sifre",$sifre,PDO::PARAM_STR);
 
                            if($guncelle->execute()) {

                              
                            }
                            else {
                              print_r($guncelle->errorInfo());
                            }

                            }                       
                            
                                
                            ?>
                          <?php
                              
                              $kullanicigetir = $conn->prepare("select*from kullanici");
                              $kullanicigetir->execute();

                              while ($row = $kullanicigetir->fetch(PDO::FETCH_ASSOC)) {

                              ?>


                            <form role="form" action=""  method="POST" enctype="multipart/form-data">
                              <div class="row mt-3">
                                <div class="col-md-2">
                                  <label>Kullanıcı Adı</label>
                                </div>
                                
                                <div class="col-md-3">
                                  <input type="text" class="form-control" name="kullaniciadi" value="<?=$row["kullaniciadi"]?>"   placeholder="Kullanıcı Adı">
                                </div>
                                

                              </div>
                              <div class="row mt-3">
                                <div class="col-md-2">
                                  <label>Şifre</label>
                                </div>
                                
                                <div class="col-md-3">
                                  <input class="form-control" type="text" name="sifre" value="<?=$row["sifre"]?>" placeholder="Şifre">
                                </div>
                                <div class="col-md-3">
                                  <input type="submit" name="kaydet"  value="Kullanıcı Adı ve Şifre Güncelle" class="btn btn-success"></input>
                                </div>
                              </div>

                              
                            </form>
                            <?php
                              }
                            ?>
                            

                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="buzz">
                            <div class="row mt-3">
                            <?php
                              
                              $logcek = $conn->prepare("select*from log");
                              $logcek->execute();

                              while ($row = $logcek->fetch(PDO::FETCH_ASSOC)) {

                              ?>
                                <div class="col-md-4">
                                  <label>Kullanıcı:&nbsp;<?=$row["kullanici"]?></label>
                                </div>
                                <div class="col-md-4">
                                  <label> İş:&nbsp;&nbsp;<b><?=$row["is"]?></b></label>
                                </div>
                                <div class="col-md-4">
                                  <label>Tarih:&nbsp;<?=$row["date"]?></label>
                                </div>

                              <?php
                              }
                              ?>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


      </main>
      
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
 
</body>
