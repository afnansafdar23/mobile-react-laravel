import React from 'react';
import './terms.css';

const TermsAndConditionsPage = () => {
  const termsAndConditionsSections = [
    {
      title: '1. Acceptance of Terms',
      content: 'By accessing or using our website, you agree to comply with and be bound by these terms and conditions.'
    },
    {
      title: '2. Privacy Policy',
      content: 'Please review our Privacy Policy, which also governs your visit to our website, to understand our practices.'
    },
    {
      title: '3. Intellectual Property',
      content: 'All content on this site, including text, graphics, logos, and images, is the property of Mobile Phone Accessories and is protected by international copyright laws.'
    },
    {
      title: '4. Product Descriptions',
      content: 'We strive to be as accurate as possible in describing our products. However, we do not warrant that product descriptions or other content on the site are accurate, complete, reliable, current, or error-free.'
    },
    {
      title: '5. Pricing and Availability',
      content: 'Prices and availability of products are subject to change without notice.'
    },
    {
      title: '6. Limitation of Liability',
      content: 'In no event shall Mobile Phone Accessories be liable for any direct, indirect, incidental, special, or consequential damages arising out of or in any way connected with the use of our products or website.'
    },
    {
      title: '7. Governing Law',
      content: 'These terms and conditions are governed by and construed in accordance with the laws of the United Kingdom.'
    },
  ];

  return (
    <div className="terms-container">
      <h4>Terms and Conditions</h4>

      {termsAndConditionsSections.map((section, index) => (
        <section key={index}>
          <h5>{section.title}</h5>
          <p>{section.content}</p>
        </section>
      ))}
    </div>
  );
};

export default TermsAndConditionsPage;
