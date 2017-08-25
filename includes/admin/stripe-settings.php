<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$webhook_url = WC_Stripe_Helper::get_webhook_url();

return apply_filters( 'wc_stripe_settings',
	array(
		'enabled' => array(
			'title'       => __( 'Enable/Disable', 'woocommerce-gateway-stripe' ),
			'label'       => __( 'Enable Stripe', 'woocommerce-gateway-stripe' ),
			'type'        => 'checkbox',
			'description' => '',
			'default'     => 'no',
		),
		'title' => array(
			'title'       => __( 'Title', 'woocommerce-gateway-stripe' ),
			'type'        => 'text',
			'description' => __( 'This controls the title which the user sees during checkout.', 'woocommerce-gateway-stripe' ),
			'default'     => __( 'Credit Card (Stripe)', 'woocommerce-gateway-stripe' ),
			'desc_tip'    => true,
		),
		'description' => array(
			'title'       => __( 'Description', 'woocommerce-gateway-stripe' ),
			'type'        => 'text',
			'description' => __( 'This controls the description which the user sees during checkout.', 'woocommerce-gateway-stripe' ),
			'default'     => __( 'Pay with your credit card via Stripe.', 'woocommerce-gateway-stripe' ),
			'desc_tip'    => true,
		),
		'webhook' => array(
			'title'       => __( 'Webhook Enpoints', 'woocommerce-gateway-stripe' ),
			'type'        => 'title',
			/* translators: webhook URL */
			'description' => sprintf( __( 'You must add the webhook endpoint <strong style="background-color:#ddd;">&nbsp;&nbsp;%s&nbsp;&nbsp;</strong> to your Stripe Account Settings <a href="https://dashboard.stripe.com/account/webhooks" target="_blank">Here</a> so you can receive notifications on the charge statuses.', 'woocommerce-gateway-stripe' ), $webhook_url ),
		),
		'testmode' => array(
			'title'       => __( 'Test mode', 'woocommerce-gateway-stripe' ),
			'label'       => __( 'Enable Test Mode', 'woocommerce-gateway-stripe' ),
			'type'        => 'checkbox',
			'description' => __( 'Place the payment gateway in test mode using test API keys.', 'woocommerce-gateway-stripe' ),
			'default'     => 'yes',
			'desc_tip'    => true,
		),
		'test_publishable_key' => array(
			'title'       => __( 'Test Publishable Key', 'woocommerce-gateway-stripe' ),
			'type'        => 'password',
			'description' => __( 'Get your API keys from your stripe account.', 'woocommerce-gateway-stripe' ),
			'default'     => '',
			'desc_tip'    => true,
		),
		'test_secret_key' => array(
			'title'       => __( 'Test Secret Key', 'woocommerce-gateway-stripe' ),
			'type'        => 'password',
			'description' => __( 'Get your API keys from your stripe account.', 'woocommerce-gateway-stripe' ),
			'default'     => '',
			'desc_tip'    => true,
		),
		'publishable_key' => array(
			'title'       => __( 'Live Publishable Key', 'woocommerce-gateway-stripe' ),
			'type'        => 'password',
			'description' => __( 'Get your API keys from your stripe account.', 'woocommerce-gateway-stripe' ),
			'default'     => '',
			'desc_tip'    => true,
		),
		'secret_key' => array(
			'title'       => __( 'Live Secret Key', 'woocommerce-gateway-stripe' ),
			'type'        => 'password',
			'description' => __( 'Get your API keys from your stripe account.', 'woocommerce-gateway-stripe' ),
			'default'     => '',
			'desc_tip'    => true,
		),
		'statement_descriptor' => array(
			'title'       => __( 'Statement Descriptor', 'woocommerce-gateway-stripe' ),
			'type'        => 'text',
			'description' => __( 'Extra information about a charge. This will appear on your customer’s credit card statement.', 'woocommerce-gateway-stripe' ),
			'default'     => '',
			'desc_tip'    => true,
		),
		'capture' => array(
			'title'       => __( 'Capture', 'woocommerce-gateway-stripe' ),
			'label'       => __( 'Capture charge immediately', 'woocommerce-gateway-stripe' ),
			'type'        => 'checkbox',
			'description' => __( 'Whether or not to immediately capture the charge. When unchecked, the charge issues an authorization and will need to be captured later. Uncaptured charges expire in 7 days.', 'woocommerce-gateway-stripe' ),
			'default'     => 'yes',
			'desc_tip'    => true,
		),
		'three_d_secure' => array(
			'title'       => __( '3D Secure', 'woocommerce-gateway-stripe' ),
			'label'       => __( 'Require 3D Secure when applicable', 'woocommerce-gateway-stripe' ),
			'type'        => 'checkbox',
			'description' => __( 'Some payment methods have 3D Secure feature. This is an extra security layer for your store. Choose how to handle payments when 3D Secure is optional. Enabling would require customers to use 3D Secure when optional.', 'woocommerce-gateway-stripe' ),
			'default'     => 'no',
			'desc_tip'    => true,
		),
		'stripe_checkout' => array(
			'title'       => __( 'Stripe Checkout', 'woocommerce-gateway-stripe' ),
			'label'       => __( 'Enable Stripe Checkout', 'woocommerce-gateway-stripe' ),
			'type'        => 'checkbox',
			'description' => __( 'If enabled, this option shows a "pay" button and modal credit card form on the checkout, instead of credit card fields directly on the page.', 'woocommerce-gateway-stripe' ),
			'default'     => 'no',
			'desc_tip'    => true,
		),
		'stripe_checkout_locale' => array(
			'title'       => __( 'Stripe Checkout locale', 'woocommerce-gateway-stripe' ),
			'type'        => 'select',
			'class'       => 'wc-enhanced-select',
			'description' => __( 'Language to display in Stripe Checkout modal. Specify Auto to display Checkout in the user\'s preferred language, if available. English will be used by default.', 'woocommerce-gateway-stripe' ),
			'default'     => 'en',
			'desc_tip'    => true,
			'options'     => array(
				'auto' => __( 'Auto', 'woocommerce-gateway-stripe' ),
				'zh'   => __( 'Simplified Chinese', 'woocommerce-gateway-stripe' ),
				'da'   => __( 'Danish', 'woocommerce-gateway-stripe' ),
				'nl'   => __( 'Dutch', 'woocommerce-gateway-stripe' ),
				'en'   => __( 'English', 'woocommerce-gateway-stripe' ),
				'fi'   => __( 'Finnish', 'woocommerce-gateway-stripe' ),
				'fr'   => __( 'French', 'woocommerce-gateway-stripe' ),
				'de'   => __( 'German', 'woocommerce-gateway-stripe' ),
				'it'   => __( 'Italian', 'woocommerce-gateway-stripe' ),
				'ja'   => __( 'Japanese', 'woocommerce-gateway-stripe' ),
				'no'   => __( 'Norwegian', 'woocommerce-gateway-stripe' ),
				'es'   => __( 'Spanish', 'woocommerce-gateway-stripe' ),
				'sv'   => __( 'Swedish', 'woocommerce-gateway-stripe' ),
			),
		),
		'stripe_bitcoin' => array(
			'title'       => __( 'Bitcoin Currency', 'woocommerce-gateway-stripe' ),
			'label'       => __( 'Enable Bitcoin Currency', 'woocommerce-gateway-stripe' ),
			'type'        => 'checkbox',
			'description' => __( 'If enabled, an option to accept bitcoin will show on the checkout modal. Note: Stripe Checkout needs to be enabled and store currency must be set to USD.', 'woocommerce-gateway-stripe' ),
			'default'     => 'no',
			'desc_tip'    => true,
		),
		'stripe_checkout_image' => array(
			'title'       => __( 'Stripe Checkout Image', 'woocommerce-gateway-stripe' ),
			'description' => __( 'Optionally enter the URL to a 128x128px image of your brand or product. e.g. <code>https://yoursite.com/wp-content/uploads/2013/09/yourimage.jpg</code>', 'woocommerce-gateway-stripe' ),
			'type'        => 'text',
			'default'     => '',
			'desc_tip'    => true,
		),
		'request_payment_api' => array(
			'title'       => __( 'Payment Request API', 'woocommerce-gateway-stripe' ),
			'label'       => __( 'Enable Payment Request API', 'woocommerce-gateway-stripe' ),
			'type'        => 'checkbox',
			'description' => __( 'If enabled, users will be able to pay using the Payment Request API if supported by the browser.', 'woocommerce-gateway-stripe' ),
			'default'     => 'yes',
			'desc_tip'    => true,
		),
		'apple_pay' => array(
			'title'       => __( 'Apple Pay', 'woocommerce-gateway-stripe' ),
			/* translators: 1) br tag 2) opening anchor tag 3) closing anchor tag */
			'label'       => sprintf( __( 'Enable Apple Pay. %1$sBy using Apple Pay, you agree to %2$s and %3$s\'s terms of service.', 'woocommerce-gateway-stripe' ), '<br />', '<a href="https://stripe.com/apple-pay/legal" target="_blank">Stripe</a>', '<a href="https://developer.apple.com/apple-pay/acceptable-use-guidelines-for-websites/" target="_blank">Apple</a>' ),
			'type'        => 'checkbox',
			'description' => __( 'If enabled, users will be able to pay with Apple Pay.', 'woocommerce-gateway-stripe' ),
			'default'     => 'yes',
			'desc_tip'    => true,
		),
		'apple_pay_button' => array(
			'title'       => __( 'Apple Pay Button Style', 'woocommerce-gateway-stripe' ),
			'label'       => __( 'Button Style', 'woocommerce-gateway-stripe' ),
			'type'        => 'select',
			'description' => __( 'Select the button style you would like to show.', 'woocommerce-gateway-stripe' ),
			'default'     => 'black',
			'desc_tip'    => true,
			'options'     => array(
				'black' => __( 'Black', 'woocommerce-gateway-stripe' ),
				'white' => __( 'White', 'woocommerce-gateway-stripe' ),
			),
		),
		'apple_pay_button_lang' => array(
			'title'       => __( 'Apple Pay Button Language', 'woocommerce-gateway-stripe' ),
			/* translators: link */
			'description' => sprintf( __( 'Enter the 2 letter ISO code for the language you would like your Apple Pay Button to display in. Reference available ISO codes <a href="%s" target="_blank">here</a>.', 'woocommerce-gateway-stripe' ), 'http://www.w3schools.com/tags/ref_language_codes.asp' ),
			'type'        => 'text',
			'default'     => 'en',
			'desc_tip'    => false,
		),
		'saved_cards' => array(
			'title'       => __( 'Saved Cards', 'woocommerce-gateway-stripe' ),
			'label'       => __( 'Enable Payment via Saved Cards', 'woocommerce-gateway-stripe' ),
			'type'        => 'checkbox',
			'description' => __( 'If enabled, users will be able to pay with a saved card during checkout. Card details are saved on Stripe servers, not on your store.', 'woocommerce-gateway-stripe' ),
			'default'     => 'no',
			'desc_tip'    => true,
		),
		'logging' => array(
			'title'       => __( 'Logging', 'woocommerce-gateway-stripe' ),
			'label'       => __( 'Log debug messages', 'woocommerce-gateway-stripe' ),
			'type'        => 'checkbox',
			'description' => __( 'Save debug messages to the WooCommerce System Status log.', 'woocommerce-gateway-stripe' ),
			'default'     => 'no',
			'desc_tip'    => true,
		),
	)
);
