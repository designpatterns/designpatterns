
public class Main {

    public static void main( String args[] )
    {

        Car car = new Car();

        SpeedometerObsever speedometer = new SpeedometerObsever(car);
        BreakLightsObserver breakLights = new BreakLightsObserver(car);

        car.setSpeed(100);
        car.setSpeed(70);

    }
}
