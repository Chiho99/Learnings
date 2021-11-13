package RSP;

public enum RspHand {
  Rock,
  Scissors,
  Paper;

  @Override
  public String toString(){
    switch(this){
      case Rock: return "✊";
      case Scissors: return "✌";
      case Paper: return "✋";
    }
      throw new IllegalStateException();
  }

  public static RspHand fromInt(int n) {
    // absolute value
    switch(Math.abs(n % 3)) {
      case 0: return Rock;
      case 1: return Scissors;
      case 2: return Paper;
    }
    throw new IllegalStateException();
  }

  // RSP logic - Win
  public boolean winTo(RspHand hand) {
    switch(this){
      case Rock: return hand == Scissors;
      case Scissors: return hand == Paper;
      case Paper: return hand == Rock;
    }
    throw new IllegalStateException();
  }

  // RSP logic - Lose
  public boolean loseTo(RspHand hand) {
    return this != hand && !winTo(hand);
  }
}
