# list
lists = [1, 20, 4, 50, 2, 10]
print(len(lists))
print(lists[::-1])

# nest
array1 = ['a', 'b', 'c']
array2 = [1, 2, 3]
mix = [array1, array2]
print(mix)
print(mix[0][2])
print('-------------')
array_alpha = ['a', 'b', 'c', 'd', 'e', 'f']
array_alpha[0] = 'A'
print(array_alpha)
# add to the last
array_alpha.append('z')
# add to the first
array_alpha.insert(0, 'a')
print(array_alpha)
print('-------------')
# remove the last letter
array_alpha.pop()
print(array_alpha)
# remove specified list
del array_alpha[0]
print(array_alpha)
print('-------------')

a = [1, 2, 3, 4, 5]
b = [6, 7, 8, 9, 10]
x = a + b
print(x)
print('-------------')

# list methods
r = [1, 2, 3, 4, 5, 1, 2, 3]
# find 3 after index[3]
print(r.index(3,3))
print(r.count(3))
print('-------------')

if 100 in r:
    print('exist')
else:
    print('nothing')
print('-------------')

# sort the list (ASC order)
r.sort()
print(r)
# sort the list (DESC order)
r.sort(reverse=True)
print(r)
print('-------------')
# storing to array
intro = 'My name is Superman'
to_split = intro.split(' ')
print(to_split)
# reconnect the list
x = ' '. join(to_split)
print(x)
print('-----------------------------------')

# list copy
i = [1, 2, 3, 4, 5]
j = i
j[0] = 100
print('j =', i)
print('i =', i)
print('-------------')

x = [1, 2, 3, 4, 5]
# y = x.copy()
y = x[:]
y[0] = 100
print('y =', y)
print('x =', x)
print('-------------')

X = 20
Y = X
Y = 5
print(id(X))
print(id(Y))
print(X)
print(Y)

X = ['a', 'b']
Y = X
Y[0] = 'p'
print(X)
print(Y)
print('-----------------------------------')

# list utilization
seat = []
min = 0
max = 5
result = min <= len(seat) < max
print(result)
seat.append('p')
result = min <= len(seat) < max
print(result)
seat.append('p')
result = min <= len(seat) < max
print(result)
seat.append('p')
result = min <= len(seat) < max
print(result)
seat.append('p')
seat.append('p')
result = min <= len(seat) < max
print(result)
print(len(seat))