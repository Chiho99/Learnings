print('---error handling---')
"""
error handle
"""
l = [1, 2, 3]
i = 5
# del l
try:
    l[i]
except IndexError as exc:
    print("Don't worry: {}", format(exc))
except NameError as exc:
    print(exc)
except Exception as exc:
    print('other:{}', format(exc))
else:
    # successfully done
    print('done')
finally:
    # finally done/execute
    print('clean up')

print('---original exception---')
class UpperCaseError(Exception):
    pass

def check():
    words = ['APPLE', 'ORANGE', 'BANANA']
    for word in words:
        if word.isupper():
            raise UpperCaseError(word)
try:           
    check()
except UpperCaseError as exc:
    print('This is my fault. Go next.')