import { useContext, useState } from "react";
import { Col } from "react-bootstrap";
import "./product.css"
import { useNavigate } from "react-router-dom";
import { DataContainer } from "../../App";
import { toast } from "react-toastify";
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faStar} from '@fortawesome/free-solid-svg-icons';


const Product = ({ title, productItem, addToCart }) => {
    const { setSelectedProduct } = useContext(DataContainer);
    const router = useNavigate();
    const [count, setCount] = useState(0);
    const increment = () => {
        setCount(count + 1)
    }
    const handelClick = () => {
        setSelectedProduct(productItem);
        localStorage.setItem(`selectedProduct-${productItem.id}`, JSON.stringify(productItem));
        router(`/shop/${productItem.id}`);
    }
    const handelAdd = (productItem) => {
        addToCart(productItem);
        toast.success("Product has been added to cart!");
    }
    return (
        <Col md={2} sm={4} xs={10} className="product mtop">
            {title === "Big Discount" ? <span className="discount">{productItem.discount}% Off</span> : null}
            <img loading="lazy" onClick={() => handelClick()} src={productItem.imgUrl} alt="" />
            <div className="product-like">
                <label>{count}</label> <br />
                <ion-icon name="heart-outline" onClick={increment}></ion-icon>
            </div>
            <div className="product-details">
                <h3 onClick={() => handelClick()}>
                    {productItem.productName}
                </h3>
                <div className="rate">
                <FontAwesomeIcon icon={faStar} />
                <FontAwesomeIcon icon={faStar} />
                <FontAwesomeIcon icon={faStar} />
                <FontAwesomeIcon icon={faStar} />
                <FontAwesomeIcon icon={faStar} />

                </div>

                <div className="price">
                    <h4>${productItem.price}</h4>

                    <button aria-label="Add" type="submit" className="add" onClick={() => handelAdd(productItem)}>
                    {/* <FontAwesomeIcon icon={faPlus} /> */}

                    </button>
                </div>
            </div>
        </Col>
    );
};

export default Product;
