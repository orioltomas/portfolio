# portfolio

Vhosts

<VirtualHost *:80>
    ServerName dev.portfolio
    DocumentRoot "/PATH/portfolio/public"

    <Directory /PATH/portfolio/public>
        Require all granted
        AllowOverride All
        Order Allow,Deny
        Allow from All

	FallbackResource /index.php
    </Directory>
</VirtualHost>
