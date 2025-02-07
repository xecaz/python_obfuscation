import requests

def xor_deobfuscate(hex_text, key=42):
    return ''.join(chr(int(hex_text[i:i+2], 16) ^ key) for i in range(0, len(hex_text), 2))

def fetch_url_content(url):
    try:
        response = requests.get(url)
        response.raise_for_status()
        print(response.text)
    except requests.exceptions.RequestException as e:
        print(f"Error: {e}")

obf = "425e5e5a59100505524f494b50044945470543444e4f52045a425a"
url = xor_deobfuscate(obf)

fetch_url_content(url)
