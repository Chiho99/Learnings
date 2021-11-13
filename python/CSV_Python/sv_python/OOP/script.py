"""
OOP
Class
"""
class Person(object):
    # self: keep the value
    def __init__(self, name):
        self.name = name
        print(self.name)

    def say_something(self):
        print('I am {}.hello'.format(self.name))
        self.run(10)

    def run(self, num):
        print('run' * num)

    def __del__(self):
        print('good bye')

person = Person('Mike')
person.say_something()

del person

"""
extend Class
"""
print('---------------')

class Car(object):
    def __init__(self, model=None):
        self.model = model
    def run(self):
        print('run')
    def ride(self, person):
        person.drive()

class ToyotaCar(Car):
    def run(self):
        print('fast')

class TeslaCar(Car):
    def __init__(self, model='Model S', enable_auto_run=False):
        # init from parent's class
        super().__init__(model)
        self.enable_auto_run = enable_auto_run
    
    # read only 
    @property
    def enable_auto_run(self):
        return self.enable_auto_run

    @enable_auto_run.setter
    def enable_auto_run(self, is_enable):
        self.enable_auto_run = is_enable

    def run(self):
        print('super fast')
    def auto_run(self):
        print('auto run')

tesla_car = TeslaCar
tesla_car.enable_auto_run = True
print(tesla_car.enable_auto_run)

print('---------------')
class T(object):
    pass
t = T()
t.name = 'Mike'
t.age = 20
print(t.name, t.age)