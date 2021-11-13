"""
Template 
(email_template.txt)
"""
import string

s = """\

Hi $name. {name}

$contents

Have a good day.
"""
import string
with open('./lesson_package/design/email_template.txt') as f:
    t = string.Template(f.read())
contents = t.substitute(name= 'Mike', contents='How are you?')
print(contents)