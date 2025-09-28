<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mood Board – Tusok-Tusok</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Lato', sans-serif;
      background: #fff;
      padding: 40px;
      color: #333;
    }
    h1, h2 {
      font-family: 'Playfair Display', serif;
    }
    .color-box {
      width: 120px;
      height: 60px;
      border-radius: 6px;
      margin: 5px;
    }
    .section {
      margin-bottom: 50px;
    }
    .btn-sample {
      margin: 5px;
    }
    .card-sample {
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 20px;
      height: 150px;
    }
    footer {
      text-align: center;
      margin-top: 60px;
      font-size: 14px;
      color: #777;
    }
  </style>
</head>
<body>

  <h1 class="mb-4">Mood board</h1>
  <p class="text-muted">Visual identity samples for Tusok-Tusok Filipino Street Foods</p>

  <!-- Color System -->
  <div class="section">
    <h2>Color System</h2>
    <p>Warm and vibrant colors inspired by Filipino street food culture.</p>
    <div class="d-flex flex-wrap">
      <div>
        <div class="color-box" style="background:#FF914D;"></div>
        <p>Street Food Orange<br>#FF914D</p>
      </div>
      <div>
        <div class="color-box" style="background:#D94E41;"></div>
        <p>Chili Red<br>#D94E41</p>
      </div>
      <div>
        <div class="color-box" style="background:#FFD369;"></div>
        <p>Sauce Yellow<br>#FFD369</p>
      </div>
      <div>
        <div class="color-box" style="background:#333333;"></div>
        <p>Charcoal Gray<br>#333333</p>
      </div>
    </div>
  </div>

  <!-- Typography -->
  <div class="section">
    <h2>Typography</h2>
    <p><strong>Heading font:</strong> Playfair Display — <span style="font-family: 'Playfair Display', serif;">Tusok-Tusok Heading Example</span></p>
    <p><strong>Body font:</strong> Lato — Body text example that demonstrates readable copy for longer descriptions.</p>
  </div>

  <!-- Buttons -->
  <div class="section">
    <h2>Buttons</h2>
    <p>Examples of button styles for calls to action</p>
    <div>
      <button class="btn btn-warning btn-sample">Primary</button>
      <button class="btn btn-danger btn-sample">Secondary</button>
      <button class="btn btn-outline-dark btn-sample">Border</button>
      <button class="btn btn-secondary btn-sample disabled">Disabled</button>
    </div>
    <div class="bg-dark p-3 mt-3">
      <button class="btn btn-warning btn-sample">Primary</button>
      <button class="btn btn-danger btn-sample">Secondary</button>
      <button class="btn btn-outline-light btn-sample">Border</button>
      <button class="btn btn-secondary btn-sample disabled">Disabled</button>
    </div>
  </div>

  <!-- Card Sample -->
  <div class="section">
    <h2>Card Samples</h2>
    <div class="row g-3">
      <div class="col-md-4">
        <div class="card-sample">
          <h4>500+</h4>
          <p>Street food vendors featured</p>
          <a href="#">Read more</a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-sample">
          <h5>Fishball</h5>
          <p>Crispy golden fishballs with dipping sauce.</p>
          <a href="#">Read more</a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-sample">
          <blockquote>
            "Nothing beats tusok-tusok after school!"
          </blockquote>
          <small>— Local Foodie</small>
        </div>
      </div>
    </div>
  </div>

  <!-- Logos -->
  <div class="section">
    <h2>Logos</h2>
    <div class="row">
      <div class="col-md-6 text-center">
        <div class="border rounded p-4">
          <img src="https://via.placeholder.com/120x120.png?text=Logo+Circle" class="mb-2"><br>
          <p>Main — Circle</p>
        </div>
      </div>
      <div class="col-md-6 text-center">
        <div class="border rounded p-4">
          <img src="https://via.placeholder.com/120x120.png?text=Logo+Square" class="mb-2"><br>
          <p>Main — Square</p>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <p>&copy; <?php echo date("Y"); ?> Tusok-Tusok Mood Board</p>
  </footer>

</body>
</html>
