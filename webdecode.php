<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chr1x secret message decoder</title>
</head>
<body>

    <h2>Chr1x secret message decoder</h2>
    <form method="POST">
        <label for="obfuscated_hex">Enter secret string:</label>
        <textarea id="obfuscated_hex" name="obfuscated_hex"></textarea><BR><BR>
        <label for="keyz">Enter secret key:</label>
        <input type="number" id="keyz" name="keyz" required><br><br>

        <input type="submit" value="Let me know!">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        function xor_deobfuscate($hex_text, $key) {
            $decoded_string = '';
            for ($i = 0; $i < strlen($hex_text); $i += 2) {
                $hex_pair = substr($hex_text, $i, 2);
                $decoded_string .= chr(hexdec($hex_pair) ^ $key);
            }
            return $decoded_string;
        }

        $obfuscated_hex = $_POST['obfuscated_hex'];
        $keyz = (int)$_POST['keyz'];

        $decoded_string = xor_deobfuscate($obfuscated_hex, $keyz);
        echo "<p>Your secret message: " . htmlspecialchars($decoded_string) . "</p>";
    }
    ?>

</body>
</html>
