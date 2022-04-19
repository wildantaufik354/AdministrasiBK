<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Administrasi BK</title>
    <style>
        @media (min-width: 1px) and (max-width: 450px){
            .container-fluid{
                position: fixed;
            }
        }
    </style>
</head>
<body>
<div class="container-fluid">
</div>
    <div class="d-flex mt-3 justify-content-center">
        <img style="width: 500px;" src="./images/chooseimg3.png" alt="">
    </div> 
    <div class="d-flex mt-3 justify-content-center">
    <div class="d-flex flex-column">
        <h1>Selamat Datang</h1>
        <h4>Silahkan Pilih Opsi Login Anda</h4>
        <form action="./login/login.html" method="post">
        <div class="btn btn-block"><button type="submit">LOGIN SEBAGAI GURU</button></div>
        </form>
        <form action="./registrasi/registrasi_Murid.html" method="post">
        <div class="btn btn-block"><button type="submit">LOGIN SEBAGAI MURID</button></div>
        </form>
    </div>
    </div>
</div>
</body>
</html>