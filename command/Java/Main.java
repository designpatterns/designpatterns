
public class Main {

    public static void main( String args[] )
    {
        Notifier notifier = new Notifier();

        SomeEvent someEvent = new SomeEvent();

        NotifyByEmail notifyByEmail = new NotifyByEmail(someEvent);
        NotifyBySMS notifyBySMS = new NotifyBySMS(someEvent);

        notifier.addCommand(notifyByEmail);
        notifier.addCommand(notifyBySMS);

        notifier.executeAll();
    }
}
