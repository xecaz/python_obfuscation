def xor_obfuscate(text, key=42):
    """XOR encrypts a string and converts it to hex."""
    return ''.join(f'{ord(c) ^ key:02x}' for c in text)

def xor_deobfuscate(hex_text, key=42):
    """Converts hex back to text and XOR decrypts it."""
    return ''.join(chr(int(hex_text[i:i+2], 16) ^ key) for i in range(0, len(hex_text), 2))

original_string = input("Enter your string: ")

obfuscated_hex = xor_obfuscate(original_string)
print(f"Obfuscated Hex: {obfuscated_hex}")

decoded_string = xor_deobfuscate(obfuscated_hex)
print(f"De-obfuscated: {decoded_string}")

