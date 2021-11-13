"""
File Manipulation
"""
import os
import pathlib
import glob
import shutil

""" exist the file or not (True or False)"""
print(os.path.exists('test.txt'))

"""File or not (True or False)"""
print(os.path.isfile('test.txt'))

"""Directory or not (True or False)"""
print(os.path.isdir('OOP'))

"""rename the text name"""
# os.rename('test.txt', 'rename.txt')

"""
symlink the existing file
similar to shortcut & copy
 """
# os.symlink('rename.txt', 'symlink.txt')

"""make directory"""
# os.mkdir('test_dir')
"""remove directory"""
# os.rmdir('test_dir')

# pathlib.Path('empty.txt').touch()
# os.remove('empty.txt')

"""make a directory inside the directory"""
# os.mkdir('test_dir')
# os.mkdir('test_dir/test_dir2')
"""show list content"""
# print(os.listdir('test_dir'))

"""directory path"""
# pathlib.Path('test_dir/test_dir2/empty.txt').touch()
# print(glob.glob('test_dir/test_dir2/*'))


# shutil.copy('test_dir/test_dir2/empty.txt',
#             'test_dir/test_dir2/empty2.txt')
# print(glob.glob('test_dir/test_dir2/*'))

"""remove directory and all of contents"""
# shutil.rmtree('test_dir')

"""current file path"""
print(os.getcwd())



