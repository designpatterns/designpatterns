
public class CarsFactory {

    public static final int BMW = 0;
    public static final int MAZDA = 1;


    public static Car createCar(int type) {

        switch (type){
            case BMW:
                return new BMW();
            case MAZDA:
                return new Mazda();
            default:
                return null;
        }
    }
}
