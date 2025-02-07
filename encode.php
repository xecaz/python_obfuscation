<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chr1x secret message encoder</title>
</head>
<body>

    <h2>Chr1x secret message encoder</h2>
    <form method="POST">
        <label for="original_text">Enter your secret text here:</label>
        <textarea id="original_text" name="original_text"></textarea><BR><BR>
        <label for="keyz">Choose a key (a number):</label>
        <input type="number" id="keyz" name="keyz" required><br><br>

        <input type="submit" value="Create secret!">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        function xor_obfuscate($text, $key) {
            $obfuscated_hex = '';
            for ($i = 0; $i < strlen($text); $i++) {
                $obfuscated_hex .= sprintf("%02x", ord($text[$i]) ^ $key);
            }
            return $obfuscated_hex;
        }

        // Get the input values from the form
        $original_text = $_POST['original_text'];
        $keyz = (int)$_POST['keyz'];

        // Obfuscate the string
        $obfuscated_hex = xor_obfuscate($original_text, $keyz);
        echo "<p>Obfuscated Hex: " . htmlspecialchars($obfuscated_hex) . "</p>";
    }
    ?>

</body>
</html>
