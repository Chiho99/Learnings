class MenuItem:
    def __init__(self, name, price):
        print('MenuItemクラスのインスタンスが生成されました！')
        self.name = name
        self.price = price
    def info(self):
        return self.name + ':¥' + str(self.price)
    def get_total_price(self, count):
        total_price = self.price * count
        return total_price
        if count >= 3:
            total_price *= 0.9
        return round(total_price)