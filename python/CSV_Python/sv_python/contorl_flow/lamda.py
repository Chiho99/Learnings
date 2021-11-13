"""
lamda
"""
l = ['Mon', 'tue', 'Wed', 'Thu', 'fri', 'sat', 'Sun']
def change_words(words, func):
    for word in words:
        print(func(word))
        
# def sample_func(word):
#     return word.capitalize()
sample_func1 = lambda word: word.capitalize()
sample_func2 = lambda word: word.lower()

change_words(l, lambda word: word.capitalize())
print('---------------')
change_words(l, lambda word: word.lower())