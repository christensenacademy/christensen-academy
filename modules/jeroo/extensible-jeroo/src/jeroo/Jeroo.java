package jeroo;

import static jeroo.CompassDirection.*;
import static jeroo.RelativeDirection.*;

/**
 * The Jeroo class defines the basic state and behavior of all Jeroos.
 *
 * @author Cameron Christensen
 */
public class Jeroo {

    private int flowers;
    private CompassDirection direction = EAST;
    private int x = 0;
    private int y = 0;

    public Jeroo() {
        // New jeroos must be added to the map.
        Map map = Map.getInstance();
        map.addJeroo(this);
        map.saveMap();
    }

    public Jeroo(int flowers) {
        this();
        this.flowers = flowers;
    }

    public Jeroo(int x, int y) {
        this();
        this.x = x;
        this.y = y;
    }

    public Jeroo(int x, int y, CompassDirection direction) {
        this();
        this.x = x;
        this.y = y;
        this.direction = direction;
    }

    public Jeroo(int x, int y, int flowers) {
        this();
        this.x = x;
        this.y = y;
        this.flowers = flowers;
    }

    public Jeroo(int x, int y, CompassDirection direction, int flowers) {
        this();
        this.x = x;
        this.y = y;
        this.direction = direction;
        this.flowers = flowers;
    }

    // "Getter" methods for private jeroo instance variables
    // Note: These were NOT part of the original Jeroo API
    public int getX() {
        return x;
    }

    public int getY() {
        return y;
    }

    public CompassDirection getDirection() {
        return direction;
    }

    public int getFlowers() {
        return flowers;
    }

    // The map needs to be able to increase a jeroo's flowers if another
    // jeroo gave it a flower.
    public void recieveFlower() {
        flowers++;
    }

    // Some helper methods
    private int findXRelative(RelativeDirection relDir) {
        if (direction == NORTH) {
            if (relDir == LEFT) {
                x--;
            }
            if (relDir == RIGHT) {
                x++;
            }
        } else if (direction == EAST) {
            if (relDir == AHEAD) {
                x++;
            }
        } else if (direction == SOUTH) {
            if (relDir == LEFT) {
                x++;
            }
            if (relDir == RIGHT) {
                x--;
            }
        } else if (direction == WEST) {
            if (relDir == AHEAD) {
                x--;
            }
        }
        return x;
    }

    private int findYRelative(RelativeDirection relDir) {
        if (direction == EAST) {
            if (relDir == LEFT) {
                y--;
            }
            if (relDir == RIGHT) {
                y++;
            }
        } else if (direction == SOUTH) {
            if (relDir == AHEAD) {
                y++;
            }
        } else if (direction == WEST) {
            if (relDir == LEFT) {
                y++;
            }
            if (relDir == RIGHT) {
                y--;
            }
        } else if (direction == NORTH) {
            if (relDir == AHEAD) {
                y--;
            }
        }
        return y;
    }

    // "Action methods" for making a jeroo DO things. Notice these methods have
    // void as a return type and that they don't contain return statements.
    public void hop() {

        Map map = Map.getInstance();
        int tempX = findXRelative(AHEAD);
        int tempY = findYRelative(AHEAD);

        if (Map.coordsInBounds(tempX, tempY)) {
            if (map.isClear(tempX, tempY) || map.isFlower(tempX, tempY)) {
                x = tempX;
                y = tempY;
            } else {
                if (map.isNet(tempX, tempY)) {
                    throw new Error("Jeroo trapped in net!");
                } else if (map.isWater(tempX, tempY)) {
                    throw new Error("Jeroo drowned in water!");
                }
            }
            map.saveMap();
        } else {
            throw new Error("Jeroo drowned in water!");
        }
    }

    public void hop(int n) {
        for (int i = 0; i < n; i++) {
            hop();
        }
    }

    public void pick() {
        if (isFlower(HERE)) {
            flowers++;
            Map.getInstance().clearSpace(x, y);
        }
    }

