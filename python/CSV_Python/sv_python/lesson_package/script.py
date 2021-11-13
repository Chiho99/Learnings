"""
Python Built-in Function
"""
import builtins
builtins.print()

ranking = {
    'a':100,
    'b':85,
    'c':95
}
# ordaer by ranking's value
# reverse = True :oreder by DESC
print(sorted(ranking, key=ranking.get, reverse = True))

"""
Library
"""
s = "aabbccdddeefffffg"
d = {}
for c in s:
    if c not in d:
        d[c] = 0
    d[c] += 1
print(d)

d = {}
for c in s:
    if c not in d:
        d.setdefault(c, 0)
    d[c] += 1
print(d)

print('---library---')
from collections import defaultdict
d = defaultdict(int)
for c in s:
    d[c] += 1
print(d)

print('---PiPy---')
from termcolor import colored
print(colored('test', 'red'))
print(colored('test', 'cyan'))
print(colored('test', 'yellow'))

print('---import---')
# standard library
import collections
import os
import sys
# 3rd party library
import termcolor

# orginal package
# import ~

# local file
import config

# show file paths
print(collections.__file__)
print(termcolor.__file__)
print(config.__file__)

"""
___name__
__main__
"""
print('---___name__&__main__---')
import talk.animal
import config

def main():
    talk.animal.bite()

if __name__ == '__main__':
    main()
print('script:', __name__)