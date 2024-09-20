import os

# Get all files in the current directory
files = os.listdir('.')

# Loop through the files and rename .html to .php
for file in files:
    if file.endswith('.html'):
        new_name = file.replace('.html', '.php')
        os.rename(file, new_name)
