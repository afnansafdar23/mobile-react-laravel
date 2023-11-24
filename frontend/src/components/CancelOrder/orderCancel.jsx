import React from 'react';
import './orderCancel.css';
import FBanner from '../../Images/footer4.png'

const CancellationPolicyPage = () => {
  return (
    <div className="policy-page">
      <div className='f-banner'>
        <img src={FBanner} alt="" />
      </div>
      <h4>Cancellation Policy</h4>

      <section>
        <h5>1. Cancellation Timeline:</h5>
        <p>
          You can cancel your order at any time before it is dispatched. If you wish to cancel after dispatch, please refer to our Refunds & Returns Policy.
        </p>
      </section>

      <section>
        <h5>2. Cancellation Process:</h5>
        <p>
          To cancel your order, please follow these steps:
          <ul>
            <li>Contact our customer support team as soon as possible.</li>
            <li>Provide your order details for quick processing.</li>
            <li>We will confirm the cancellation and provide further instructions if needed.</li>
          </ul>
        </p>
      </section>

      <section>
        <h5>3. Cancellation Charges:</h5>
        <p>
          Cancellations made before dispatch are free of charge. If the order has been dispatched, standard delivery charges may apply. For expedited or premium delivery, additional charges may be incurred.
        </p>
      </section>

      <section>
        <h5>Contact Us:</h5>
        <p>If you have any questions or concerns regarding our Cancellation Policy, please contact us as soon as possible.</p>
        <p>
          <strong>Email:</strong> info@smartphone-accessories.co.uk<br />
          <strong>Tel:</strong> 0330 383 3011
        </p>
      </section>
    </div>
  );
};

export default CancellationPolicyPage;
