
public class ConverterToEUR implements  CurrencyConverterVisitor{

    @Override
    public double convert(ShopItem shopItem) {
        return shopItem.getPrice() * 0.85;
    }
}
