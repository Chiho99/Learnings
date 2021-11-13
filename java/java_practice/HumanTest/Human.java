package HumanTest;
public class Human {
  /*クラス変数(staticな変数) 
  : クラス固有のメンバ
  : 静的(static)メンバ
  : 全てのインスタンスに共通するパラメータ*/
  private static int count_Human = 0;
  static int count_arms = 2;
  static int count_legs = 2;

  /*メンバ変数 : オブジェクトが持つパラメータのこと */
  private String name;
  private int birthday;
  private int full;

  /*コンストラクタ (返り値の指定必要なし)*/
  /*コンストラクタ1*/
  Human(String name, int birthday, int full) {
    /*thisを使って、インスタンスのフィールド(メンバ変数)にアクセス */
    /*フィールド(メンバ変数)に仮引数を代入 */
    this.name = name;
    this.birthday = birthday;
    this.full = full;
    count_Human++;
  }

  /*コンストラクタのオーバーライド 
  引数がなければ、こちらのコンストラクタを呼び出し*/
  /*コンストラクタ2*/
  Human(String name, int birthday){
    /*this(): そのクラスで定義されている他のコンストラクタを呼ぶ
    (このクラスのコンストラクタ)
    オブジェクト生成:引数2つの場合*/
    this(name, birthday, 50);
  }
  
    /*コンストラクタ3*/
  Human(String name){
    /*this(): そのクラスで定義されている他のコンストラクタを呼ぶ
    (このクラスのコンストラクタ)
    オブジェクト生成:引数１つの場合*/
    this(name, 0, 50);
  }

  /*コンストラクタ4*/
  Human() {
    /*this(): そのクラスで定義されている他のコンストラクタを呼ぶ
    (このクラスのコンストラクタ)
    オブジェクト生成:引数なしの場合*/
    this("不明", 0, 50);
  }
  
  /*メンバメソッド */
  public boolean eat(){
    boolean result = false;
    if(this.full < 100){
      this.full += 60;
      if(this.full > 100) {
        this.full = 100;
      }
      result = true;
    }
    return result;
  }

  public boolean walk(){
    boolean result = false;
    if(this.full > 0){
      this.full -= 10;
      if(this.full < 0) {
            this.full = 0;
      }
      result = true;
    }
    return result;
  }

  public boolean run(){
    boolean result = false;
    if(this.full > 0){
      this.full -= 20;
      if(this.full < 0) {
        this.full = 0;
      }
      result = true;
    }
    return result;
  }
  // count_Humanのゲッター
  /*ゲッターはゲットしたいフィールドの値を戻り値として返す*/
  public static int getCount_Human(){
    return count_Human;
  }

  // ゲッター
  public String getName(){
    return this.name;
  }
  public int getBirthday(){
    return this.birthday;
  }
  public int getFull(){
    return this.full;
  }

  // セッター
  public void setName(String name) {
    // if(name.length() <= 10) {
    //   System.out.println(this.name + "を" + name +"に変更しました");
      this.name = name;
    // } else {
    //   System.out.println("名前は10文字までにしてください");
    // }
  }

  public void setBirthday(int birthday) {
    this.birthday = birthday;
  }

  public void setFull(int full) {
    this.full = full;
  }
}
