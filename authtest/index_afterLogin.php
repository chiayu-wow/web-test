<?php
                    DEFINE('DB_HOST','localhost');
                    DEFINE('DB_USER','auth');
                    DEFINE('DB_PASSWORD','yoyo27653152');
                    DEFINE('DB_NAME','Auth');

                    $dbc=@mysqli_connect(DB_HOST , DB_USER,DB_PASSWORD,DB_NAME)
                    OR die('Could not connect to sql : ' .
                    mysqli_connect_error());

                    $sql = "SELECT name FROM users";
                    $result = $dbc->query($sql);
                    $username;
                    
                    if ($result->num_rows > 0) {
                        // 输出数据
                        while($row = $result->fetch_assoc()) {
                        $username=$row["name"];
                        }
                    } else {
                        echo "0 结果";
                    }
                   
                    ?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Bamboo</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

   
      <div class="container">
        <div class="card text-center">
            <div class="card-header">
            
            <?php    
             echo "<h1>'welcome back!!!! ' $username </h1>"; ?>
            </div>
            <div class="card-body">
              <img src="https://media.istockphoto.com/photos/bamboo-grove-picture-id505849036?k=20&m=505849036&s=612x612&w=0&h=zDwUjH26VG-6JIZWSiesTFVPQA_ljUmirBub6O3ZZFE=" alt="">
            </div>
            <div class="card-footer text-muted">
            <button class="btn-danger btn" onclick="window.location.href='index.html'">logout!</button>
            </div>
          </div>
      </div>

    
</body>
</html>