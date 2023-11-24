import { Fragment, useContext, useEffect } from "react" 
import Wrapper from "../wrapper/Wrapper"
import Section from "../Section"
import { discoutProducts } from "../../utils/products"
import { DataContainer } from "../../App"
// import SliderHome from "../SliderCard/SlideCard"
import banner from "../../Images/banners23.gif"
import "./s23.css"


const SamsungFE = () => {
  const { addToCart } = useContext(DataContainer);
  // const newArrivalData = products.filter(item => item.category === "mobile" || item.category === "wireless");
  // const bestSales = products.filter(item => item.category === "accessory");
  useEffect(() => {
    window.scrollTo(0, 0);
  }, [])
  return (
    <Fragment>
      {/* <SliderHome /> */}
      <div className="banner-23">
      <a href="/shop"> {/* Add the URL to the 'all-products' page */}
        <img src={banner} alt="Order Now" />
    </a>
      </div>

      <div>
        <Section title="Galaxy S23 Cases" bgColor="#bdc3c7" productItems={discoutProducts} addToCart={addToCart} />

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

export default SamsungFE
