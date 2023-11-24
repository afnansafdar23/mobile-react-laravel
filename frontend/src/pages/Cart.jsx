import { useContext, useEffect } from "react"
import { DataContainer } from "../App"
import { Col, Container, Row } from "react-bootstrap";
import Wrapper from "../components/wrapper/Wrapper";
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faPlus, faMinus } from '@fortawesome/free-solid-svg-icons';


const Cart = () => {
  const { CartItem, setCartItem, addToCart, decreaseQty, deleteProduct } = useContext(DataContainer);
  const subTotalPrice = CartItem.reduce((price, item) => price + item.qty * item.price, 0);
  const totalPrice = CartItem.reduce((price, item) => price + item.qty * item.price + 50, 0);
  useEffect(() => {
    window.scrollTo(0, 0);
    if (CartItem.length === 0) {
      const storedCart = localStorage.getItem("cartItem");
      setCartItem(JSON.parse(storedCart));
    }
  },)
  return (
    <section className='cart-items'>
      <Container>
        <Row className="justify-content-center">
          <Col md={8}>
            {CartItem.length === 0 && <h1 className='no-items product'>No Items are add in Cart</h1>}
            {CartItem.map((item) => {
              const productQty = item.price * item.qty
              return (
                <div className='cart-list' key={item.id}>
                  <Row>
                    <Col className="image-holder" sm={4} md={3}>
                      <img src={item.imgUrl} alt='' />
                    </Col>
                    <Col sm={8} md={9}>
                      <Row className="cart-content justify-content-center">
                        <Col xs={12} sm={9} className="cart-details">
                          <h3>{item.productName}</h3>
                          <h4>
                            ${item.price}.00 * {item.qty}
                            <span>${productQty}.00</span>
                          </h4>
                        </Col>
                        <Col xs={12} sm={3} className='cartControl'>
                          <button className='incCart' onClick={() => addToCart(item)}>
                            <FontAwesomeIcon icon={faPlus} />
                          </button>

                          <button className='desCart' onClick={() => decreaseQty(item)}>
                            <FontAwesomeIcon icon={faMinus} />
                          </button>
                        </Col>
                      </Row>
                    </Col>
                    <button className="delete" onClick={() => deleteProduct(item)}>
                      <ion-icon name="close"></ion-icon>
                    </button>
                  </Row>
                </div>
              )
            })}
          </Col>
          <Col md={4}>
            <div className='cart-total'>
              <h2>Cart Summary</h2>
              <div className=' d_flex'>
                <h4>Sub Total Price :</h4>
                <h3>${subTotalPrice}.00</h3>
                <h4>Standard Delivery Charges :</h4>
                <h3>${subTotalPrice ? '50' : '00'}.0</h3>
                <br />
                <h4>Total Price :</h4>
                <h3>${totalPrice}.0</h3>
              </div>
            </div>
          </Col>
          <Col md={12}>
            <div className='cart-next-btn'>
              <button className="btn-cart">Continue Shopping</button>
              <button className="btn-cart">Proceed To Checkout</button>
            </div>

          </Col>
        </Row>
      </Container>
      <Wrapper />
    </section>
  )
}

export default Cart
