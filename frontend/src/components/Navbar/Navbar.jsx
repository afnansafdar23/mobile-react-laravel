import { useContext, useEffect, useState } from "react"
import { Container, Nav, Navbar } from "react-bootstrap";
import "./navbar.css";
import { DataContainer } from "../../App";
import { Link } from "react-router-dom";
import Form from 'react-bootstrap/Form';
import InputGroup from 'react-bootstrap/InputGroup';
import Button from 'react-bootstrap/Button';
import DrawerNav from '../DrawerNav/DrawerNav';


const NavBar = () => {
  const { CartItem, setCartItem } = useContext(DataContainer);
  const [expand, setExpand] = useState(false);
  const [isFixed, setIsFixed] = useState(true);
  const noBoxShadowStyle = {
    boxShadow: 'none',
  };
  // fixed Header
  function scrollHandler() {
    if (window.scrollY >= 100) {
      setIsFixed(true);
    } else if (window.scrollY <= 50) {
      setIsFixed(false);
    }
  }
  window.addEventListener("scroll", scrollHandler);
  useEffect(() => {
    if (CartItem.length === 0) {
      const storedCart = localStorage.getItem("cartItem");
      setCartItem(JSON.parse(storedCart));
    }

    // Add the event listener to the navigation element
    const svgElement = document.querySelector(".nav-icon");
    svgElement.addEventListener("click", function () {
      window.location.href = '/login'; // Replace 'newPageURL' with the desired URL.
    });

    // Remove the event listener when the component unmounts
    return () => {
      svgElement.removeEventListener("click", () => { });
    };
  }, [CartItem, setCartItem]);

  return (
    <>
      <Navbar
        fixed="top"
        expand="md"
        style={noBoxShadowStyle}
        className={isFixed ? "navbar fixed" : "navbar shadow-none"}
      >
        <Container className="navbar-container col-12">
          <Navbar.Brand to="/" className="col-3 justify-content-start">
            <ion-icon name="bag"></ion-icon>
            <DrawerNav />
            <h1 className="logo">Gadget Glamour</h1>
          </Navbar.Brand>   <div className="d-flex">
            <div className="media-cart">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" className="nav-icon">
                <path fillRule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clipRule="evenodd" />
              </svg>
              <Link aria-label="Go to Cart Page" to='/cart' className='cart' data-num={CartItem.length}>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" className="nav-icon">
                  <path d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" />
                </svg>
              </Link>
            </div>
          </div>
          <InputGroup className="col-3">
            <Form.Control
              placeholder="Search Gadgets"
              aria-label="Search Gadgets"
              aria-describedby="basic-addon2"
            />
            <Button variant="outline-secondary" id="button-addon2">
              Search Here
            </Button>
          </InputGroup>
          {/* Media cart and toggle */}

          <Navbar.Collapse id="basic-navbar-nav col-4">
            <Nav className="justify-content-end flex-grow-1 pe-3">
              <Nav.Item className="expanded-cart">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" className="nav-icon">
                  <path fillRule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clipRule="evenodd" />
                </svg>
                <Link aria-label="Go to Cart Page" to='/cart' className='cart' data-num={CartItem.length}>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" className="nav-icon">
                    <path d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" />
                  </svg>
                </Link>
              </Nav.Item>
            </Nav>
          </Navbar.Collapse>
        </Container>
      </Navbar>
      <hr className="m-0" />
      <Navbar
        expand="lg"
        className="navbar-lg category-navbar fixed"
      >
        <Container className="navbar-container">
          <Navbar.Collapse id="basic-navbar-nav">
            <Nav className="justify-content-end flex-grow-1 pe-3">

              <Nav.Item>
                <Link aria-label="Go to S23FE Page" className="navbar-link row" to="/samsung-ultra" onClick={() => setExpand(false)}>
                  <img src="https://images.mobilefun.co.uk/graphics/60pixelc/15832.jpg" className="nav-img" alt='' />
                  <span className="nav-link-label">Cases</span>
                </Link>
                <div className="sublink">
                  <Link aria-label="Go to Samsung Main Page" className="section-header" to="/samsung-cases" onClick={() => setExpand(false)}>
                    <h6 className="section-header">Samsung Cases</h6>
                  </Link>
                  <hr className="m-0" />
                  <Link to="/samsung-fe">Galaxy S23 FE Cases</Link>
                  <Link to="/samsung-ultra">Galaxy S23 Ultra Cases</Link>
                  <Link to="/samsung-plus">Galaxy S23 Plus Cases</Link>
                  <Link to="/samsung-s23">Galaxy S23 Cases</Link>
                  <Link to="/samsung-zflip">Galaxy Z Flip 5 Cases</Link>
                  <Link className="section-header" to="/shop">Shop All Samsung Cases</Link>
                  <Link aria-label="Go to iPhone Cases Page" className="section-header" to="/iphone-cases" onClick={() => setExpand(false)}>
                    <h6 className="section-header">iPhone Cases</h6>
                  </Link>
                  <hr className="m-0" />
                  <Link to="/cases">iPhone 15 Cases</Link>
                  <Link to="/cases">iPhone 15 Pro Cases</Link>
                  <Link to="/cases">iPhone 15 Plus Cases</Link>
                  <Link aria-label="Go to iPhone Cases Page" className="section-header" to="/iphone-cases" onClick={() => setExpand(false)}>
                    <h6 className="section-header">Google Cases</h6>
                  </Link>
                  <hr className="m-0" />
                  <Link to="/cases">Google Pixel Fold Cases</Link>
                  <Link to="/cases">Google Pixel 8 Cases</Link>
                  <Link to="/cases">Google Pixel 8 Pro Cases</Link>
                </div>
                <hr className="m-0" />

              </Nav.Item>
              <hr className="m-0" />

              <Nav.Item>
                <Link aria-label="Go to Screen Protector Main Page" className="navbar-link row" to="/screen-protectorMain" onClick={() => setExpand(false)}>
                  <img src="https://images.mobilefun.co.uk/graphics/60pixelc/16290.jpg" className="nav-img" alt='' />
                  <span className="nav-link-label">Screen Protectors</span>
                </Link>
                <div className="sublink">
                  <Link aria-label="Go to Samsung Main Page" className="section-header" to="/samsung-cases" onClick={() => setExpand(false)}>
                    <h6 className="section-header">Samsung Screen Protectors</h6>
                  </Link>
                  <hr className="m-0" />
                  <Link to="/samsung-fe">Galaxy S23 FE Screen Protectors</Link>
                  <Link to="/samsung-ultra">Galaxy S23 Ultra Screen Protectors</Link>
                  <Link to="/samsung-plus">Galaxy S23 Plus Screen Protectors</Link>
                  <Link to="/samsung-s23">Galaxy S23 Screen Protectors</Link>
                  <Link to="/samsung-zflip">Galaxy Z Flip 5 Screen Protectors</Link>
                  <Link aria-label="Go to iPhone Cases Page" className="section-header" to="/iphone-cases" onClick={() => setExpand(false)}>
                    <h6 className="section-header">iPhone Cases</h6>
                  </Link>
                  <hr className="m-0" />
                  <Link to="/cases">iPhone 15 Cases</Link>
                  <Link to="/cases">iPhone 15 Pro Cases</Link>
                  <Link to="/cases">iPhone 15 Plus Cases</Link>
                  <h6 className="section-header">Google Cases</h6>
                  <hr className="m-0" />
                  <Link to="/cases">Google Pixel Fold Cases</Link>
                  <Link to="/cases">Google Pixel 8 Cases</Link>
                  <Link to="/cases">Google Pixel 8 Pro Cases</Link>
                </div>
                <hr className="m-0" />
              </Nav.Item>
              <hr className="m-0" />

              <Nav.Item>
                <Link aria-label="Go to Holders Main Page" className="navbar-link row" to="/holders-main" onClick={() => setExpand(false)}>
                  <img src="https://images.mobilefun.co.uk/graphics/60pixelc/16819.jpg" className="nav-img" alt='' />
                  <span className="nav-link-label">Holders</span>
                </Link>
              </Nav.Item>
              <hr className="m-0" />

              <Nav.Item>
                <Link aria-label="Go to Contact Us Page" className="navbar-link row" to="/wireless" onClick={() => setExpand(false)}>
                  <img src="https://static.priceoye.pk/images/home/wireless-earbuds.svg" className="nav-img" alt='' />
                  <span className="nav-link-label">Wireless Earbuds</span>
                </Link>
              </Nav.Item>
              <hr className="m-0" />

              {/* <Nav.Item>
                <Link aria-label="Go to About Us Page" className="navbar-link row" to="/about us" onClick={() => setExpand(false)}>
                  <img src="https://static.priceoye.pk/images/home/bluetooth-speakers.svg" className="nav-img" alt='' />
                  <span className="nav-link-label">Bluetooth Speakers</span>
                </Link>
              </Nav.Item>
              <hr className="m-0" /> */}

              <Nav.Item>
                <Link aria-label="Go to Power Banks Page" className="navbar-link row" to="/power-banks" onClick={() => setExpand(false)}>
                  <img src="https://static.priceoye.pk/images/home/power-banks.svg" className="nav-img" alt='' />
                  <span className="nav-link-label">Power Banks</span>
                </Link>
              </Nav.Item>
              <hr className="m-0" />

              <Nav.Item>
                <Link aria-label="Go to Home Page" className="navbar-link row" to="/" onClick={() => setExpand(false)}>
                  <img src="https://smartphone-accessories.co.uk/media/catalog/product/cache/6fb59696926e57b0d8e75848f7fd4e44/a/p/apple-tag-pink-1.jpg" className="nav-img" alt='' />
                  <span className="nav-link-label">Air Tag Accessories</span>
                </Link>
              </Nav.Item>


            </Nav>
          </Navbar.Collapse>
        </Container>
      </Navbar>
    </>
  )
}

export default NavBar
