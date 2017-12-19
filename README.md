# kushki-php-demo
Based on https://github.com/Kushki/kushki-demo-php Credits to https://github.com/joseSantacruz 

Author: JohanAndrey
GIRURL: https://github.com/johanandrey/kushki-php-demo

To start the project use docker-compose (1) or copy the public_html folder to your webserver (2)

1) Verify adjust the environment application variables in the file commerce_data.env. Then execute below command to start the service:

	docker-compose up -d

2) If you copy public_html directory to a external webserver, replace the variables in index.php:
	- KUSHKIJS
	- KUSHKICHECKOUTJS
	- PUBLIC_KEY
   and process.php
	- PRIVATE_KEY
	- LANGUAJE
	- CURRENCY
	- ENVIRONMENT

Notes: 
 - To change the port, modify the docker-compose.yml file
