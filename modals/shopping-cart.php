<body>
    <div class="offcanvas offcanvas-end s-cart-canvas" tabindex="-1" id="s-cart-offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-body">
            <div class="container">
                <div class="offcanvas-header">

                    <h3>Shopping Cart</h3>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="view " id="view1">
                    <div class="product-table">
                        <div class="product-card">
                            <img src="./assets/products.png" alt="">
                            <div class="product-info">
                                <h5 class="product-name">Product Name</h5>

                                <div class="product-quantity">
                                    <div class="counter">
                                        <div class="btn">+</div>
                                        <div class="count">2</div>
                                        <div class="btn">-<img src="" alt=""></div>
                                    </div>
                                    <h6 class="product-total-price">Rs. <span id="total-price">100000.00</span></h6>
                                </div>
                                <p id="remove-item">Remove</p>
                            </div>
                        </div>
                        <div class="product-card">
                            <img src="./assets/products.png" alt="">
                            <div class="product-info">
                                <h5 class="product-name">Product Name</h5>

                                <div class="product-quantity">
                                    <div class="counter">
                                        <div class="btn">+</div>
                                        <div class="count">2</div>
                                        <div class="btn">-<img src="" alt=""></div>
                                    </div>
                                    <h6 class="product-total-price">Rs. <span id="total-price">100000.00</span></h6>
                                </div>
                                <p id="remove-item">Remove</p>
                            </div>
                        </div>
                        <div class="product-card">
                            <img src="./assets/products.png" alt="">
                            <div class="product-info">
                                <h5 class="product-name">Product Name</h5>

                                <div class="product-quantity">
                                    <div class="counter">
                                        <div class="btn">+</div>
                                        <div class="count">2</div>
                                        <div class="btn">-<img src="" alt=""></div>
                                    </div>
                                    <h6 class="product-total-price">Rs. <span id="total-price">100000.00</span></h6>
                                </div>
                                <p id="remove-item">Remove</p>
                            </div>
                        </div>
                        <div class="product-card">
                            <img src="./assets/products.png" alt="">
                            <div class="product-info">
                                <h5 class="product-name">Product Name</h5>

                                <div class="product-quantity">
                                    <div class="counter">
                                        <div class="btn">+</div>
                                        <div class="count">2</div>
                                        <div class="btn">-<img src="" alt=""></div>
                                    </div>
                                    <h6 class="product-total-price">Rs. <span id="total-price">100000.00</span></h6>
                                </div>
                                <p id="remove-item">Remove</p>
                            </div>
                        </div>

                    </div>
                    <div class="total-order">
                        <h6>Total Items Cost</h6>
                        <h4 class="order-price">Rs. <span>100000.00</span></h4>
                    </div>
                    <input type="button" class=" primary btn" value="Check Out" id="check-out" name="check-out">
                </div>
                <div class="view hidden" id="view2">
                    <div class="info-area">
                        <div class="info">
                            <h6>Full Name</h6>
                            <p>Amishka Janith Dissanayake</p>
                        </div>
                        <div class="info">
                            <h6>Address</h6>
                            <p>42B/3, Buddhaloka mawatha, Suwarapola, Piliyandala</p>
                        </div>
                        <div class="info">
                            <h6>Contact Number</h6>
                            <p>076 3 133 646</p>
                        </div>
                    </div>
                    <input type="button" class=" primary btn" value="Confirm & Place Order" id="check-out-confirm" name="check-out-confirm">
                </div>
            </div>
        </div>
    </div>
</body>
<script src="./js/sign-up.js"></script>
<script src="./js/tools.js"></script>

</html>