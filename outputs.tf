output "ip_address" {
    value = digitalocean_droplet.ubuntu.ipv4_address
    description = "The public IP address of your Droplet application."
}
