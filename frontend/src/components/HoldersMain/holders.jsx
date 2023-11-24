import { Fragment, useContext, useEffect } from "react"
import Wrapper from "../wrapper/Wrapper"
import Section from "../Section"
import { discoutProducts } from "../../utils/products"
import { DataContainer } from "../../App"
// import SliderHome from "../SliderCard/SlideCard"
import banner from "../../Images/holders-main.png"
import banner2 from "../../Images/holders-main2.png"
import "./holders.css"


const HolderMain = () => {
    const { addToCart } = useContext(DataContainer);
    // const newArrivalData = products.filter(item => item.category === "mobile" || item.category === "wireless");
    // const bestSales = products.filter(item => item.category === "accessory");
    useEffect(() => {
        window.scrollTo(0, 0);
    }, [])
    return (
        <Fragment>
            {/* <SliderHome /> */}
            <div className="banner-protector">
                <a href="/shop"> {/* Add the URL to the 'all-products' page */}
                    <img src={banner} alt="Shop Now" />
                </a>
            </div>
            <div className="desc">
                <img src="https://smartphone-accessories.co.uk/media/catalog/category/holders1.jpeg" alt="" />
                <p>Using a phone holder while driving in the UK is crucial for safety and compliance. By securing your phone in a holder, you keep both hands on the wheel and maintain better control of your vehicle, reducing the risk of accidents. Moreover, it helps prevent distractions caused by holding the phone in your hand or looking down to check directions, ensuring your focus remains on the road. Utilizing a phone holder also ensures compliance with UK laws, which prohibit the use of handheld devices while driving. Prioritizing safety through a phone holder promotes responsible driving, protecting you and others on the road.</p>
            </div>
            <h4 className="holderHeading">Find Accessories For Your Device</h4>
            <hr />
            <div>
                <Section title="" bgColor="#bdc3c7" productItems={discoutProducts} addToCart={addToCart} />
            </div>
            {/* <div>
        <Section title="New Arrivals" bgColor="#BDC581" productItems={newArrivalData} addToCart={addToCart} />
      </div>


      <div>
        <Section title="Best Sales" bgColor="#BDCF81" productItems={bestSales} addToCart={addToCart} />
      </div>

      <div>
        <Section title="Shop By Brands" bgColor="#BDCF81" productItems={bestSales} />
      </div> */}
            <div className="banner-protector">
                <img src={banner2} alt="" />
            </div>

            <section className="bg-light">
                <div className="container">
                    <div className="heading">
                        <h1>Our Manufactures</h1>
                    </div>
                    <div className="row justify-content-center">
                        <img
                            src="https://static.priceoye.pk/images/brands/svg/samsung.svg"
                            alt="Brand 1"
                            className="brand-image">
                        </img>
                        <img
                            src="https://static.priceoye.pk/images/brands/svg/infinix.svg"
                            alt="Brand 2"
                            className="brand-image">
                        </img>
                        <img
                            src="https://static.priceoye.pk/images/brands/svg/oppo.svg"
                            alt="Brand 3"
                            className="brand-image">
                        </img>
                        <img
                            src="https://static.priceoye.pk/images/brands/svg/xiaomi.svg"
                            alt="Brand 4"
                            className="brand-image">
                        </img>
                        <img
                            src="https://static.priceoye.pk/images/brands/svg/vivo.svg"
                            alt="Brand 5"
                            className="brand-image">
                        </img>
                        <img
                            src="https://static.priceoye.pk/images/brands/svg/tecno.svg"
                            alt="Brand 6"
                            className="brand-image">
                        </img>
                        <img
                            src="https://static.priceoye.pk/images/brands/svg/realme.svg"
                            alt="Brand 7"
                            className="brand-image">
                        </img>
                        <img
                            src="https://static.priceoye.pk/images/brands/svg/itel.svg"
                            alt="Brand 8"
                            className="brand-image">
                        </img>
                        <img
                            src="https://static.priceoye.pk/images/brands/svg/apple.svg"
                            alt="Brand 9"
                            className="brand-image">
                        </img>
                        <img
                            src="https://static.priceoye.pk/images/brands/svg/nokia.svg"
                            alt="Brand 10"
                            className="brand-image">
                        </img>
                    </div>
                </div>
            </section>
            <Wrapper />
        </Fragment>


    );
};

export default HolderMain
