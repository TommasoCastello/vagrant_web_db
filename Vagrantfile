# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|
  # Shared vars

  BOX_NAME = "ubuntu/jammy64"
  WEB_NAME = "web.m340"
  DB_NAME = "db.m340"
  
  PROXY_HTTP = "http://10.20.5.51:8888"
  PROXY_HTTPS = "http://10.20.5.51:8888"
  PROXY_EXCLUDE = "localhost,127.0.0.1"
  PROXY_ENABLE = true

  BASE_INT_NETWORK = "10.10.20"
  BASE_HOST_ONLY_NETWORK = "192.168.56"

  config.vagrant.plugins = "vagrant-proxyconf"

  # VM WEB
  config.vm.define WEB_NAME do |subconfig|
    subconfig.vm.box = BOX_NAME

    subconfig.proxy.http = PROXY_HTTP
    subconfig.proxy.https = PROXY_HTTPS
    subconfig.proxy.no_proxy = PROXY_EXCLUDE
    subconfig.proxy.enabled = PROXY_ENABLE

    subconfig.vm.hostname = WEB_NAME
  
    subconfig.vm.network "private_network", ip:  "#{BASE_HOST_ONLY_NETWORK}.10"
    subconfig.vm.network "private_network", ip: "#{BASE_INT_NETWORK}.10", virtualbox__intnet: true

    subconfig.vm.synced_folder "site", "/var/www/html"

    subconfig.vm.provider "virtualbox" do |vb|
      vb.name = WEB_NAME
      vb.gui = true
      vb.memory = "2048"
    end

    subconfig.vm.provision "shell", path: "scripts/provision_apache.sh"
  end


  # VM DB
  config.vm.define DB_NAME do |subconfig|
    subconfig.vm.box = BOX_NAME

    subconfig.proxy.http = PROXY_HTTP
    subconfig.proxy.https = PROXY_HTTPS
    subconfig.proxy.no_proxy = PROXY_EXCLUDE
    subconfig.proxy.enabled = PROXY_ENABLE

    subconfig.vm.hostname = DB_NAME
  
    subconfig.vm.network "private_network", ip: "#{BASE_INT_NETWORK}.11", virtualbox__intnet: true


    subconfig.vm.provider "virtualbox" do |vb|
      vb.name = DB_NAME
      vb.gui = true
      vb.memory = "2048"
    end

    subconfig.vm.provision "shell", path: "scripts/provision_mysql.sh"
  end

end
