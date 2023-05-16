<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK501</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
    body {
        background-image: url("https://i.postimg.cc/m2d828dQ/5320507.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }

    .container {
        justify-content: center;
        align-items: center;
        height: 100vh;
        width: 500px;
    }

    .img img {
        width: 100%;
        height: auto;
    }

    .login-container {
        background-color: #fff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        font-size: 24px;
        margin-bottom: 20px;
    }

    .goals-container {
        display: flex;
        flex-direction: column;
    }

    .goals-container a {
        margin-bottom: 10px;
        padding: 10px 20px;
        background-color: salmon;
        color: #fff;
        border-radius: 4px;
        text-decoration: none;
    }

    .goals-container a:hover {
        background-color: black;
    }
</style>
<body>
    <div class="container">
        <div class="img">
            <img src="assets/bg.jpg" alt="">
        </div>
        <div class="login-container">
            <form action="" method="POST">
                <h2 class="text-center">Portal Perpustakaan</h2>
                <div class="goals-container">
                    <a href="Buku.php">Buku</a>
                    <a href="Member.php">Member</a>
                    <a href="Peminjaman.php">Peminjaman</a>
                </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
