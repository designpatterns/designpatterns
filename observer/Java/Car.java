import java.util.ArrayList;
import java.util.List;

public class Car implements Subject{

    private float speed;
    private List<Observer>  observers;

    public Car() {
        this.observers = new ArrayList<>();
    }

    @Override
    public void addObserver(Observer observer) {
        this.observers.add(observer);
    }

    @Override
    public void removeObserver(Observer observer) {
        this.observers.remove(observer);
    }

    @Override
    public void notifyAllObservers() {
        for(Observer observer : this.observers){
            observer.update(this.speed);
        }
    }

    public void setSpeed(float speed) {
        this.speed = speed;
        this.notifyAllObservers();
    }
}
