"""
Datetime
"""
import datetime

now = datetime.datetime.now()
print(now)
print(now.isoformat())
"""
d date
m month
y year 
"""
print(now.strftime('%d/%m/%y-%H%M%S%f'))
print('------')
t = datetime.time(hour=1, minute=10, second=5, microsecond=100)
print(t)
print(t.isoformat())
print(t.strftime('%H_%M_%S_%f'))
print('------')

print(now)
"""
past(-) or future(+)
"""
d = datetime.timedelta(weeks=1)
d = datetime.timedelta(days=1)
d = datetime.timedelta(hours=1)
d = datetime.timedelta(minutes=1)
d = datetime.timedelta(microseconds=1)
print(now - d)
print('----------')

import time
print('###')
"""output 2seconds later """
time.sleep(2)
print('###')

#epoch time
# The time is represented as the number of seconds since Jan 1, 1970
print(time.time())
print('----------')
print

""" Create Backup File """
import os
import shutil

file_name = 'test.txt'

if os.path.exists(file_name):
    shutil.copy(file_name, "{}.{}".format(
        file_name, now.strftime('%Y_%m_%d_%H_%M_%S')))
with open(file_name, 'w') as f:
    f.write('test')