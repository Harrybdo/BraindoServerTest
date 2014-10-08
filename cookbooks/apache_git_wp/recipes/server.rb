#
# Cookbook Name:: apache
# Recipe:: default
#
# Copyright 2014, YOUR_COMPANY_NAME
#
# All rights reserved - Do Not Redistribute
#

include_recipe "iptables"

package "httpd" do
  action :install
end

package "php" do
  action :install
end

package "php-mysql" do
  action :install
end

iptables_rule "http"

template "/var/www/html/wp-config.php" do
  source "wp-config.php.erb"
  mode 0644
  owner "root"
  group "root"
end

service "httpd" do
  action [:enable, :start]
end

template "/etc/httpd/conf/httpd.conf" do
  source "httpd.conf.erb"
  owner "root"
  group "root"
  mode "0664"
  notifies :restart, "service[httpd]"
end

cookbook_file "wp-cli.phar" do
  path "/usr/bin/wp"
  owner "root"
  group "root"
  mode "0777"
  action :create
end

execute "wp-cli" do
  command "wp option update siteurl '#{node[:app][:url]}' --path='/var/www/html'"
  #command "wp option update wordpress-https_ssl_host '#{node[:app][:secure_url]}' --path='/var/www/html'"
  command "wp plugin deactivate wordpress-https  --path='/var/www/html'"
  action :run
end
