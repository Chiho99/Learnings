"""
for
break
continue
"""
some_list = [1, 2, 3, 4, 5]
# i = 0
# while i < len(some_list):
#     print(some_list[i])
#     i += 1
for i in some_list:
    print(i)  
print('----------')
for fruit in ['apple', 'banana', 'orange']:
    if fruit == 'banana':
        print('stop eating')
        continue
    print(fruit)
else:
    print('I ate all')
print('----------')
"""
dictionary - for
"""
d = {'x': 100, 'y': 200}
for v in d:
    print(v, ':', d[v])
print('----------')

"""
define function
"""
def say_something():
    response = 'hey'
    return response
result = say_something()
print(result)
print('-----------')

def what_is_this(color):
    if color == 'red':
        return  'tomato'
    elif color == 'yellow':
        return 'lemon'
result = what_is_this('red')
print(result)
print('----------')
def add_num(a: int, b:int) -> int:
    return a + b
r = add_num('a', 'b')
print(r)
print('-----------')

def menu(entree, drink, desert):
    print(entree)
    print(drink)
    print(desert)
menu('beef', 'beer', 'ice')
print('-----------')
menu('chicken', 'wine', 'cake')
print('-----------')
def test_func(x, l = []):
    l.append(x)
    return l
y = [1, 2, 3]
r = test_func(100, y)
print(r)
# first 
print('-----------')
r = test_func(100)
print(r)

# secand
r = test_func(100)
print(r)
print('-----------')

def test_func(x, l= None):
    if l is None:
        l = []
        l.append(x)
        return l
r = test_func(100)
print(r)
r = test_func(100)
print(r)