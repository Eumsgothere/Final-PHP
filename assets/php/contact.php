<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>🃏Gachaddict - Contact Us</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="style_cart.css">
  <style>
  .container {
    padding: 80px 20px 40px 20px;
  }

  .wrapper {
    display: flex;
    justify-content: center;
    align-items: flex-start;
    gap: 40px;
    flex-wrap: wrap;
    margin-top: 20px;
  }


  .contact-info, .contact-form {
    width: 100%;
    max-width: 400px;
    background: #fff;
    padding: 24px;
    border-radius: 12px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
  }


      .contact-info h2, .contact-form .title {
        margin-bottom: 16px;
      }

      .form {
        display: flex;
        flex-direction: column;
      }

      .input, textarea {
        margin-bottom: 16px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 16px;
      }

      textarea {
        resize: vertical;
        height: 120px;
      }

      button {
        padding: 12px;
        background-color: #3c7eff;
        color: #fff;
        font-weight: bold;
        border: none;
        border-radius: 6px;
        cursor: pointer;
      }

      button:hover {
        background-color: #2a5ccc;
      }
  </style>
</head>
<body>
  <header>
    <h1>Contact Us</h1>
    <nav>
      <a href="index.php">Home</a>
      <a href="shop.php">Shop</a>
      <a href="Cart.php">Cart</a>
      <a href="contact.php">Contact</a>
    </nav>
  </header>

  <main class="container">
    <div class="wrapper">
      
      <section class="contact-info">
        <h2>Our Shop</h2>
        <p><strong>Gachaddict Trading Cards</strong></p>
        <p>123 Card Lane, Gacha City, PH 1100</p>
        <p>Email: <a href="mailto:support@gachaddict.com">support@gachaddict.com</a></p>
        <p>Phone: 0912-345-6789</p>
        <p>Business Hours: Mon–Sat, 9 AM – 6 PM</p>
      </section>

      <section class="contact-form">
        <form class="form">
          <div class="title">Message Us</div>
          <input type="text" placeholder="Your name" class="input" required>
          <input type="email" placeholder="Your email" class="input" required>
          <textarea placeholder="Your message" required></textarea>
          <button type="submit">Submit</button>
        </form>
      </section>

    </div>
  </main>

  <footer>
    <p>&copy; <?= date('Y') ?> Gachaddict. All rights reserved.</p>
  </footer>
</body>
</html>