    public void plant() {
        if (flowers > 0) {
            flowers--;
            Map.getInstance().placeFlower(x, y);
        }
    }

    public void toss() {

        Map map = Map.getInstance();
        int tempX = findXRelative(AHEAD);
        int tempY = findYRelative(AHEAD);

        if (flowers > 0) {
            flowers--;
            if (map.isNet(tempX, tempY)) {
                map.clearSpace(tempX, tempY);
            } else {
                map.saveMap();
            }
        }
    }

    public void give(RelativeDirection relDir) {

        Map map = Map.getInstance();
        int tempX = findXRelative(relDir);
        int tempY = findYRelative(relDir);

        if (flowers > 0) {
            if (map.isJeroo(tempX, tempY)) {
                flowers--;
                Jeroo recipient = map.getJerooAt(tempX, tempY);
                if (recipient != null) {
                    recipient.recieveFlower();
                }
                map.saveMap();
            }
        }
    }

    public void turn(RelativeDirection relDir) {

        if (relDir == RIGHT) {
            if (direction == NORTH) {
                direction = EAST;
            } else if (direction == EAST) {
                direction = SOUTH;
            } else if (direction == SOUTH) {
                direction = WEST;
            } else if (direction == WEST) {
                direction = NORTH;
            }
        } else if (relDir == LEFT) {
            if (direction == NORTH) {
                direction = WEST;
            } else if (direction == EAST) {
                direction = NORTH;
            } else if (direction == SOUTH) {
                direction = EAST;
            } else if (direction == WEST) {
                direction = SOUTH;
            }
        }

        Map.getInstance().saveMap();
    }

    // "Boolean methods" return either of the boolean values true or false.
    public boolean hasFlower() {
        return flowers > 0;
    }

    public boolean isFacing(CompassDirection compDir) {
        return direction == compDir;
    }

    public boolean isFlower(RelativeDirection relDir) {
        int tempX = findXRelative(relDir);
        int tempY = findYRelative(relDir);
        return Map.getInstance().isFlower(tempX, tempY);
    }

    public boolean isJeroo(RelativeDirection relDir) {
        int tempX = findXRelative(relDir);
        int tempY = findYRelative(relDir);
        return Map.getInstance().isJeroo(tempX, tempY);
    }

    public boolean isNet(RelativeDirection relDir) {
        int tempX = findXRelative(relDir);
        int tempY = findYRelative(relDir);
        return Map.getInstance().isNet(tempX, tempY);
    }

    public boolean isWater(RelativeDirection relDir) {
        int tempX = findXRelative(relDir);
        int tempY = findYRelative(relDir);
        return Map.getInstance().isWater(tempX, tempY);
    }

    public boolean isClear(RelativeDirection relDir) {
        int tempX = findXRelative(relDir);
        int tempY = findYRelative(relDir);
        return Map.getInstance().isClear(tempX, tempY);
    }

    // USER-DEFINED METHODS
    // Gets a flower if it is nearby
    public void getFlowerNearby() {

        if (isFlower(HERE) || isFlower(AHEAD) || isFlower(LEFT) || isFlower(RIGHT)) {

            if (isFlower(LEFT)) {
                turn(LEFT);
            } else if (isFlower(RIGHT)) {
                turn(RIGHT);
            }

            hop();
            pick();
        }
    }

    // The logic here is surprisingly simple:
    //   - go right whenever possible
    //   - go straight if possible when right is unavailable
    //   - turn left if that's the only option, otherwise turn around
    // NOTE: This will only work on a maze with single-width "hallways" and no loops
    public void moveTendingRight() {
        getFlowerNearby();
        if (isClear(RIGHT)) {
            turn(RIGHT);
        } else {
            if (isClear(AHEAD)) {
            } // no need to turn...
            else {
                if (isClear(LEFT)) {
                    turn(LEFT);
                } else {
                    turn(RIGHT);
                    turn(RIGHT);
                }
            }
        }

        hop();
    }
}
