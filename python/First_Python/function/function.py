# def 関数名()
    # 実行する処理

def hello():
    print('Hello World')
hello()

print('---------------------------')
# def 関数名(仮引数)
    # 実行する処理
def hello(name):
    print('こんにちは、'+ name + 'さん')
hello('のび太')
print('---------------------------')
def talk(name, message):
    print(name + 'さん' + message)
talk('スネ夫', 'こんばんは')
print('---------------------------')
# 引数の初期値設定
def greeting(name, message='こんにちは'):
    print(name + 'さん' + message)
greeting('ドラえもん', 'おはようございます')
greeting('ドラミちゃん')
print('---------------------------')
# 戻り値
def add(num1, num2):
    return num1 + num2
result = add(1, 3)
print(result)
print('---------------------------')
