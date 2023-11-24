import React from 'react';
import './refunds.css';
import FBanner from '../../Images/footer3.png'


const RefundsReturnsPage = () => {
  return (
    <div className="policy-page">
      <div className='f-banner'>
        <img src={FBanner} alt="" />
      </div>
      {/* <h4>Refunds & Returns Policy</h4> */}

      <section>
        <h5>1. Refund Timeline:</h5>
        <p>
          Refunds will be processed within 14 calendar days based on the following circumstances:
          <ul>
            <li>Upon receiving the returned items.</li>
            <li>Once we receive appropriate evidence of the goods being sent back.</li>
            <li>If we arrange the collection of goods, upon receiving your cancellation request.</li>
            <li>If no order confirmation has been provided or goods have not been dispatched, upon receiving your cancellation request.</li>
          </ul>
        </p>
      </section>

      <section>
        <h5>2. Refund Deductions:</h5>
        <p>
          Please note that refunds may be subject to deductions as follows:
          <ul>
            <li>Excessive handling of goods resulting in a decrease in their value may lead to a reduction in the refund amount. If excessive handling is discovered before receiving or inspecting the goods, we reserve the right to charge an appropriate sum.</li>
            <li>Standard delivery charges will be reimbursed in accordance with the law. However, under our extended guarantee, premium delivery charges will also be reimbursed.</li>
          </ul>
        </p>
      </section>

      <section>
        <h5>3. Refund Method:</h5>
        <p>Refunds will be issued to the original payment method used for the order unless a specific alternative request is made.</p>
      </section>

      <section>
        <h5>Consumer Responsibilities:</h5>
        <p>
          We take responsibility for foreseeable damages or losses resulting from a breach of our Sale Terms or negligence on our part. Foreseeable damages or losses are those that can be clearly anticipated as a consequence of our negligence or breach, both by us and you at the time the contract is established. However, we cannot be held liable for damages or losses that are not considered foreseeable.
        </p>
        <p>
          Please note the following:
          <ul>
            <li>Our goods are intended for private or domestic use and may not be suitable for business, commercial, or industrial purposes. We will not be held liable for any loss of business, business interruption, or loss of profit.</li>
            <li>Our liability for personal injury, death caused by negligence (including that of our agents, employees, and sub-contractors), or fraudulent misrepresentation cannot be excluded or limited by any provisions in these terms.</li>
            <li>These terms do not aim to limit or exclude your legal consumer rights. For guidance on your legal rights, please consult your nearest Trading Standards Office or Citizens Advice Bureau.</li>
          </ul>
        </p>
      </section>

      <section>
        <h5>Contact Us:</h5>
        <p>If you have any questions or concerns regarding our Refunds & Returns Policy, please contact us as soon as possible.</p>
        <p>
          <strong>Email:</strong> info@smartphoneaccessories.co.uk<br />
          <strong>Tel:</strong> +44 7916 312844
        </p>
      </section>
    </div>
  );
};

export default RefundsReturnsPage;
