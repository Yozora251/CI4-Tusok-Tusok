<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tusok-Tusok: Filipino Street Foods</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #fffaf0;
    }
    .hero {
      background: url('https://images.unsplash.com/photo-1605478269580-3b299c4c45ea?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80') no-repeat center center/cover;
      min-height: 90vh; /* keep it tall */
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: white;
      text-shadow: 2px 2px 6px rgba(0,0,0,0.7);
      padding: 60px 20px;
    }
    .card img {
      height: 200px;
      object-fit: cover;
    }
    footer {
      background: #ff914d;
      color: white;
      padding: 20px 0;
      text-align: center;
      margin-top: 50px;
    }
  </style>
</head>
<body>

  <!-- Hero Section -->
  <section class="hero text-center">
    <div>
      <h1 class="display-3 fw-bold">Tusok-Tusok</h1>
      <p class="lead">Experience the authentic flavors of Filipino street foods</p>
      <a href="#foods" class="btn btn-lg btn-warning mt-3">Explore Now</a>
    </div>
  </section>

  <!-- About Section -->
  <section class="container py-5 mt-5" style="margin-top:120px !important;">
    <div class="row align-items-center">
      <div class="col-md-6">
        <img src="https://images.unsplash.com/photo-1599924828205-79c2f4780d89?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" class="img-fluid rounded shadow" alt="Tusok Tusok">
      </div>
      <div class="col-md-6">
        <h2 class="fw-bold">What is Tusok-Tusok?</h2>
        <p>
          "Tusok-Tusok" is a Filipino expression that means poking food with a stick. 
          It refers to popular street foods sold on pushcarts and stalls, where you pick 
          and poke delicious skewered snacks and dip them into rich sauces.
        </p>
      </div>
    </div>
  </section>

  <!-- Street Foods Section -->
  <section id="foods" class="container py-5">
    <h2 class="text-center fw-bold mb-4">Popular Street Foods</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card shadow border-0">
          <img src="https://images.unsplash.com/photo-1651457786225-f6e9cfb906c4?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Fishball">
          <div class="card-body text-center">
            <h5 class="card-title">Fishball</h5>
            <p class="card-text">Crispy golden fishballs skewered and dipped in sweet, spicy, or vinegar sauce.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow border-0">
          <img src="https://images.unsplash.com/photo-1668616297920-71f85a68e45d?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Kwek-Kwek">
          <div class="card-body text-center">
            <h5 class="card-title">Kwek-Kwek</h5>
            <p class="card-text">Quail eggs coated in orange batter and deep-fried to perfection.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow border-0">
          <img src="https://images.unsplash.com/photo-1680518968585-7ebf7a91c33c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Isaw">
          <div class="card-body text-center">
            <h5 class="card-title">Isaw</h5>
            <p class="card-text">Grilled chicken or pork intestines, marinated and skewered over hot charcoal.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <p>&copy; <?php echo date("Y"); ?> Tusok-Tusok | Filipino Street Foods</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
