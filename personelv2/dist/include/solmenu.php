<?php
            session_start();
            if (@$_SESSION["girisKontrol"] == 1) {
            }
            else if (@$_SESSION["girisKontrol"] == 0) {
                header("Location:../index.php?i=GİRİSYAPINIZ");
            }
            ?>

<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Anasayfa</div>
                <a class="nav-link" href="./index.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-bars"></i></div>
                    Anasayfa
                </a>
                <div class="sb-sidenav-menu-heading">Personel İşlemleri</div>

                <a class="nav-link" href="personelekle.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-user-plus"></i></div>
                    Personel Ekle
                </a>

                <div class="sb-sidenav-menu-heading">Personel Listeleme</div>

                <a class="nav-link" href="listeleme.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Listele
                </a>
                <div class="sb-sidenav-menu-heading">Kullanıcı Detayları</div>
                <a class="nav-link" href="kullanicidetay.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-user-plus"></i></div>
                    Kullanıcı Detay
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small"></div>
            MrCarrasco
        </div>
    </nav>
</div>