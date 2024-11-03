
 <!DOCTYPE html>
<html>
<head>
<title>Login Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="icon" href="img/logoKominfo.png" type="image/png">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/stylenew.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->

</head>
<body id="login">
 <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card text-dark mb-3" style="width: 500px;">
        <div class="card-header text-center text-black" ><p class="fs-1 fw-">Login Admin</p></div>
        <div class="card-body">
            <form class=" gap-3 d-flex flex-column justify-content-center align-items-center" 
                action="proses_login.php" method="post">
                <div class="input-container">
                    <input type="text" id="input" required="" name="username" >
                    <label for="input" class="label">Masukan Nama</label>
                    <div class="underline"></div>
                  </div>
                  <div class="input-container">
                    <input type="password" id="password" required="" name="password" >
                    <label for="input" class="label">Password</label>
                    <div class="underline"></div>
                  </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
</body>
</html>