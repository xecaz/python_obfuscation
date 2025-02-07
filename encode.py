def xor_obfuscate(text, key):
    return ''.join(f'{ord(c) ^ key:02x}' for c in text)

original_string = input("Enter clear-text: ")
keyz = int(input("Enter key: "))

obfuscated_hex = xor_obfuscate(original_string, keyz)
print(f"Obfuscated Hex: {obfuscated_hex}")

