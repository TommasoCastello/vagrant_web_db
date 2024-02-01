# Installazione pacchetti 
sudo apt-get update && sudo apt-get install mysql-server -y;

#  Crazione DB e utente di bind
sudo mysql < "/vagrant/database/todo.sql"
# sudo mysql -e "DROP USER IF EXISTS 'web-bind'@'%';"
sudo mysql -e "CREATE USER 'web-bind'@'%' IDENTIFIED BY 'Password&1';"
sudo mysql -e "GRANT ALL PRIVILEGES ON todo.* TO 'web-bind'@'%' WITH GRANT OPTION;"

# Configurazione accesso dall'esterno
sudo sed -i "s/bind-address\s*=\s*127.0.0.1/bind-address = 0.0.0.0/" /etc/mysql/mysql.conf.d/mysqld.cnf
sudo sed -i "s/mysqlx-bind-address\s*=\s*127.0.0.1/mysqlx-bind-address = 0.0.0.0/" /etc/mysql/mysql.conf.d/mysqld.cnf

# Restart mysql
sudo systemctl restart mysql