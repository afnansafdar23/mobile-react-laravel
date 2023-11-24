import React from 'react';
import "./moneyBack.css"
import FBanner from '../../Images/footer2.png'


const GuaranteePage = () => {
  const guaranteePoints = [
    {
      title: '100% Satisfaction Guarantee',
      content: 'We are committed to your satisfaction. If you are not happy with our product or service, we will make it right.'
    },
    {
      title: 'Easy and Hassle-Free Returns',
      content: 'Our return process is simple and hassle-free. If you decide our product is not for you, we offer a full refund within 30 days of purchase.'
    },
    {
      title: 'Secure Payment',
      content: 'Your payment is secure with us. We use the latest encryption technology to ensure your financial information is protected.'
    },
    {
      title: 'Contact Us Anytime',
      content: 'Have questions or concerns? Our customer support team is available 24/7 to assist you. Contact us via email or phone, and we will respond promptly.'
    }
  ];

  return (
    <div className="guarantee-page">
      <div className='f-banner'>
        <img src={FBanner} alt="" />
      </div>
      <h5>Money Back Guarantee</h5>
      <p>We stand behind our products and services. Your satisfaction is our top priority.</p>

      <ul>
        {guaranteePoints.map((point, index) => (
          <li key={index}>
            <h6>{point.title}</h6>
            <p>{point.content}</p>
          </li>
        ))}
      </ul>
    </div>
  );
};

export default GuaranteePage;
