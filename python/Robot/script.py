""""writedown by myself"""

import termcolor
"""1"""
print(termcolor.colored("=============================================", 'yellow'))
getName = input(termcolor.colored("Hello. I'm Roboko. What's your name?", "cyan"))
getShop_1 = input(termcolor.colored(getName + ", Which restaurants do you like?", "cyan"))
input(termcolor.colored(getName + ",Thank you. Have a ncie day! Good bye.", "cyan"))
print(termcolor.colored("=============================================", 'yellow'))
"""2"""
getName = input(termcolor.colored("Hello. I'm Roboko. What's your name?", "cyan"))
FavShop = input(termcolor.colored("My recommendation is "+ getShop_1 +" Do you like this restaurant? [Yes/No]", "cyan"))
getShop_2 = input(termcolor.colored(getName + ", Which restaurants do you like?", "cyan"))
input(termcolor.colored(getName + ",Thank you. Have a ncie day! Good bye.", "cyan"))
print(termcolor.colored("=============================================", 'yellow'))
"""3"""
getName = input(termcolor.colored("Hello. I'm Roboko. What's your name?", "cyan"))
input(termcolor.colored("My recommendation is "+ getShop_1 +" Do you like this restaurant? [Yes/No]", "cyan"))
input(termcolor.colored("My recommendation is "+ getShop_2 +" Do you like this restaurant? [Yes/No]", "cyan"))
getShop_3 = input(termcolor.colored(getName + ", Which restaurants do you like?", "cyan"))
input(termcolor.colored(getName + ",Thank you. Have a ncie day! Good bye.", "cyan"))
print(termcolor.colored("=============================================", 'yellow'))
"""4"""
getName = input(termcolor.colored("Hello. I'm Roboko. What's your name?", "cyan"))
input(termcolor.colored("My recommendation is "+ getShop_2 +" Do you like this restaurant? [Yes/No]", "cyan"))
input(termcolor.colored("My recommendation is "+ getShop_1 +" Do you like this restaurant? [Yes/No]", "cyan"))
getShop = input(termcolor.colored(getName + ", Which restaurants do you like?", "cyan"))
input(termcolor.colored(getName + ",Thank you. Have a ncie day! Good bye.", "cyan"))
print(termcolor.colored("=============================================", 'yellow'))
