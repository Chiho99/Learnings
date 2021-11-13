package RSP;
import java.util.*;

public class Player {
  private String name;
  // random
  private Random random = new Random();
  private Strategy strategy = new RandomStrategy();

  // constructor
  public Player(String name){
    this.name = name;
  }

  public String getName(){
    return this.name;
  }

  // Strategy getter
  public Strategy getStrategy(){
    return this.strategy;
  }

  // Strategy setter
  public void setStrategy(Strategy strategy){
    this.strategy = strategy;
  }

  public RspHand nextHand(){
    return strategy.nextHand();
  }
}
