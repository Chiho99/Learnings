x = 1
while x <= 100:
    print(x)
    x += 1 #インデントなければ、無限ループ

print('---------------------------')
y = 10
while y > 0:
    print(y)
    y -=1
print('---------------------------')
numbers = [1, 2, 3, 4, 5, 6]
for number in numbers:
    print(number)
    if number == 3:
        break #stop
print('---------------------------')
numeros = [765, 921, 777, 726]
for numero in numeros:
    print (numero)
    if numero == 777:
        print('777が見つかったので、処理終了')
        break
print('---------------------------')
for number in numbers:
    if number % 2 == 0: #偶数の時その周の繰り返しstop
        continue
    print (number)
print('---------------------------')
numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
for number in numbers:
    if number % 3 == 0:
        continue
    print(number)