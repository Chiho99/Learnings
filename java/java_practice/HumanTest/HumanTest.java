package HumanTest;


public class HumanTest {
  public static void main(String[] args){
    /*クラス型変数の宣言-初期化
    boolean型 : false
    String型 : null
    int型 : 0
    double型 : 0.0
    オブジェクト生成 : new クラス名();*/
    Human human = new Human("Jack", 20000202);
    
    /*クラス変数(static変数)にアクセスする 
    クラス名.メンバ*/
    System.out.println("Humanの手:" + Human.count_arms + "本");
    System.out.println("Humanの足" + Human.count_legs + "本");
    System.out.println("Person:" + Human.getCount_Human());
    
    System.out.println("名前:" + human.getName());
    System.out.println("生年月日:" + human.getBirthday());
    System.out.println("満腹度:" + human.getFull());

    Human human2 = new Human("Alice", 20000101);
    System.out.println("Person:" + Human.getCount_Human());
    
    System.out.println("名前:" + human2.getName());
    System.out.println("生年月日:" + human2.getBirthday());
    System.out.println("満腹度:" + human2.getFull());

    Human human3 = new Human("Michael");
    System.out.println("Person:" + Human.getCount_Human());
    System.out.println("名前:" + human3.getName());
    System.out.println("生年月日:" + human3.getBirthday());
    System.out.println("満腹度:" + human3.getFull());
    
    human3.setName("Michael Jackson");
    System.out.println(human3.getName());

    /*変数humanのメンバ変数にアクセス 
    オブジェクトが入った変数.メンバ変数*/
    /*コンストラクタなしの場合 */
    // human.name = "Jack";
    // human.birthday = 20000202;
    // human2.name = "Alice";
    // human2.birthday = 20000101;

    /*変数humanのメンバメソッドにアクセス
    オブジェクトが入った変数.メンバ */
    // human.eat(); // Jack1回目の食事
    // human.eat(); // Jack2回目の食事
    human2.eat(); // Alice1回目の食事
    Human programmer = new Programmer();

    Human[] humans;
    // humans = {new Programmer(), new Doctor(), new Teacher()};
  }
}

