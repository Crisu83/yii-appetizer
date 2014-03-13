# -*- mode: ruby -*-
# vi: set ft=ruby :

host_name        = "appetizer"
db_root_password = "appetizer"
cpus             = 1
memsize          = 1024
forwarded_port   = 1337

Vagrant.configure("2") do |config|

  # Default configuration
  #config.ssh.forward_agent = true
  config.vm.box = "precise64"
  config.vm.box_url = "http://files.vagrantup.com/precise64.box"
  config.vm.host_name = host_name
  config.vm.network "forwarded_port", guest: 80, host: forwarded_port

  # Oracle VirtualBox configuration
  config.vm.provider "virtualbox" do |v|
    v.customize [
      'modifyvm', :id,
      '--cpus', cpus,
      '--memory', memsize,
    ]
  end

  # VMWare Fusion configuration
  config.vm.provider "vmware_fusion" do |v, o|
    o.vm.box = "precise64_vmware"
    o.vm.box_url = "http://files.vagrantup.com/precise64_vmware.box"
    v.vmx["memsize"] = memsize
    v.vmx["numvcpus"] = cpus
  end

  # VMWare Workstation configuration
  config.vm.provider "vmware_workstation" do |v, o|
    o.vm.box = "precise64_vmware"
    o.vm.box_url = "http://files.vagrantup.com/precise64_vmware.box"
    v.vmx["memsize"] = memsize
    v.vmx["numvcpus"] = cpus
  end

  # Set up provisioning with Puppet
  config.vm.provision "shell", :path => "puppet/setup.sh"
  config.vm.provision "puppet" do |puppet|
    puppet.options = "--verbose --debug"
    puppet.manifests_path = "puppet/manifests"
    puppet.manifest_file = "appetizer.pp"
    puppet.module_path = "puppet/modules"
    puppet.hiera_config_path = "puppet/hiera.yaml"
    puppet.working_directory = "/vagrant/puppet"
    puppet.facter = {
      "environment" => "lampn",
      "db_root_password" => db_root_password,
    }
  end

end
