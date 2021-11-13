#  dictionary
# dictionary w curly brackets
d = {'x': 10, 'y': 20}
print(d)
d['x'] = 15
print(d)
d['z'] = 25
print(d)

# dictionary by function : dict()
print(dict(a = 100, b = 200, c = 300))
print('-----------------------------------')

# dictionary method
d = {'x' : 10, 'y' : 20}
print(d)
d.keys()
print(d.keys())
print(d.values())

d2 = {'x': 1000, 'j': 500}
d.update(d2)
print(d)
# if not exist, return "None"
error = d.get('z')
print(error)

# remove
del d['y']
print(d)

# remove
d.pop('x')
print(d)

# check the existence
print('j' in d)
print('x' in d )
print('-----------------------------------')

# dictionary's copy

x = {'a':1}
y = x
y['a'] = 1000
print(x)
print(y)
print('----------------')

# use refernce
x = {'a':1}
y = x.copy()
y['a'] = 1000
print(x)
print(y)
print('-----------------------------------')

# dictionary utilization
# dictionary uses hash table and faster than lists to get the value
fruits = {
    'apple': 100,
    'banana': 300,
    'orange': 400
}
print(fruits)
print('price: ' + str(fruits['orange']))
print('-----------------------------------')

# set
#  logical disjunction
a = {1, 2, 3, 4, 4, 4, 5, 6,}
print(type(a))
b = {2, 3, 3, 6, 7}
print(b)
print(a - b)
# logical conjuction
print(a&b)
print(a|b)
print(a^b)
print('-----------------------------------')

# set's method
s = {1, 2, 3, 4, 5} #set
print(s)
s.add(6)
print(s)
s.remove(6)
print(s)
s.clear()
print(s)
print('----------------')
a = {} #dictionary
print(type(a))
print('-----------------------------------')

# set utilization
my_friends = {'obama', 'biden','trump','harris'}
blue_friends = {'obama', 'biden', 'harris'}
print(my_friends & blue_friends)
print('----------------')

f = ['apple', 'banana', 'apple', 'banana']
kind = set(f)
print(f)
print(kind)