<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>NewsBit - Blog</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .navbar {
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    .hero-card {
      position: relative;
      overflow: hidden;
      transition: transform 0.3s ease;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .hero-card:hover {
      transform: scale(1.02);
      cursor: pointer;
    }

    .hero-card img {
      width: 100%;
      height: 250px;
      object-fit: cover;
    }

    .text-overlay {
      position: absolute;
      bottom: 0;
      background: linear-gradient(180deg, rgba(0,0,0,0.3), rgba(0,0,0,0.7));
      color: #fff;
      width: 100%;
      padding: 15px;
    }

    .card:hover {
      transform: scale(1.02);
      transition: transform 0.3s ease;
    }

    .badge {
      font-size: 0.75rem;
    }
  </style>
</head>
<body class="bg-light">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
      <a class="navbar-brand fw-bold text-danger" href="#">NewsBit</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Posts</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Categories</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <div class="container py-4">
    <div class="row g-4">
      <div class="col-md-4">
        <a href="page1.html" class="text-decoration-none">
          <div class="hero-card">
            <img src="https://images.pexels.com/photos/18928743/pexels-photo-18928743/free-photo-of-road-and-houses-in-village.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load/300x200" alt="">
            <div class="text-overlay">
              <span class="badge bg-success">LIFESTYLE</span>
              <h6 class="mt-2">Healthy diet to keep you healthy and strong</h6>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="page2.html" class="text-decoration-none">
          <div class="hero-card">
            <img src="https://images.pexels.com/photos/18778270/pexels-photo-18778270/free-photo-of-top-view-of-bags-with-grain-on-a-bazaar.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load/300x200" alt="">
            <div class="text-overlay">
              <span class="badge bg-danger">GAME</span>
              <h6 class="mt-2">Call Of Duty: Black Ops 4 Releasing</h6>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="page3.html" class="text-decoration-none">
          <div class="hero-card">
            <img src="https://images.pexels.com/photos/31649556/pexels-photo-31649556/free-photo-of-elegant-model-in-fashionable-black-attire.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load/300x200" alt="">
            <div class="text-overlay">
              <span class="badge bg-primary">ENTERTAINMENT</span>
              <h6 class="mt-2">Here’s How To Get Free Pizza On</h6>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>

  <!-- Tech Section -->
  <div class="container py-5">
    <h4 class="mb-4 fw-bold">Tech</h4>
    <div class="row g-3">
      <div class="col-md-4">
        <a href="tech1.html" class="text-decoration-none text-dark">
          <div class="card h-100 border-0 shadow-sm">
            <img src="https://images.pexels.com/photos/270637/pexels-photo-270637.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt="...">
            <div class="card-body">
              <span class="badge bg-primary mb-2">Tech</span>
              <h6 class="card-title">YouTube will remove ads and downgrade</h6>
              <p class="card-text small text-muted">8 hours ago | by Samuel Sumwan</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="tech2.html" class="text-decoration-none text-dark">
          <div class="card h-100 border-0 shadow-sm">
            <img src="https://images.pexels.com/photos/607812/pexels-photo-607812.jpeg?auto=compress&cs=tinysrgb&w=600/300x200" class="card-img-top" alt="...">
            <div class="card-body">
              <span class="badge bg-primary mb-2">Tech</span>
              <h6 class="card-title">Your social media apps want to help</h6>
              <p class="card-text small text-muted">5 hours ago | by Tunde Awoniyi</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="tech3.html" class="text-decoration-none text-dark">
          <div class="card h-100 border-0 shadow-sm">
            <img src="https://images.pexels.com/photos/360438/pexels-photo-360438.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt="...">
            <div class="card-body">
              <span class="badge bg-primary mb-2">Tech</span>
              <h6 class="card-title">iOS version rages on 2009 swine flu</h6>
              <p class="card-text small text-muted">2 hours ago | by Kenny Okoro</p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-white shadow py-4 mt-5 border-top">
    <div class="container text-center text-muted small">
      &copy; 2025 NewsBit. All rights reserved.
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
