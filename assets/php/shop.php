<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>🃏Gachaddict</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="style_cart.css">
</head>
<body>
  <header>
    <h1>Shop</h1>
    <nav>
      <a href="./assets/php/index.php">Home</a>
      <a href="./assets/php/shop.php">Shop</a>
      <a href="./assets/php/Cart.php">Cart</a>
      <a href="./assets/php/Contact.php">Contact</a>
    </nav>
  </header>

  <main class="container">

    <!-- BEST SELLERS -->
    <h2>Best Sellers</h2>
    <div class="product-grid">
      <?php for ($i = 0; $i < 4; $i++): ?>
      <div class="card">
        <div class="card-img"><div class="img"></div></div>
        <div class="card-title">Popular Card <?= $i+1 ?></div>
        <div class="card-subtitle">Best selling card from our collection.</div>
        <hr class="card-divider">
        <div class="card-footer">
          <div class="card-price"><span>$</span> <?= 90 + $i * 5 ?>.00</div>
          <button class="card-btn">Add to Cart</button>
        </div>
      </div>
      <?php endfor; ?>
    </div>

    <!-- POKEMON CARDS -->
    <h2>Pokémon Cards</h2>
    <div class="product-grid">
      <?php for ($i = 0; $i < 4; $i++): ?>
      <div class="card">
        <div class="card-img"><div class="img"></div></div>
        <div class="card-title">Pokémon <?= $i+1 ?></div>
        <div class="card-subtitle">Catch 'em all – special edition cards!</div>
        <hr class="card-divider">
        <div class="card-footer">
          <div class="card-price"><span>$</span> <?= 60 + $i * 3 ?>.99</div>
          <button class="card-btn">Add to Cart</button>
        </div>
      </div>
      <?php endfor; ?>
    </div>

    <!-- MAGIC THE GATHERING -->
    <h2>Magic: The Gathering</h2>
    <div class="product-grid">
      <?php for ($i = 0; $i < 4; $i++): ?>
      <div class="card">
        <div class="card-img"><div class="img"></div></div>
        <div class="card-title">Magic Card <?= $i+1 ?></div>
        <div class="card-subtitle">Strategic gameplay cards from MTG.</div>
        <hr class="card-divider">
        <div class="card-footer">
          <div class="card-price"><span>$</span> <?= 75 + $i * 4 ?>.50</div>
          <button class="card-btn">Add to Cart</button>
        </div>
      </div>
      <?php endfor; ?>
    </div>

    <!-- COOKIE RUN -->
    <h2>Cookie Run Cards</h2>
    <div class="product-grid">
      <?php for ($i = 0; $i < 4; $i++): ?>
      <div class="card">
        <div class="card-img"><div class="img"></div></div>
        <div class="card-title">Cookie Card <?= $i+1 ?></div>
        <div class="card-subtitle">Cute collectible cards from Cookie Run.</div>
        <hr class="card-divider">
        <div class="card-footer">
          <div class="card-price"><span>$</span> <?= 40 + $i * 2 ?>.99</div>
          <button class="card-btn">Add to Cart</button>
        </div>
      </div>
      <?php endfor; ?>
    </div>

    <!-- CARD WARS -->
    <h2>Card Wars</h2>
    <div class="product-grid">
      <?php for ($i = 0; $i < 4; $i++): ?>
      <div class="card">
        <div class="card-img"><div class="img"></div></div>
        <div class="card-title">Card Wars <?= $i+1 ?></div>
        <div class="card-subtitle">Adventure Time inspired battle cards.</div>
        <hr class="card-divider">
        <div class="card-footer">
          <div class="card-price"><span>$</span> <?= 35 + $i * 3 ?>.00</div>
          <button class="card-btn">Add to Cart</button>
        </div>
      </div>
      <?php endfor; ?>
    </div>

    <!-- LORCANA -->
    <h2>Lorcana Cards</h2>
    <div class="product-grid">
      <?php for ($i = 0; $i < 4; $i++): ?>
      <div class="card">
        <div class="card-img"><div class="img"></div></div>
        <div class="card-title">Lorcana <?= $i+1 ?></div>
        <div class="card-subtitle">Fantasy realm cards for collectors.</div>
        <hr class="card-divider">
        <div class="card-footer">
          <div class="card-price"><span>$</span> <?= 55 + $i * 5 ?>.75</div>
          <button class="card-btn">Add to Cart</button>
        </div>
      </div>
      <?php endfor; ?>
    </div>

  </main>

  <footer>
    <p>&copy; <?= date('Y') ?> Gachaddict. All rights reserved.</p>
  </footer>
</body>
</html>
