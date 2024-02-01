
# Installazione pacchetti 
apt-get update
sudo apt install apache2 php libapache2-mod-php php-mysql -y

# Abilito il modulo rewrite di apache
sudo a2enmod rewrite

# Backup file di conf apache
sudo cp /etc/apache2/apache2.conf /etc/apache2/apache2.conf.bak

# modifico la configurazione 
sudo sed -i 's/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf
sudo sed -i 's/;extension=pdo_mysql/extension=pdo_mysql/' /etc/php/8.1/apache2/php.ini


# restart apache2
sudo service apache2 restart