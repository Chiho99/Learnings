"""
if
indent : 4 spaces
"""

x = -10
if x  < 0:
    print('negative')
elif x == 0:
    print ('zero')
else:
    print('positive')
print('----------')

a = 5
b = 10
if a > 0:
    print('positive')
    if b > 0:
        print('b is positive')
print('-------')
x = 1
y = [1, 2, 3]

if x in y:
    print('in')

if 100 not in y:
    print('not in')
print('-------')
is_ok= True

if is_ok: 
    print(is_ok)
print('-------')

# whether value is null or not
is_ok = 100
if is_ok:
    print('OK!')
else:
    print('No!')
print('-------')
is_ok = []
if is_ok:
    print('OK!')
else:
    print('Nope!')
print('-----------------------------')
# null object
is_empty = None

if is_empty is None:
    print('None!')
print('-------')
print(1 == True)
print(1 is True)