
public class Main {

    public static void main( String args[] )
    {
        NewPhone phone1 = new MyNewPhone();

        // the oldPhone dont have some of the capabilities, but with the adapter with can implement the missing parts
        NewPhone phone2 = new NewPhoneAdapter(new MyOldPhone());

        phone1.syncToCloud();
        phone2.syncToCloud();
    }
}
