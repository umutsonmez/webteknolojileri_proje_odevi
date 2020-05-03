<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="main.css">
    <title>Umut Sönmez</title>
  </head>
  <body >
   <nav class="navbar navbar-expand-lg navbar-white bg-dark">
            <a class="navbar-brand" href="#"></a>
            <img src="" alt="">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="Anasayfa.html">Anasayfa <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Özgeçmiş.html">Özgeçmiş</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Şehrim.html">Şehrim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="İletişim.html">İletişim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Login.php">Login</a>
                    </li>

                </ul>
            </div>
        </nav><br>
        <br>
    <h2 id="giris">GİRİŞ</h2><br>
    <div id="frm">
        <form action="dogrulama.php" method="POST">
            <p>
               <label for="email">Kullanıcı Adı:</label><br>
			<input type="email" id="email" name="email">
            </p>
            <p>
                <label>Şifre</label><br>
                <input type="password" id="pass"name="pass">
            </p>
            <p>
               
                <input type="submit" id="btn"name="btn">
            </p>
        </form>

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>