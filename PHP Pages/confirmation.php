<?php include '../includes/header.php'; ?>

<h2>Booking Confirmation</h2>
<p><strong>Flight Route:</strong> <?php echo $_GET['route']; ?></p>
<p><strong>Class:</strong> <?php echo $_GET['class']; ?></p>
<p><strong>Travel Date:</strong> <?php echo $_GET['date']; ?></p>
<p><strong>Total Price:</strong> $<?php echo $_GET['price']; ?></p>

<a href="index.php">Book Another Flight</a>

<?php include '../includes/footer.php'; ?>
