<?php include '../includes/header.php'; ?>
<h2>Flight Booking Form </h2>
<form action="process.php" method="post">
    <label for="route"> Select Route: </label>
    <select name="route" required>
        <option value="Toronto-New York"> Toronto to New York </option>
        <option value="Toronto-Paris"> Toronto to Paris </option>
        <option value="Toronto-Dubai"> Toronto to Dubai </option>
</select>

<label for="class"> Select Class: </label>
<select name="class" required>
    <option value="Economy"> Economy </option>
    <option value="Premium Economy"> Preminum Economy </option>
    <option value="Buisness"> Buisness </option>
</select>

<label for="date"> Travel Date: </label>
<input type="date" name="date" required>
<input type="submit" value="Confirm Flight Booking">
</form>
<?php include '../includes/footer.php'; ?>
