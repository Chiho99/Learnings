package Car;

public class Car {
  int oil = 60;
  // 燃費
  int f_efficent = 10;

  // oilを消費して走る
  public void drive(int oil) {
    this.oil -= oil;
    System.out.println(oil * this.f_efficent + "km走りました");
  }

  // oil供給
  public void buyOil(int oil) {
    this.oil += oil;
    System.out.println("ガソリンを" + oil + "ℓ供給しました。");
  }

  // 現在のoilの値を出力
  public void outputOil(){
    System.out.println("ガソリンは残り" + this.oil + "ℓです");
  }
}
