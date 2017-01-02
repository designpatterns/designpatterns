
public class PricingManager implements PricingStrategy{

    private PricingStrategy pricingStrategy;

    public void setPricingStrategy(PricingStrategy pricingStrategy) {
        this.pricingStrategy = pricingStrategy;
    }

    @Override
    public void calculatePrice() {
        this.pricingStrategy.calculatePrice();
    }
}
