
public class NotifyByEmail implements Command{

    SomeEvent someEvent;

    public NotifyByEmail(SomeEvent someEvent) {
        this.someEvent = someEvent;
    }

    @Override
    public void execute() {
        String information = someEvent.getInformation();
        System.out.println("Sending event information by email...");
    }
}
