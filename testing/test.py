from turtle import color


class Car:
    def __init__(self, color, brand, model, year):
        self.brand = brand
        self.color = color
        self.model = model
        self.year = year

def start_engine(self):
    print(f"The {self.color} {self.brand} {self.model} is starting its engine.")

bmw = Car("Blue", "BMW", "X5", 2020)

print(f"Car Brand: {bmw.brand}")
print(f"Car Color: {bmw.color}")
print(f"Car Model: {bmw.model}")
print(f"Car Year: {bmw.year}")

# bmw.start_engine()
