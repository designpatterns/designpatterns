
public class Main {

    public static void main( String args[] )
    {

        PricingManager pricingManager = new PricingManager();

        pricingManager.setPricingStrategy(new PricingStrategyVIP());
        pricingManager.calculatePrice();

        pricingManager.setPricingStrategy(new PricingStrategyNormal());
        pricingManager.calculatePrice();
    }
}
