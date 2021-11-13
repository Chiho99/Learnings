# tuple
# (, )
# index is not available 
t = (1, 2, 3, 4, 1, 2)
print(t)
print(type(t))

# slice
print(t[0:])
print(t[-1])
print(t[2:5])
print(t[3:5])
print('----------------')
# index
print(t.index(2))
print(t.index(1, 1))
print('----------------')
# list
t = ([1, 2, 3], [4, 5, 6])
# t[0] = [1]
print(t[0][2])
print(t)
print('----------------')
new_tuple = (1, 2, 3) + (4, 5, 6)
print(new_tuple)
print('-----------------------------------')

# tuple unpacking
num_tuple = (10, 20)
print(num_tuple)

x, y = num_tuple
print(x, y)

# tuplw wo ()
x, y = 10, 20
print(x, y)
min,  max = 0, 100
print(min, max)
print('----------------')
# reverse values
i = 10
j = 20
tmp = i
i = j
j = tmp
print(i, j)
print('----------------')
# reverse value w tuple's unpacking
a = 100
b = 200
print(a, b)
a, b = b, a
print(a, b)
print('----------------')

chose_from_two = ('A', 'B', 'C')
answer = []
answer.append('A')
answer.append('C')

print(chose_from_two)
print(answer)