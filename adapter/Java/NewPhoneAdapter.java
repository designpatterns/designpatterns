
public class NewPhoneAdapter implements NewPhone {

    OldPhone oldPhone;

    public NewPhoneAdapter(OldPhone oldPhone) {
        this.oldPhone = oldPhone;
    }

    /**
     * Since printed book cant do "Sync", so we implement something in case Someone will call this mathod
     * And this way the printed book will have the same Interface like the digital one
     */
    @Override
    public void syncToCloud() {
        System.out.println("Making something to sync the old phone with the cloud");
    }
}
