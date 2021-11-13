# variable
num = 1
name = 'Mike'
is_ok = True
# type
print(num, type(num))
print(name, type(name))
print(is_ok, type(is_ok))
print('-------------')
num = name
print(num, type(num))

# type change
num = 1
name = '1'
new_num = int(name)
print(new_num, type(new_num))
print('-------------------------------------------')

# sep:seperation, end: end with ~
print('Hi', 'Mike')
print('Hi', 'Mike', sep = ',', end='.')
print('Hi', 'Mike', sep = ',', end='\n')
print('-------------------------------------------')

# string
print("hello")
print('I don\'t know')
print('hello.\nHow are you?')
print('-------------------------------------------')

# \(back slash) remove blanks
print("""\
line1
line2
line3\
""")
print('-------------------------------------------')

"""
string index and slice
index strats with 0(zero)
"""
word = 'python'
# var[-1] shows the last letter
print(word[-1])
#slice 
print(word[0:2])
print(word[:2])
print(word[2:])
print('-------------')
word = 'j' + word[1:]
print(word)
# length of index
print(len(word))
print('-------------------------------------------')

# methods of strings
s = 'My name is Superman. Hi Superman.'
print(s)
is_start = s.startswith('My')
# is_start = s.startswith('I am')
print(is_start)
print('-------------')
# find 1st Superman
print(s.find('Superman'))
# find 2nd Superman
print(s.rfind('Superman'))
# number of Superman within s
print(s.count('Superman'))
# lower case ex for initial letter
print(s.capitalize())
# words start with upper case
print(s.title())
# converted to upper case
print(s.upper())
# converted to lower case
print(s.lower())
# replace the words
print(s. replace('Superman', 'Captain America'))
print('-------------------------------------------')

# substitution
print('a is {}'.format('a'))
print('a is {} {} {}'. format(1, 2, 3))
sur = 'Bieber'
given='Justin'
print(f'My name is {given} {sur}. Watashi ha {sur} {given}.')