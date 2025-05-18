<?php include 'includes/header.php'; ?>
<main class="content">
  <div class="container">
    <section>
      <h2>Contact Us</h2>
      <form action="includes/contact-form-handler.php" method="post">
        <input type="text" name="name" placeholder="Your name" required><br>
        <input type="email" name="email" placeholder="Your email" required><br>
        <textarea name="message" placeholder="Your message" required></textarea><br>
        <button type="submit">Send</button>
      </form>
    </section>
  </div>
</main>
<?php include 'includes/footer.php'; ?>
