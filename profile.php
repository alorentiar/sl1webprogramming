<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Profile</title>
</head>
<body>
<div class="wrapper-all">
    <div class="navbar">
        <p>Aplikasi Pengelolaan Keuangan</p>
        <div class="home-profile-menu">
            <a href="home.php" class="nav-home-profile">Home</a>
            <a href="profile.php" class="nav-profile-profile">Profile</a>
        </div>
        <a href="logout.php" class="nav-logout">Logout</a>
    </div>
    <div class="container-profil-profil">
        <h2>Profil Pribadi</h2>
        <div class="container-profile-tampilan">
            <div class="part1-profile">
                <div class="specific-part">
                    <p>Nama Depan : <b><?php echo $_SESSION['namadepanSession']; ?></b></p>
                    <br>
                </div>
                <div class="specific-part">
                    <p>Tempat Lahir : <b><?php echo $_SESSION['tempatlahirSession']; ?></b></p>
                    <br>
                </div>
                <div class="specific-part">
                    <p>Warga Negara : <b><?php echo $_SESSION['warganegaraSession']; ?></b></p>
                    <br>
                </div>  
                <div class="specific-part">
                    <p>Alamat : <b><?php echo $_SESSION['alamatSession']; ?></b></p>
                    <br>
                </div>  
            </div>

            <div class="part2-profile">
                <div class="specific-part">
                    <p> Nama Tengah : <b><?php echo $_SESSION['namatengahSession']; ?></b> </p>
                    <br>
                </div>
                <div class="specific-part">
                    <p>Tgl Lahir : <b><?php echo date('d-m-Y',strtotime($_SESSION['tgllahirSession'])); ?></b></p>
                    <br>
                </div>
                <div class="specific-part">
                    <p>Email : <b><?php echo $_SESSION['emailSession']; ?></b></p>
                    <br>
                </div>
                <div class="specific-part">
                    <p>Kode Pos : <b><?php echo $_SESSION['kodeposSession']; ?></b></p>
                    <br>
                </div>
            </div>
            
            <div class="part3-profile">
                <div class="specific-part">
                    <p>Nama Belakang : <b><?php echo $_SESSION['namabelakangSession']; ?></b></p>
                    <br>
                </div>
                <div class="specific-part">
                    <p>NIK : <b><?php echo $_SESSION['nikSession']; ?></b></p>
                    <br>
                </div>
                <div class="specific-part">
                    <p>NoHP : <b><?php echo $_SESSION['nohpSession']; ?></b></p>
                    <br>
                </div>
                <div class="specific-part-photo">
                    <p>Foto Profil : </p>
                    <img src="<?php echo $_SESSION['locFotoSession']; ?>" alt="Foto Profil">
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>