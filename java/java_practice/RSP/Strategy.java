package RSP;

import java.util.*;

public interface Strategy {
  public RspHand nextHand();
}

//  Random Hand
class RandomStrategy implements Strategy {

  private Random random = new Random();

  public RspHand nextHand(){
    int n = random.nextInt(3);
    return RspHand.fromInt(n);
  }
}

//  Fixed Hand
class FixedStrategy implements Strategy {
  private RspHand hand;

  public FixedStrategy(RspHand hand) {
    this.hand = hand;
  }

  public RspHand nextHand() {
    return this.hand;
  }
}