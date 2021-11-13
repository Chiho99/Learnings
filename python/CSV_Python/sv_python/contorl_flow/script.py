"""
argument's taple
by asterisk
"""
def say_something(*args):
    print(args)
    for arg in args:
        print(arg)
say_something('Hi', 'Mike', 'Nancy')
print('----------')
def say_something(word, *args):
    print('word = ', word)
    for arg in args:
        print(arg)
say_something('Hi', 'Mike', 'Nancy')
# t = ('Mike', 'Nancy')
# say_something('Hi', *t)
print('----------------------------------')
def menu(entree='beef', drink='wine'):
    print(entree, drink)
menu(entree='beef', drink='coffee')
print('----------')

def menu(**kwargs):
    for k, v in kwargs.items():
        print(k, v)
d = {
    'entree': 'beef',
    'drink': 'ice coffee',
    'desert': 'ice'
}
menu(**d)

print('---list inclusive---')
"""
list inclusive
"""

t1 = (1, 2, 3, 4, 5)
t2 = (5, 6, 7, 8, 9, 10)

r = []
for i in t1:
    r.append(i)
print(r)
# memory saving
r = [i for i in t1]
print(r)

r = []
for i in t1:
    for j in t2:
        r.append(i * j)
print(r)

print('---dictionary inclusive---')
""" 
dictionary comprehension
"""

w = ['mon', 'tue', 'wed']
f = ['coffee', 'milk', 'water']

d = {}
for x, y in zip(w, f):
    d[x] = y
print(d)

print('set/collection inclusive')
"""
set/collection comprehension
"""
s = set()
# even number
for i in range(10):
    if i % 2 == 0:
        s.add(i)
print(s)
# odd number
s = {i for i in range(10)}
print(s)

print('---namespace and scope---')
"""
namespace and scope
"""
animal = 'cat'
print(animal)

def f():
   """
   Test func doc
   """
   print(f, __name__)
   print(f, __doc__)
   
f() 
print(__name__)
print("global:", globals())

