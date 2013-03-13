package jeroo;

import java.util.ArrayList;

public class MapState {

    private ArrayList<JerooState> jerooState = new ArrayList<>();
    private int x = -1;
    private int y = -1;
    private char oldItem = 'o';
    private char newItem = 'n';

    public MapState(ArrayList<Jeroo> jeroos){
        for (Jeroo j : jeroos) {
            jerooState.add(new JerooState(j.getX(), j.getY(), j.getDirection(), j.getFlowers()));
        }
    }
    
    public MapState(ArrayList<Jeroo> jeroos, int x, int y, char oldItem, char newItem) {
        for (Jeroo j : jeroos) {
            jerooState.add(new JerooState(j.getX(), j.getY(), j.getDirection(), j.getFlowers()));
        }
        this.x = x;
        this.y = y;
        this.oldItem = oldItem;
        this.newItem = newItem;
    }
    
    public int getX(){
        return x;
    }
    
    public int getY(){
        return y;
    }
    
    public char getOldItem(){
        return oldItem;
    }
    
    public char getNewItem(){
        return newItem;
    }
    
    public ArrayList<JerooState> getJerooState(){
        return jerooState;
    }
}
