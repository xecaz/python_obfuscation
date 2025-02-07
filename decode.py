def xor_deobfuscate(hex_text, key):
    """Converts hex back to text and XOR decrypts it."""
    return ''.join(chr(int(hex_text[i:i+2], 16) ^ key) for i in range(0, len(hex_text), 2))

obfuscated_hex = input("Enter encoded string: ")
keyz = int(input("Enter key: "))

decoded_string = xor_deobfuscate(obfuscated_hex, keyz)
print(f"De-obfuscated: {decoded_string}")

