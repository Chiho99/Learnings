package Car;

public class CarTest {
  public static void main(String[] args) {
    Car car = new Car();
    System.out.println("-----Car-----");
    car.drive(20);
    car.drive(30);
    car.buyOil(40);
    car.outputOil();

    // EconomyCar eCar = new EconomyCar();
    // System.out.println("-----Economy Car-----");
    // eCar.drive(20);
    // eCar.drive(30);
    // eCar.buyOil(40);
    // eCar.outputOil();

    AutoCar aCar = new AutoCar();
    System.out.println("-----Auto Car-----");
    aCar.drive(20);
    aCar.autoDrive(30);
    aCar.buyOil(40);
    aCar.outputOil();
  }
}
