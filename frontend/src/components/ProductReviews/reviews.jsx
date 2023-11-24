import React from 'react';
import './reviews.css';
import FBanner from '../../Images/footer1.png'

const ProductReview = () => {
  return (
    <div className="product-review-container">
      <div className='f-banner'>
        <img src={FBanner} alt="" />
      </div>
      <h5>Customer Feedback and Reviews</h5>

        <p>
          Thank you for choosing Gadget Glamour! We appreciate your feedback on
          our products. Your reviews help us improve and provide better
          experiences for our customers.
        </p>

        <h5>Preserving Authentic Reviews A Commitment to Transparency</h5>

        <ol>
          <li>At our core, we believe in the integrity of authentic feedback.</li>
          <li>Embracing transparency, we are dedicated to upholding the value of genuine reviews without any removal interventions.</li>
          
        </ol>

        <h5>Review Guidelines</h5>
        <p>
          To ensure the quality and relevance of our reviews, please adhere to the following guidelines:
        </p>
        <ul>
          <li>Focus on the product and your personal experience with it.</li>
          <li>Avoid including personal information or inappropriate content.</li>
          <li>Be detailed and specific in your feedback to help other customers.</li>
          <li>Remember that your review may be visible to other users, so keep it respectful and constructive.</li>
        </ul>
      
    </div>
  );
};

export default ProductReview;
