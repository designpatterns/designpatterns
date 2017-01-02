
public interface ShopItem {
    double getPrice();
    double acceptCurrencyConverter(CurrencyConverterVisitor currencyConverterVisitor);
}
