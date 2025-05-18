<?php include 'includes/header.php'; ?>
<section>
  <h2>Contact Us</h2>
  <form action="includes/contact-form-handler.php" method="post">
    <input type="text" name="name" placeholder="Your name" required><br>
    <input type="email" name="email" placeholder="Your email" required><br>
    <textarea name="message" placeholder="Your message" required></textarea><br>
    <button type="submit">Send</button>
  </form>
</section>
<?php include 'includes/footer.php'; ?>
