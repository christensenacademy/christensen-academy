package jeroo;

import static jeroo.CompassDirection.*;
import static jeroo.RelativeDirection.*;

public class JerooApp {

    public static void main(String[] args) {
        // Specify the relative path to a .jev file the working directory
        Map.getInstance().loadMap("maps/mazes/drew.jev");
        new JerooGUI();
        runJerooCode();
    }

    public static void runJerooCode() {
        // Jeroo code goes here
        Jeroo kim = new Jeroo();
        kim.hop(6);
        kim.pick();
        kim.hop(2);
    }
}
