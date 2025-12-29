<?php

    $namn ="";
    $ålder ="";

if (isset($_POST['namn']) && isset($_POST['ålder'])) {
    $namn = $_POST['namn'];
    $ålder = $_POST['ålder'];
}

if (isset($_GET['namn']) && isset($_GET['ålder'])) {
    $namn = $_GET['namn'];
    $ålder = $_GET['ålder'];
}

?>

<?php if ($namn !== "" && $ålder !== ""): ?>
    <h1>GET-formulär</h1>

    <form method="get" action="">
        <label>Namn:</label><br>
        <input type="text" name="namn" value="<?php echo $namn; ?>"><br><br>

        <label>Ålder:</label><br>
        <input type="text" name="ålder" value="<?php echo $ålder; ?>"><br><br>

        <button type="submit">Skicka med GET</button>
    </form>

    <?php endif; ?>
    <h1>POST-formulär</h1>
    <form method="post" action="">
        <label>Namn:</label><br>
        <input type="text" name="namn" value="<?php echo $namn; ?>"><br><br>

        <label>Ålder:</label><br>
        <input type="text" name="ålder" value="<?php echo $ålder; ?>"><br><br>

        <button type="submit">Skicka med POST</button>
    </form>