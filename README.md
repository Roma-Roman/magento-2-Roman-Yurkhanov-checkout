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

## Extension Screenshots

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
