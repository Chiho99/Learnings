""""
while
comtinue
break
"""
count = 0
while count < 5:
    print(count)
    count += 1
print('-------')

count = 0
while True:
    if count == 2:
        count += 1
        continue
    print(count)
    count += 1
    if count >= 5:
        break
    print(count)
    count += 1
print('--------------------')
""""
while
else
"""
count = 0
while count < 5:
    print(count)
    count += 1
else:
    print('done')
print('----------')
while True:
    word = input('Enter:')
    num = int(word)
    if num == 100:
        break
    print('next')