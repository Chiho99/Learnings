"""
Class Method
Static Method
"""

class Person(object):
    kind = 'human'

    def __init__(self):
        self.x = 100
    
    @classmethod
    def what_is_your_kind(cls):
        return cls.kind

    @staticmethod
    def about(year):
        print('about human {}'.format(year))

a = Person()
print(a.x)
print(a.what_is_your_kind())
b = Person
print(b.what_is_your_kind())

Person.about(1999)