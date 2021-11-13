"""
tarfile(mac Linux)
zip file(Windows)
"""
import tarfile

with tarfile.open('test.tar.gz', 'w:gz') as tr:
    tr.add('tar')

"""
Extract files
 tar zxvf test.tar.gz -C /tmp
"""

with tarfile.open('test.tar.gz', 'r:gz') as tr:
    tr.extractall(path='test_tar')