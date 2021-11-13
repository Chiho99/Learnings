package RSP;

public class Main {
  public static void main(String[] args) {

    Color color = new Color();
    Player player1 = new Player("Chopper");
    Player player2 = new Player("Usopp");

    // fixedHand
    player2.setStrategy(new FixedStrategy((RspHand.Rock)));

    int player1_win = 0;
    int player2_win = 0;

    System.out.println(color.bg_pink + "  Rock, Scissors, Paper  " + color.end);
    // RSP loop
    for(int i = 0; i < 20; i++){
      RspHand hand1 = player1.nextHand();
      RspHand hand2 = player2.nextHand();

      String result = hand1.winTo(hand2) ? 
                        color.blue + player1.getName() + color.end: 
                      hand1.loseTo(hand2) ? 
                        color.red + player2.getName() + color.end:
                      color.green + "Draw" + color.end;

      System.out.println(
      String.format("%s: %s - %s :%s (%s)",
        player1.getName(), hand1,
        hand2, player2.getName(), result)
      );

      if(hand1.winTo(hand2)){
        player1_win++;
      }
      if(hand2.winTo(hand1)){
        player2_win++;
      }
    }
    String finalResult = player1_win > player2_win ?
                          color.blue + player1.getName() + " is a winner!!!" + color.end:
                         player1_win < player2_win ?
                          color.red + player2.getName() + " is a winner!!!" + color.end : 
                          color.green + "Draw" + color.end;

    System.out.println(
      String.format("%s   (%s: %d - %d :%s)",
      finalResult, color.blue + player1.getName() + color.end, player1_win,
       player2_win, color.red + player2.getName() + color.end
      )
    );                      
  }
}
