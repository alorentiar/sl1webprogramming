<?php

    session_start();

    if(isset($_POST['submit'])){
        $namaDepan = $_POST['namadepan'];
        $namaTengah = $_POST['namatengah'];
        $namaBelakang = $_POST['namabelakang'];
        $tempatLahir = $_POST['tempatlahir'];
        $tglLahir = $_POST['tgllahir'];
        $nik = $_POST['nik'];
        $wargaNegara = $_POST['warganegara'];
        $email = $_POST['email'];
        $noHp = $_POST['nohp'];
        $alamat = $_POST['alamat'];
        $kodePos = $_POST['kodepos'];
        $username = $_POST['username'];
        $password1 = $_POST['password1'];
        $password2 = $_POST['password2'];

        // untuk ambil varnya dulu
        $fotoNama = $_FILES['fotoprofil']['name'];
        $tempNama = $_FILES['fotoprofil']['tmp_name'];

        

        //validasi cek kalo upload foto dan nilai password sama
        if(($password1 == $password2) && (str_ends_with($email,'.com') && (str_contains($email,'@'))
        && is_numeric($noHp) && is_numeric($kodePos) && is_numeric($nik) && (str_ends_with($fotoNama,'.jpg') || str_ends_with($fotoNama,'.png'))
         )){
            $_SESSION['namadepanSession'] = $namaDepan;
            $_SESSION['namatengahSession'] = $namaTengah;
            $_SESSION['namabelakangSession'] = $namaBelakang;
            $_SESSION['tempatlahirSession'] = $tempatLahir;
            $_SESSION['tgllahirSession'] = $tglLahir;
            $_SESSION['nikSession'] = $nik;
            $_SESSION['warganegaraSession'] = $wargaNegara;
            $_SESSION['emailSession'] = $email;
            $_SESSION['nohpSession'] = $noHp;
            $_SESSION['alamatSession'] = $alamat;
            $_SESSION['kodeposSession'] = $kodePos;
            $_SESSION['usernameSession'] = $username;
            $_SESSION['password1Session'] = $password1;
            $_SESSION['password2Session'] = $password2;
            //upload ke filedir
            $folderTujuan = "profilepicture/";
            $unggahFoto = move_uploaded_file($tempNama, $folderTujuan.$fotoNama);
            //simpan pathnya
            $_SESSION['locFotoSession'] = $folderTujuan.$fotoNama;
            $_SESSION['activeSession'] = "aktif";
            header("location:index.php");
        }else{
            $_SESSION['activeSession'] = "tidak";
            header("location:register.php");
        }
    }

?>