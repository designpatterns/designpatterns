
public class BreakLightsObserver implements Observer{

    float speed;

    private Subject subject;

    public BreakLightsObserver(Subject subject) {
        this.subject = subject;
        this.subject.addObserver(this);
    }

    @Override
    public void update(float speed) {

        if(speed < this.speed)
            System.out.println("Turning breaklights on!");

        this.speed = speed;
    }

}
