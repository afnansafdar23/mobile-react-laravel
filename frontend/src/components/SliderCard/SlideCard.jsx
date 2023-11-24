import React from "react";
import { Carousel, Col, Container, Row } from "react-bootstrap";
import "./slidercard.css";
// Import FontAwesome icons
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faChevronLeft, faChevronRight } from "@fortawesome/free-solid-svg-icons";

const SlideCard = ({ title, desc, cover }) => {
  return (
    <Container className="box">
      <Row>
        <Col lg={12} md={12} sm={12}> {/* Full-width for small screens */}
          <Carousel interval={3000}
            controls={false}
            prevIcon={<FontAwesomeIcon icon={faChevronLeft} />}
            nextIcon={<FontAwesomeIcon icon={faChevronRight} />}>
            <Carousel.Item>
              <Row>
              <Col lg={6} md={6} sm={12}> {/* 6 columns for large and medium screens, full-width for small screens */}
                  <h1>{title}</h1>
                  <p>{desc}</p>
                  <button className="btn-primary">SHOP NOW</button>
                </Col>
                <Col lg={6} md={6} sm={12}>
                  <img src={cover} alt="#" />
                </Col>
              </Row>
            </Carousel.Item>
            {/* Add more Carousel.Item components for additional slides */}
          </Carousel>
        </Col>
      </Row>
    </Container>
  );
};

export default SlideCard;
