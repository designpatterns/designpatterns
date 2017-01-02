
public class MyNewPhone implements NewPhone {

    @Override
    public void syncToCloud() {
        System.out.println("Synced new phone!");
    }
}
