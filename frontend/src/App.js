import { useState, createContext, useEffect, lazy, Suspense } from "react"
import 'bootstrap/dist/css/bootstrap.min.css';
import { BrowserRouter as Router, Routes, Route} from "react-router-dom"
import NavBar from "./components/Navbar/Navbar";
import Login from "./components/Login-Page/login"
import Footer from "./components/Footer/Footer";
import Loader from "./components/Loader/Loader";
import About from "./components/About/About";
import FAQS from "./components/FAQS/FAQS";
import Policy from "./components/Policy/Policy"
import Blogs from "./components/Blogs/Blogs"
import SamsungMain from "./components/SamsungCases/samsungCases"
import SamsungFE from "./components/FE Cases/S23 FE"
import SamsungUltra from "./components/Ultra Cases/ultra"
import SamsungPlus from "./components/Plus Cases/plus"
import IphoneCases from "./components/iPhoneCases/iphone"
import SubCatgory4 from "./components/Samsubcat4/s23"
import SubCatgory5 from "./components/Samsubcat5/zflip"
import ScreenProtectorMain from"./components/ScreenProtMain/protector"
import HoldersMain from"./components/HoldersMain/holders"
import WirelessMain from"./components/Wireless/wireless"
import ProductReviews from "./components/ProductReviews/reviews"
import MoneyBackGuarantee from "./components/MoneyBack/moneyBack"
import ReturnsRefunds from "./components/Refunds/refunds"
import CancellationPolicy from "./components/CancelOrder/orderCancel"
import TermConditions from "./components/Terms/terms"





import { ToastContainer } from "react-toastify";
import "react-toastify/dist/ReactToastify.css";
import Contact from "./components/Contact/Contact";
const Home = lazy(() => import("./pages/Home"))
const Shop = lazy(() => import("./pages/Shop"))
const Cart = lazy(() => import("./pages/Cart"))
const ProductDetails = lazy(() => import("./pages/ProductDetails"));
export const DataContainer = createContext();
function App() {
  const [CartItem, setCartItem] = useState([])
  const [selectedProduct, setSelectedProduct] = useState(null);

  const addToCart = (product, num = 1) => {
    const productExit = CartItem.find((item) => item.id === product.id)
    if (productExit) {
      setCartItem(CartItem.map((item) => (item.id === product.id ? { ...productExit, qty: productExit.qty + num } : item)))
    } else {
      setCartItem([...CartItem, { ...product, qty: num }])
    }
  }

  const decreaseQty = (product) => {
    const productExit = CartItem.find((item) => item.id === product.id)
    // If product quantity == 1 then we have to remove it
    if (productExit.qty === 1) {
      setCartItem(CartItem.filter((item) => item.id !== product.id))
    }
    //else we just decrease the quantity 
    else {
      setCartItem(CartItem.map((item) => (item.id === product.id ? { ...productExit, qty: productExit.qty - 1 } : item)))
    }
  }

  const deleteProduct = (product) => {
    setCartItem(CartItem.filter((item) => item.id !== product.id))
  }
  useEffect(() => {
    localStorage.setItem("cartItem", JSON.stringify(CartItem));
  }, [CartItem])
  return (
    <DataContainer.Provider value={{ CartItem, setCartItem, addToCart, decreaseQty, deleteProduct, selectedProduct, setSelectedProduct }}>
      <Suspense fallback={<Loader />}>
        <Router>
          <ToastContainer
            position="top-right"
            autoClose={5000}
            hideProgressBar={false}
            newestOnTop={false}
            closeOnClick
            pauseOnFocusLoss
            draggable
            pauseOnHover
            theme="light"
          />
          <NavBar />
          <Routes>
            <Route path='/' element={<Home />} />
            <Route path='/shop' element={<Shop />} />
            <Route path='/shop/:id' element={<ProductDetails />} />
            <Route path='/cart' element={<Cart />} />
            <Route path='/login' element={<Login />} />

            <Route path='/about' element={<About />} />
            <Route path='/faqs' element={<FAQS />} />
            <Route path='/contact' element={<Contact />} />
            <Route path='/policy' element={<Policy />} />
            <Route path='/blogs' element={<Blogs />} />
            <Route path='/samsung-cases' element={<SamsungMain />} />
            <Route path='/samsung-fe' element={<SamsungFE />} />
            <Route path='/samsung-ultra' element={<SamsungUltra />} />
            <Route path='/samsung-plus' element={<SamsungPlus />} />
            <Route path='/samsung-s23' element={<SubCatgory4 />} />
            <Route path='/samsung-zflip' element={<SubCatgory5 />} />
            <Route path='/iphone-cases' element={<IphoneCases />} />
            <Route path='/screen-protectorMain' element={<ScreenProtectorMain />} />
            <Route path='/holders-main' element={<HoldersMain />} />
            <Route path='/wireless' element={<WirelessMain />} />
            {/* Footer Pages Routes*/}
            <Route path="/product_reviews" element={<ProductReviews/>} />
            <Route path="/money_back_guarantee" element={<MoneyBackGuarantee/>} />
            <Route path="/returns_refunds" element={<ReturnsRefunds/>} />
            <Route path="/cancellation_policy" element={<CancellationPolicy/>} />
            <Route path="/terms" element={<TermConditions/>} />






          </Routes>
          <Footer />
        </Router>
      </Suspense>
    </DataContainer.Provider>
  )
}

export default App
