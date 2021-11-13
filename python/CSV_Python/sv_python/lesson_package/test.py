"""
Create a new file
"""
# a : append
# w: write
# r: read

# f = open('test.txt', 'w')
# f.write('Test\n')
# print('My', 'name', 'is', 'Mike', sep=' ', end='!', file=f)
# f.close()

"""
With Statement
"""
with open('test.txt', 'w') as f:
    f.write('Test\n')
    # print('My', 'name', 'is', 'Mike', sep=' ', end='!', file=f)
    
s = """\
AAA
BBB
CCC
DDD
"""
with open('test.txt', 'w') as f:
    f.write(s)

with open('test.txt', 'r') as f:
    # print(f.read())
    # while True:
    #     chunk = 2
    #     line = f.read(chunk)
    #     print(line)
    #     if not line:
    #       
    """
    seek
    """
    print(f.tell())  
    print(f.read(1))
    f.seek(5) #seek 5th letter
    print(f.read(1))

"""
write & read 
"""
with open('test.txt', 'r+') as f:
    print(f.read())
    f.seek(0)
    f.write(s)

