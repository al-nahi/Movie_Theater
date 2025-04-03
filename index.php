<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Night-night</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>
<body class="bg-dark">
    <section>
        <header class="p-3 text-bg-dark">
            <div class="container">
              <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="index.html" class="d-flex align-items-center mb-2 mb-lg-0 mx-3 text-danger text-decoration-none">
                  <img src="./images/moon-stars-fill.svg" class="img-thumbnail mx-2" alt="moon image">
                  <h1>Night-night</h1>
                </a>
        
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                  <li><a href="#" class="nav-link px-2 text-success">Movie list</a></li>
                  <li><a href="#" class="nav-link px-2 text-success">Book Tickets</a></li>
                  <li><a href="#" class="nav-link px-2 text-success">About</a></li>
                </ul>
        
                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search" action="keyword_search.php" method="post">
                  <input type="search" class="form-control form-control-dark text-black" name="keyword" placeholder="Search Movies">
                  <input type="submit" class="btn btn-outline-primary mt-2" value="search">
                </form>
        
                <div class="text-end">
                  <a href="login.php"><button type="button" class="btn btn-outline-light me-2">Login</button></a>
                  <a href="sign_up.php"><button type="button" class="btn btn-warning">Sign-up</button></a>
                </div>
              </div>
            </div>
          </header>
    </section>

    <section>
        <div class="container-xl">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./images/Kung Fu Panda-4.jpg" class="d-block w-100" alt="Kung Fu Panda-4">
                </div>
                <div class="carousel-item">
                    <img src="./images/Godzilla Vs Kong-The New Empire.jpg" class="d-block w-100" alt="Godzilla Vs Kong-The New Empire">
                </div>
                <div class="carousel-item">
                    <img src="./images/Avatar-The Last Airbender.jpg" class="d-block w-100" alt="Avatar-The Last Airbender">
                </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <section>
      <h2 class="text-left text-light  border border-4 border-danger my-4">Recently Released</h2>
    </section>

    <section>
        <div class="container py-4">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 text-center">
              <div class="col">
                  <div class="card">
                      <img src="./images/Godzilla Vs Kong-The New Empire.jpg" class="card-img-top" alt="Godzilla Vs Kong-The New Empire">
                      <div class="card-body">
                          <h5 class="card-title">Godzilla Vs Kong-The New Empire</h5>
                          <a href="#" class="btn btn-primary">View Details</a>
                          <a href="#" class="btn btn-primary">Get Tickets</a>
                      </div>
                  </div>
              </div>
              <div class="col">
                  <div class="card">
                      <img src="./images/Avatar-The Last Airbender.jpg" class="card-img-top" alt="Avatar-The Last Airbender">
                      <div class="card-body">
                          <h5 class="card-title">Avatar-The Last Airbender</h5>
                          <a href="#" class="btn btn-primary">View Details</a>
                          <a href="#" class="btn btn-primary">Get Tickets</a>
                      </div>
                  </div>
              </div>
              <div class="col">
                  <div class="card">
                      <img src="./images/Kung Fu Panda-4.jpg" class="card-img-top" alt="Kung Fu Panda-4">
                      <div class="card-body">
                          <h5 class="card-title">Kung Fu Panda-4</h5>
                          <a href="#" class="btn btn-primary">View Details</a>
                          <a href="#" class="btn btn-primary">Get Tickets</a>
                      </div>
                  </div>
              </div>
              <div class="col">
                  <div class="card">
                      <img src="./images/Prey.jpg" class="card-img-top" alt="Prey">
                      <div class="card-body">
                          <h5 class="card-title">Prey</h5>
                          <a href="#" class="btn btn-primary">View Details</a>
                          <a href="#" class="btn btn-primary">Get Tickets</a>
                      </div>
                  </div>
              </div>
              <div class="col">
                  <div class="card">
                      <img src="./images/Rangoli.jpg" class="card-img-top" alt="Rangoli">
                      <div class="card-body">
                          <h5 class="card-title">Rangoli</h5>
                          <a href="#" class="btn btn-primary">View Details</a>
                          <a href="#" class="btn btn-primary">Get Tickets</a>
                      </div>
                  </div>
              </div>
              <div class="col">
                  <div class="card">
                      <img src="./images/Yodha.jpg" class="card-img-top" alt="Yodha">
                      <div class="card-body">
                          <h5 class="card-title">Yodha</h5>
                          <a href="#" class="btn btn-primary">View Details</a>
                          <a href="#" class="btn btn-primary">Get Tickets</a>
                      </div>
                  </div>
              </div>
          </div>
        </div>
    </section>
    <section class="text-bg-secondary">
        <div class="container">
            <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
            
                <div class="col mb-3">
                    <img src="./images/moon-stars-fill.svg" class="img-thumbnail" alt="moon image">
                </div>
            
                <div class="col mb-3">
                    <h5>370 Project</h5>
                    <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Movie Theater</a></li>
                    </ul>
                </div>
            
                <div class="col mb-3">
                    <h5>Group-6 Members</h5>
                    <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Al-Nahian</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Sadman</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Nusrat</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Moontasir</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Akib</a></li>
                    </ul>
                </div>
            
                <div class="col mb-3">
                    <h5>Lab Faculties</h5>
                    <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Rakin Bin Rabbani</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">M. Shafiul Alam</a></li>
                    </ul>
                </div>
            </footer>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>