#
# Cookbook Name:: apache
# Recipe:: deploy
#
# Copyright 2014, YOUR_COMPANY_NAME
#
# All rights reserved - Do Not Redistribute
#

package "git" do
  action :install
end

template "/tmp/chef_ssh_deploy_wrapper.sh" do
  source "chef_ssh_deploy_wrapper.sh.erb"
  owner node[:base][:username]
  mode 0770
end

template "#{node[:base][:home]}/.ssh/id_rsa.pub" do
  source "id_rsa.pub.erb"
  owner node[:base][:username]
  mode 0600
end

template "#{node[:base][:home]}/.ssh/id_rsa" do
  source "id_rsa.erb"
  owner node[:base][:username]
  mode 0600
end

execute "known_hosts" do
  command "ssh -o 'StrictHostKeyChecking no' git@github.com"
  command "ssh-keyscan -H github.com >> #{node[:base][:home]}/.ssh/known_hosts"
  action :run
end

directory "/app" do
  action :create
end

git "/app/braindo" do
  repository node[:base][:repository]
  reference node[:base][:branch]
  ssh_wrapper "/tmp/chef_ssh_deploy_wrapper.sh"
  action :sync
end

directory "/var/www" do
  action :create
end

link "/var/www/html" do
  to "/app/braindo/html"
  link_type :symbolic
  action :create
end
