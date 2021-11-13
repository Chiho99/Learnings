"""
OOP
duck typing
"""
import abc

# abstract
class Person(metaclass=abc.ABCMeta):
    def __init__(self, age=1):
       self.age = age

    @abc.abstractmethod
    def drive(self):
        pass
        # if self.age >= 18:
        #     print('ok')
        # else:
        #     raise Exception('No drive')

class Baby(Person):
    def __init__(self, age=1):
        if age < 18:
            super().__init__(age)
        else:
            raise ValueError

class Adult(Person):
    def __init__(self, age=1):
        if age >= 18:
            super().__init__(age)
        else:
            raise ValueError

    def drive(self):
        print('ok')

baby = Baby
adult = Adult

class Car(object):
    def __init__(self, model=None):
        self.model = model
    def run(self):
        print('run')
    def ride(self, person):
        person.drive()
