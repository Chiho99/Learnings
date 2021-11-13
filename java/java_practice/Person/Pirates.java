package Person;
import java.util.Scanner;

public class Pirates {
  
    public static void intro(String name, String hometown, String team){
      System.out.println("I'm " + name + ".");
      System.out.println("I'm from " + hometown + ".");
      System.out.println("I belong to " + team);
    }

    public static void askQuestion(){

      Scanner scanner = new Scanner(System.in);
      String yes = "y";
      String no = "n";
      System.out.println("This is the first time we meet in person, isn't it ? [" + yes + "/" + no +"]:");
      String question = scanner.nextLine();

      // boolean a_yes = Boolean.valueOf(yes);
      // boolean a_no = Boolean.valueOf(no);
      // boolean a_question = Boolean.valueOf(question);

      if(question.equals(yes)){
        Pirates.newFace();
        Pirates.answerYes(yes);
      }else if(question.equals(no)){
        Pirates.answerNo(no);
      }
    }

    public static void answerYes(String answer){
        System.out.println("Nice to meet you.\n");
    }

    public static void answerNo(String answer){
      System.out.println("Long time no see!");
      System.out.println("How have you been?\n");
    }

    public static void newFace(){
      Scanner scanner = new Scanner(System.in);
      System.out.print("Name :");
      String name = scanner.nextLine();
      
      System.out.print("Hometown : ");
      String hometown = scanner.nextLine();
     
      System.out.println("Belong to (Pirates Name) : ");
      String team = scanner.nextLine();
      
      
      Pirates.intro(name, hometown, team); 
    }
}
