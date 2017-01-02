public class SpeedometerObsever implements Observer{

    float speed;

    private Subject subject;

    public SpeedometerObsever(Subject subject) {
        this.subject = subject;
        this.subject.addObserver(this);
    }

    @Override
    public void update(float speed) {
        this.speed = speed;
        System.out.println("The speedometer updated its speed to "+ this.speed);
    }
}
