Small piece of code that xor obfuscates a string, prints the hex and provides a 
de-obfiscation routine in python

xecaz@DESKTOP-P9NQ84E:~/code/python_obfuscation$ python3 encode.py
Enter clear-text: This is a hidden message
Enter key: 56
Obfuscated Hex: 6c50514b18514b18591850515c5c5d5618555d4b4b595f5d
xecaz@DESKTOP-P9NQ84E:~/code/python_obfuscation$ python3 decode.py
Enter encoded string: 6c50514b18514b18591850515c5c5d5618555d4b4b595f5d
Enter key: 56
De-obfuscated: This is a hidden message
xecaz@DESKTOP-P9NQ84E:~/code/python_obfuscation$ python3 decode.py
Enter encoded string: 6c50514b18514b18591850515c5c5d5618555d4b4b595f5d
Enter key: 12
De-obfuscated: `\]GUYQGGUSQ
