$BOX = "ubuntu/xenial64"
$IP = "10.0.0.54"
$MEMORY = ENV.has_key?('VM_MEMORY') ? ENV['VM_MEMORY'] : "2048"
$CPUS = ENV.has_key?('VM_CPUS') ? ENV['VM_CPUS'] : "1"

Vagrant.configure("2") do |config|
  config.vm.hostname = "rocket.dev"
  config.vm.box = $BOX
  config.vm.network :private_network, ip: $IP
  config.ssh.forward_agent = true

  config.vm.synced_folder ".", "/var/www/rocket/current", type: "nfs"

  config.vm.provider "virtualbox" do |v|
    v.name = "rocket"
    v.customize ["modifyvm", :id, "--cpuexecutioncap", "100"]
    v.customize ["modifyvm", :id, "--memory", $MEMORY]
    v.customize ["modifyvm", :id, "--cpus", $CPUS]
  end
end
