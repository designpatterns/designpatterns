import java.util.ArrayList;
import java.util.List;

public class Notifier {

    public List<Command> commandsList;

    public Notifier() {
        this.commandsList = new ArrayList<>();
    }

    public void addCommand(Command command){
        this.commandsList.add(command);
    }

    public void executeAll(){
        for(Command command : this.commandsList){
            command.execute();
        }
    }
}
