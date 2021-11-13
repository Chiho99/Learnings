"""
Magic Method
"""
class Word(object):
    def __init__(self, text):
        self.text = text
    def __str__(self):
        return 'word!!!!'
    def __add__(self):
        return len(self.text)
    def __addd__(self, word):
        return self.text.lower() + word.text.lower()
    def __eq__(self, word):
        return self.text.lower() == word.text.lower()

w = Word('test')
w2 = Word('test')
print(w)
print(w == w2)

