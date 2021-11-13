# import tools.utils as u
# from lesson_package.utils import say_twice
# from talk import humans
# r = u.say_twice('hello')
# print(r)
# print(humans.sing())
# print(humans.cry())
# from talk import *
# print(animal.bite())
# print(animal.barking())
try:
    import utils
except ImportError:
    from lesson_package import utils    
utils.say_twice('word')