#!/bin/bash
echo "Ambiente: $environment"
if  [ "$environment" == "PRODUCTION" ]; then
	kushkijs=${kushijs_prod}
	kushkicheckoutjs=${kushkicheckout_prod}
else
	kushkijs=${kushijs_uat}
	kushkicheckoutjs=${kushkicheckout_uat}
fi
echo "Reemplazando variables"
/bin/sed -i "s@PUBLIC_KEY@${public_key}@g" /var/www/html/index.php
/bin/sed -i "s@KUSHKIJS@${kushkijs}@g" /var/www/html/index.php
/bin/sed -i "s@KUSHKICHECKOUTJS@${kushkicheckoutjs}@g" /var/www/html/index.php
/bin/sed -i "s@PRIVATE_KEY@${private_key}@g" /var/www/html/process.php
/bin/sed -i "s@ENVIRONMENT@${environment}@g" /var/www/html/process.php
/bin/sed -i "s@CURRENCY@${currency}@g" /var/www/html/process.php
/bin/sed -i "s@LANGUAJE@${languaje}@g" /var/www/html/process.php

echo "Corriendo script por defecto"
/my_init