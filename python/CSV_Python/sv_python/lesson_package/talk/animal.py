from tools import utils
def bite():
    return 'bite'

def barking():
    return utils.say_twice('barking')

if __name__ == '__main__':
    print(bite())

print('animal:', __name__)