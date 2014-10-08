# See http://docs.getchef.com/config_rb_knife.html for more information on knife configuration options

current_dir = File.dirname(__FILE__)
log_level                :info
log_location             STDOUT
node_name                "harrybdopersonal"
client_key               "#{current_dir}/harrybdopersonal.pem"
validation_client_name   "harrybdo-validator"
validation_key           "#{current_dir}/harrybdo-validator.pem"
chef_server_url          "https://api.opscode.com/organizations/harrybdo"
cache_type               'BasicFile'
cache_options( :path => "#{ENV['HOME']}/.chef/checksums" )
cookbook_path            ["#{current_dir}/../cookbooks"]
knife[:aws_access_key_id] = "#{ENV['AWS_ACCESS_KEY_ID']}"
knife[:aws_secret_access_key] = "#{ENV['AWS_SECRET_ACCESS_KEY']}"
knife[:flavor] = "t2.micro"
knife[:image] = "ami-aa06939a"
knife[:region] = "us-west-2"
knife[:aws_ssh_key_id] = "AWSprivatekey"
knife[:ssh_user] = "HarrybDO"

