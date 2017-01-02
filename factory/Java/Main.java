
public class Main {

    public static void main( String args[] )
    {

        Car carBMW = CarsFactory.createCar(CarsFactory.BMW);
        Car carMazda = CarsFactory.createCar(CarsFactory.MAZDA);

        carBMW.drive();
        carMazda.drive();

    }
}
