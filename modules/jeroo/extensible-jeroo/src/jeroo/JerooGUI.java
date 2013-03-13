package jeroo;

import java.awt.Color;
import java.awt.GridLayout;
import java.awt.event.KeyEvent;
import java.awt.event.KeyListener;
import java.util.ArrayList;
import java.util.LinkedList;
import java.util.TreeSet;
import javax.swing.JFrame;
import javax.swing.JPanel;

public class JerooGUI implements KeyListener {

    public static final Color WATER = Color.CYAN;
    public static final Color GRASS = Color.GREEN;
    public static final Color NET = Color.RED;
    public static final Color FLOWER = Color.YELLOW;
    public static final Color JEROO = new Color(50, 50, 50);
    private final int WIDTH = Map.HEIGHT;
    private final int HEIGHT = Map.WIDTH;
    private int counter;
    private char[][] map = new char[Map.HEIGHT][Map.WIDTH];
    private JPanel[][] mapPanels;
    private JFrame frame;

    public JerooGUI() {
        counter = 0;
        mapPanels = new JPanel[24][24];
        init();
    }

    private void init() {
        frame = new JFrame();
        frame.setLayout(new GridLayout(26, 26));
        frame.addKeyListener(this);    // JLabel cannot get keyboard focus
        frame.setResizable(true);
        frame.setSize(520, 520);
        frame.setBackground(WATER);
        frame.setDefaultCloseOperation(JFrame.DISPOSE_ON_CLOSE);
        frame.setTitle("Jeroo");
        frame.requestFocusInWindow();

        // save data to the char maps
        char[][] tempMap = Map.getInstance().getCharMatrix();
        for (int i = 0; i < Map.HEIGHT; i++) {
            for (int j = 0; j < Map.WIDTH; j++) {
                map[i][j] = tempMap[i][j];
            }
        }

        // save data to the panel map
        for (int i = 0; i < Map.HEIGHT + 2; i++) {
            for (int j = 0; j < Map.WIDTH + 2; j++) {
                JPanel panel = new JPanel();
                panel.setSize(20, 20);
                panel.setVisible(true);
                if (i < 1 || i > 24 || j < 1 || j > 24) {
                    panel.setBackground(WATER);
                } else {
                    panel.setBackground(GRASS);
                    mapPanels[i - 1][j - 1] = panel;
                }
                frame.add(panel);
            }
        }

        frame.setVisible(true);
        updateMap();
    }

    private void updateMap() {
        for (int i = 0; i < HEIGHT; i++) {
            for (int j = 0; j < WIDTH; j++) {
                char temp = map[i][j];
                Color c = Color.BLACK;
                if (temp == '.') {
                    c = GRASS;
                } else if (temp == 'W') {
                    c = WATER;
                } else if (temp == 'F') {
                    c = FLOWER;
                } else if (temp == 'N') {
                    c = NET;
                }
                mapPanels[i][j].setBackground(c);
            }
        }
    }
    
    private void updateJeroos(ArrayList<JerooState> jeroos){
        for (int i=0; i<jeroos.size(); i++) {
            mapPanels[jeroos.get(i).getY()][jeroos.get(i).getX()].setBackground(JEROO);
            System.out.println("Jeroo_" + i + " = " + jeroos.get(i));
        }
    }

    public void stepForwards() {
        if (counter < Map.getInstance().getHistoryLength() - 1) {
            counter++;
            MapState newState = Map.getInstance().getHistory(counter);
            if (newState.getX() >= 0) {
                int x = newState.getX();
                int y = newState.getY();
                char newItem = newState.getNewItem();
                map[y][x] = newItem;
            }
            updateMap();
            updateJeroos(newState.getJerooState());
        }
    }

    public void stepBackwards() {
        if (counter > 0) {
            MapState currentState = Map.getInstance().getHistory(counter);
            counter--;
            if (currentState.getX() >= 0) {
                int x = currentState.getX();
                int y = currentState.getY();
                char oldItem = currentState.getOldItem();
                map[y][x] = oldItem;
            }
            updateMap();
            updateJeroos(Map.getInstance().getHistory(counter).getJerooState());
        }
    }

    @Override
    public void keyReleased(KeyEvent e) {
    }

    @Override
    public void keyPressed(KeyEvent e) {
        if (e.getKeyCode() == KeyEvent.VK_LEFT) {
            stepBackwards();
        } else if (e.getKeyCode() == KeyEvent.VK_RIGHT) {
            stepForwards();
        }
    }

    @Override
    public void keyTyped(KeyEvent e) {
    }
}
