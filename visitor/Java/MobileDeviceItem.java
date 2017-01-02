
public class MobileDeviceItem implements ShopItem{

    public String name;
    public double price;

    public MobileDeviceItem(String name, double price) {
        this.name = name;
        this.price = price;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public double getPrice() {
        return price;
    }

    public void setPrice(double price) {
        this.price = price;
    }

    @Override
    public double acceptCurrencyConverter(CurrencyConverterVisitor currencyConverterVisitor) {
        return currencyConverterVisitor.convert(this);
    }
}
