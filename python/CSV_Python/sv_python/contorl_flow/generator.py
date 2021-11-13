"""
generator
yield
"""
def counter(num = 10):
    for _ in range(num):
        yield 'run'

print('------------')
# generating the element
def greeting():
    yield 'Good morning'
    yield 'Good afternoon'
    yield 'Good night'
g = greeting()
c= counter()
print(next(g))
print(next(c))
print(next(c))
print(next(c))
print(next(c))
print(next(g))
print(next(c))
print(next(c))
print(next(c))
print(next(c))
print(next(g))

print('---generator inclusive---')
"""
generator inclusive
! not turple
"""
def g():
    for i in range(10):
        yield i
g = g()
g = (i for i in range(10))
# print(type(g))

for x in g:
    print(x)