import glob
import zipfile

with zipfile.ZipFile('test.zip', 'w') as z:
    # z.write('test_dir')
    # z.write('test_dir/test.txt')
    for f in glob.glob('test_dir/**, recrusive=True'):
        print(f)
        z.write(f)
"""
Extract
unzip test.zip -d zzz
"""

# read
with zipfile.ZipFile('test.zip', 'r') as z:
    # z.extractall('zzz2')
    with z.open('test_dir/test.txt') as f:
        print(f.read())