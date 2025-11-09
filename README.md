# SneakShop - Ecom website

### How to install
1. First clone this repository in your htdocs directory using      
``git clone https://github.com/Yt027/sneakshop.git``    

2. Install required composer modules with   
``composer install``

3. Create a new database named `sneakshop` using phpmyadmin or another tool

4. Create required tables in your newly created database (sneakshop) by executing sql commands in `sneakshop/configs/database.sql`

5. Update database credentials to yours in `sneakshop/configs/.env` [See configs/README.md for details](./configs/README.md).

6. Update paydunya API keys to yours in `payments/.env` in order to be able to proceed payments [Check payments/README.md for details](./payments/README.md).

7. Visite `http://localhost/sneakshop` then enjoy