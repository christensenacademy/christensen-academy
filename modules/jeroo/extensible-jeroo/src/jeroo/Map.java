package jeroo;

import java.io.File;
import java.util.ArrayList;
import java.util.Scanner;
import static jeroo.CompassDirection.*;

public class Map {

    // the size of the map grid
    public static final int WIDTH = 24;
    public static final int HEIGHT = 24;
    // the data for the map is specified as a matrix of chars
    private char[][] map = new char[HEIGHT][WIDTH];
    // for saving the each state of the map from start to finish
    private ArrayList<MapState> history = new ArrayList<MapState>();
    // for keeping track of all of the jeroos on the map
    private ArrayList<Jeroo> jeroos = new ArrayList<>();
    // the singleton...
    private static final Map instance = new Map();

    // for instantiating the singleton
    private Map() {
        for (int i = 0; i < HEIGHT; i++) {
            for (int j = 0; j < WIDTH; j++) {
                map[i][j] = '.';
            }
        }
    }

    public void addJeroo(Jeroo j) {
        jeroos.add(j);
    }

    public ArrayList<Jeroo> getJeroos() {
        return jeroos;
    }

    public static Map getInstance() {
        return instance;
    }

    public char[][] getCharMatrix() {
        return map;
    }

    public MapState getHistory(int n) {
        return history.get(n);
    }

    public int getHistoryLength() {
        return history.size();
    }

    public Map loadMap(String filename) {
        try {
            Scanner sc = new Scanner(new File(filename));
            String stringMap = "";
            char[][] tempMap = new char[HEIGHT][WIDTH];

            // Read in each line of the map from the map file
            while (sc.hasNextLine()) {
                stringMap += sc.nextLine();
            }

            // Transfer data from the String to the char map
            for (int i = 0; i < HEIGHT; i++) {
                for (int j = 0; j < WIDTH; j++) {
                    tempMap[i][j] = stringMap.charAt(i * WIDTH + j);
                }
            }
            map = tempMap;

        } catch (Exception e) {
            System.out.println("Failed to load map.");
        }
        return instance;
    }

    public void saveMap(int x, int y, char oldItem, char newItem) {
        MapState mapState = new MapState(jeroos, x, y, oldItem, newItem);
        history.add(mapState);
    }

    public void saveMap() {
        MapState mapState = new MapState(jeroos);
        history.add(mapState);
    }

    public void printMap() {
        char[][] tempMap = new char[HEIGHT][WIDTH];
        for (int i = 0; i < HEIGHT; i++) {
            for (int j = 0; j < WIDTH; j++) {
                tempMap[i][j] = map[i][j];
            }
        }
        for (Jeroo j : jeroos) {
            tempMap[j.getY()][j.getX()] = 'J';
        }
        for (int i = 0; i < HEIGHT; i++) {
            for (int j = 0; j < WIDTH; j++) {
                System.out.print(tempMap[i][j] + " ");
            }
            System.out.println("");
        }
    }

    public static boolean coordsInBounds(int x, int y) {
        return x >= 0 && x < WIDTH && y >= 0 && y < HEIGHT;
    }

    public void clearSpace(int x, int y) {
        if (coordsInBounds(x, y)) {
            saveMap(x, y, map[y][x], '.');
            map[y][x] = '.';
        }
    }

    public void placeFlower(int x, int y) {
        if (coordsInBounds(x, y)) {
            saveMap(x, y, map[y][x], 'F');
            map[y][x] = 'F';
        }
    }

    public boolean isFlower(int x, int y) {
        if (coordsInBounds(x, y)) {
            return map[y][x] == 'F';
        }
        return false;
    }

    public boolean isJeroo(int x, int y) {
        for (Jeroo j : jeroos) {
            if (j.getX() == x && j.getY() == y) {
                return true;
            }
        }
        return false;
    }

    public boolean isAnotherJeroo(int x, int y) {
        if (coordsInBounds(x, y)) {
            int count = 0;
            for (Jeroo j : jeroos) {
                if (j.getX() == x && j.getY() == y) {
                    count++;
                }
            }
            if (count > 1) {
                return true;
            }
            return true;
        }
        return false;
    }
    

    public Jeroo getJerooAt(int x, int y) {
        if (coordsInBounds(x, y)) {
            for (Jeroo j : jeroos) {
                if (j.getX() == x && j.getY() == y) {
                    return j;
                }
            }
            return null;
        }
        return null;
    }
    

    public boolean isNet(int x, int y) {
        if (coordsInBounds(x, y)) {
            return map[y][x] == 'N';
        }
        return false;
    }

    public boolean isClear(int x, int y) {
        if (coordsInBounds(x, y)) {
            return !isJeroo(x, y) && map[y][x] == '.';
        }
        return false;
    }

    public boolean isWater(int x, int y) {
        if (coordsInBounds(x, y)) {
            return map[y][x] == 'W';
        }
        return false;
    }
}
