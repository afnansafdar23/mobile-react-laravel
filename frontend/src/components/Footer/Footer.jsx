import React from "react"
import "./style.css"
import { Col, Container, Row } from "react-bootstrap"
import { Link } from 'react-router-dom';
// import { IonIcon } from '@ionic/react';
// import { logoFacebook, logoInstagram, logoTwitter, logoLinkedin } from 'ionicons/icons';
import { FaFacebook, FaInstagram, FaTwitter, FaGoogle } from "react-icons/fa"; // Importing the icons



const Footer = () => {
  return (
    <footer>
      <Container>
        <Row className="footer-row">
          <Col md={3} sm={5} className='box'>
            <div className="logo">
              <ion-icon name="bag"></ion-icon>
              <h1>Gadget Glamour</h1>
            </div>
            <p>Discover a world of mobile accessories, including chargers, cases, and headphones. Improve your mobile experience by partnering with us today.</p>
            <div className="social-icons">
              <a href="https://www.facebook.com/" target="fa"><FaFacebook size={30} /></a>
              <a href="https://www.instagram.com/" target="insta"><FaInstagram size={30} /></a>
              <a href="https://twitter.com/" target="tweet"><FaTwitter size={30} /></a>
              <a href="https://www.google.com/" target="google"><FaGoogle size={30} /></a>
            </div>
            {/* Email Us Placeholder */}
            <div className="email-us-footer">
                <h2>Email Us</h2>
                <input type="text" id="email-input" name="email" placeholder="Enter your email" />
            </div>
          </Col>
          <Col md={3} sm={5} className='box'>
            <h2>About Us</h2>
            <ul>
              <li>Careers</li>
              <li>Our Stores</li>
              <li>Our Cares</li>
              <li>Terms & Conditions</li>
              <li>Privacy Policy</li>
            </ul>
          </Col>
          <Col md={3} sm={5} className='box'>
            <h2>Customer Care</h2>
            <ul>
              <li><Link to="/product_reviews">Product Reviews</Link></li>
              <li><Link to="/money_back_guarantee">Money Back Guarantee</Link></li>
              <li><Link to="/returns_refunds">Returns & Refunds</Link></li>
              <li><Link to="/cancellation_policy">Cancellation Policy</Link></li>
              <li><Link to="/faqs">FAQ</Link></li>


            </ul>
          </Col>
          <Col md={3} sm={5} className='box'>
            <h2>Contact Us</h2>
            <ul>
              <li>70 Washington Square South, New York, NY 10012, United States </li>
              <li>Email: uilib.help@gmail.com</li>
              <li>Phone: +1 1123 456 780</li>
            </ul>
          </Col>
        </Row>
        <div className="footer-bottom">
          <Link to="/terms">Terms and Conditions</Link>
          <Link to="/contact">Contact Us</Link>
          <Link to="/policy">Privacy Policy</Link>
          <Link to="/blogs">Blogs</Link>
          <Link to="/faqs">FAQ</Link>
        </div>
      </Container>
    </footer>
  )
}

export default Footer
