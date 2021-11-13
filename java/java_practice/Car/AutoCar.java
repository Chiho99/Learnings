package Car;

public class AutoCar extends Car{
  public void autoDrive(int oil) {
    super.drive(oil);
    super.buyOil(oil);
  }
}
