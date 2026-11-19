<?php include 'includes/header.php'; ?>

<section class="contact-hero">
    <div class="container px-0">
        <div class="contact-hero__content">

            <h1 class="contact-hero__title">
                <span class="contact-hero__title-strong">Contact</span>
                <span class="contact-hero__title-light">Desertwebz.</span>
            </h1>

            <p class="contact-hero__description">
                Questions about a product, an order or a 1 on 1 session.
                Send a message and we reply by email.
            </p>

        </div>
    </div>
</section>


<section class="contact-section">
    <div class="container px-0">

        <div class="contact-section__wrapper">

            <!-- LEFT: CONTACT INFORMATION -->
            <div class="contact-info">

                <h2 class="contact-info__title d-lg-block d-md-block d-none">
                    <span class="contact-info__title-strong">Send us</span>
                    <span class="contact-info__title-light">a message.</span>
                </h2>

                <div class="contact-info__list">

                    <div class="contact-info__item">
                        <div class="contact-info__label">Email</div>
                        <div class="contact-info__value">
                            <a href="mailto:support@desertwebz.com">
                                support@desertwebz.com
                            </a>
                        </div>
                    </div>

                    <div class="contact-info__item">
                        <div class="contact-info__label">Company</div>
                        <div class="contact-info__value">
                            Desertwebz Ltd, 12 Market Street,
                            London EC1A 1BB, United Kingdom
                        </div>
                    </div>

                    <div class="contact-info__item">
                        <div class="contact-info__label">Orders</div>
                        <div class="contact-info__value">
                            Have your invoice reference to hand.
                            You will find it under Invoices in your account.
                        </div>
                    </div>

                </div>
            </div>

            <!-- RIGHT: CONTACT FORM -->
            <div class="contact-form-wrapper">
                   <h2 class="contact-info__title d-lg-none d-md-none d-block">
                    <span class="contact-info__title-strong">Send us</span>
                    <span class="contact-info__title-light">a message.</span>
                </h2>

                <form class="contact-form" action="" method="post">

                    <!-- NAME + EMAIL -->
                    <div class="contact-form__row">

                        <div class="contact-field">
                            <label for="contact-name">Full Name</label>
                            <input
                                type="text"
                                id="contact-name"
                                name="name"
                                placeholder="John Smith"
                                required
                            >
                        </div>

                        <div class="contact-field">
                            <label for="contact-email">Email</label>
                            <input
                                type="email"
                                id="contact-email"
                                name="email"
                                placeholder="john@example.com"
                                required
                            >
                        </div>

                    </div>

                    <!-- PHONE -->
                    <div class="contact-field">
                        <label for="contact-phone">Phone (Optional)</label>
                        <input
                            type="tel"
                            id="contact-phone"
                            name="phone"
                            placeholder="+44 7700 900123"
                        >
                    </div>

                    <!-- MESSAGE -->
                    <div class="contact-field contact-field--message">
                        <label for="contact-message">Message</label>
                        <textarea
                            id="contact-message"
                            name="message"
                            placeholder="Hello, I would like to know more..."
                            required
                        ></textarea>
                    </div>

                    <!-- TERMS -->
                    <div class="contact-form__terms">
                        <label class="contact-checkbox">
                            <input type="checkbox" required>
                            <span class="contact-checkbox__check"></span>
                            <span>
                                I agree to the
                                <a href="#">Terms and Conditions</a>
                                and
                                <a href="#">Privacy Policy</a>.
                            </span>
                        </label>
                    </div>

                    <!-- SUBMIT -->
                    <button type="submit" class="contact-form__submit">
                        Send message
                    </button>

                </form>

            </div>

        </div>

    </div>
</section>


<?php include 'includes/footer.php'; ?>