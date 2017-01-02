import java.util.ArrayList;
import java.util.List;

public class Main {

    public static void main( String args[] )
    {
        List<ShopItem> items = new ArrayList<>();
        items.add(new MobileDeviceItem("Iphone6", 450));
        items.add(new MobileDeviceItem("Iphone7", 550));
        items.add(new MobileDeviceItem("Galaxy7", 470));
        items.add(new MobileDeviceItem("Google Pixel", 600));

        double finalPriceInUSD = 0;
        double finalPriceInEur = 0;

        CurrencyConverterVisitor currencyConverterEUR = new ConverterToEUR();

        for(ShopItem item : items) {
            finalPriceInUSD += item.getPrice();
            finalPriceInEur += item.acceptCurrencyConverter(currencyConverterEUR);
        }

        System.out.println("USD price: "+ finalPriceInUSD +" $");
        System.out.println("EUR price: "+ finalPriceInEur +" €");

    }
}
