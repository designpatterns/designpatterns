
public class NotifyBySMS implements Command{

    SomeEvent someEvent;

    public NotifyBySMS(SomeEvent someEvent) {
        this.someEvent = someEvent;
    }

    @Override
    public void execute() {
        String information = someEvent.getInformation();
        System.out.println("Sending event information by SMS...");
    }
}
