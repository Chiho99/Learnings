"""
range function
"""
print('---range function---')
# 0 ~ 9
for i in range(10):
    print(i)
print('-----------')

# 2 ~ 10,  each 3 counts
for i in range(2, 10, 3):
    print(i)
print('-----------')

# index is not available
for _ in range(10):
    print('hello')

"""
enumerate function
"""
print('---emurate function---')
for fruit in enumerate(['apple', 'banana', 'orange']):
    print(fruit)


"""
zip function
"""
print('---zip function---')
days = ['Mon', 'Tue', 'Wed']
fruits = ['apple', 'banana', 'orange']
drinks = ['coffee', 'tea', 'beer']

for day, fruit, drink in zip(days, fruits, drinks):
    print(day, fruit, drink)


""""
Function (function)
"""
print('---Inner function---')
def outer(a, b):
    def plus(c,d):
        return c + d
    r1 = plus(2, 4)
    r2 = plus(4, 2)
    print(r1 + r2)
outer(2, 3)

"""
closure
"""
print('---closure---')
def outer(a, b):
    def inner():
        return a + b
    return inner
f = outer(1, 2)
result = f()
print(result)
print('----------')

def circle_area_func(pi):
    def circle_area(radius):
        return pi * radius * radius
    return circle_area
ca1 = circle_area_func(3.14)
ca2 = circle_area_func(3.141592)

print(ca1(10))
print(ca2(10))

"""
decorator
"""
print('---decorator---')
def add_num(a, b):
    return a + b
print('start')
r = add_num(10, 20)
print('end')
print(r)
print('----------')
def print_more(func):
    def wrapper(*args, **kwargs):
        print('func:', func.__name__)
        print('args:', args)
        print('kwargs:', kwargs)
        result = func(*args, **kwargs)
        print('result:', result)
        return result
    return wrapper

def print_info(func):
    def wrapper(*args, **kwargs):
        result = func(*args, **kwargs)
        return result
    return wrapper
@print_info
@print_more
def add_num(a, b):
    return a + b
# f = print_info(add_num)
# r = f(10, 20)
r = add_num(10, 20)
print(r)

