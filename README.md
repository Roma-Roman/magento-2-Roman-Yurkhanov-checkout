# RomanYurkhanov Checkout for Magento 2
#### RomanYurkhanov Checkout module for Magento 2

[![Latest Stable Version](http://poser.pugx.org/romanyurkhanov/module-checkout/v)](https://packagist.org/packages/romanyurkhanov/module-checkout)
[![Total Downloads](http://poser.pugx.org/romanyurkhanov/module-checkout/downloads)](https://packagist.org/packages/romanyurkhanov/module-checkout)

RomanYurkhanov Checkout Extension for Magento 2

## Features

1. CMS Block
2. Preferred Payment Method
3. Preferred Shipping Method
4. Shipping Country Notice
5. Shipping Proposal

## Features Details

1. CMS Block
- This feature allows you to add additional information, editable from the admin panel, to the checkout page.
- Adds a CMS block to the "Order Summary" block at the bottom.

2. Preferred Payment Method
- This feature allows you to save and preselect the last selected payment method on the checkout page.

3. Preferred Shipping Method
- This feature allows you to save and preselect the last selected shipping method on the checkout page.

4. Shipping Country Notice
- This feature allows you to show additional information to the user on the checkout page depending on the selected country.
Example:
You can set the Free Shipping method for specific country in the:
Store -> Configuration -> Sales - > Delivery Methods
And then please select that county in the setting "Country".

5. Shipping Proposal
- This feature allows you to show additional information to the user on the checkout page, depending on whether the user is a guest or logged in.

## Extension Screenshots and Videos

<img width="1792" alt="Screenshot 2023-08-09 at 13 17 12" src="https://github.com/Roma-Roman/magento-2-Roman-Yurkhanov-checkout/assets/14273213/90ffa857-e676-456d-9698-a6d74ccbf187">


1. CMS Block
<img width="1792" alt="Screenshot 2023-08-09 at 09 15 32" src="https://github.com/Roma-Roman/magento-2-Roman-Yurkhanov-checkout/assets/14273213/671a1623-89a3-494b-b2ad-4d8c23770130">
<img width="1792" alt="Screenshot 2023-08-09 at 09 17 51" src="https://github.com/Roma-Roman/magento-2-Roman-Yurkhanov-checkout/assets/14273213/8b32e150-c878-4dd8-925f-2550e6ad867c">


2. Preferred Payment Method
<img width="1792" alt="Screenshot 2023-08-09 at 09 22 52" src="https://github.com/Roma-Roman/magento-2-Roman-Yurkhanov-checkout/assets/14273213/c07e86a3-59bd-4a51-9d7c-d291148486e9">

https://github.com/Roma-Roman/magento-2-Roman-Yurkhanov-checkout/assets/14273213/c33176b2-4ed2-4a40-8e2c-aaf09f203fa8


3. Preferred Shipping Method
<img width="1792" alt="Screenshot 2023-08-09 at 09 52 06" src="https://github.com/Roma-Roman/magento-2-Roman-Yurkhanov-checkout/assets/14273213/1324970a-ff9f-4a6f-ad33-9e64615e6456">

https://github.com/Roma-Roman/magento-2-Roman-Yurkhanov-checkout/assets/14273213/e8754dff-dd1e-411c-a420-3151dade6054


4. Shipping Country Notice
<img width="1792" alt="Screenshot 2023-08-09 at 13 19 37" src="https://github.com/Roma-Roman/magento-2-Roman-Yurkhanov-checkout/assets/14273213/ce673511-dc23-434e-872f-4f85f2e868e3">
<img width="1792" alt="Screenshot 2023-08-09 at 13 18 28" src="https://github.com/Roma-Roman/magento-2-Roman-Yurkhanov-checkout/assets/14273213/5d2be5ff-4364-4ddf-b512-327bab9b7932">

https://github.com/Roma-Roman/magento-2-Roman-Yurkhanov-checkout/assets/14273213/8246851e-4414-47aa-b70f-8babf04c20d6


5. Shipping Proposal
<img width="1792" alt="Screenshot 2023-08-09 at 13 28 30" src="https://github.com/Roma-Roman/magento-2-Roman-Yurkhanov-checkout/assets/14273213/292490d9-03e6-4442-a68a-aba1235a9d84">

https://github.com/Roma-Roman/magento-2-Roman-Yurkhanov-checkout/assets/14273213/65187846-fb62-4781-91a2-692ee0f73a4e


## How to install & upgrade RomanYurkhanov_Checkout

### 1. Install via composer (recommend)

I recommend you to install RomanYurkhanov_Checkout module via composer. It is easy to install, update and maintenance.

Run the following command in Magento 2 root folder.

#### 1.1 Install

```
composer require romanyurkhanov/module-checkout
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
```

#### 1.2 Upgrade

```
composer update romanyurkhanov/module-checkout
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
```

Run compile if your store in Product mode:

```
php bin/magento setup:di:compile
```

### 2. Copy and paste

If you don't want to install via composer, you can use this way. 

- Download [the latest version here](https://github.com/Roma-Roman/magento-2-Roman-Yurkhanov-checkout/archive/main.zip)
- Extract `main.zip` file to `app/code/RomanYurkhanov/Checkout` ; You should create a folder path `app/code/RomanYurkhanov/Checkout` if not exist.
- Go to Magento root folder and run upgrade command line to install `RomanYurkhanov_Checkout`:

```
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
```
