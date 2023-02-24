terraform {
    required_version = "~> 1.0.0"

    required_providers {
        digitalocean = {
            source  = "digitalocean/digitalocean"
            version = "~> 2.0"
        }
    }
}

provider "digitalocean" {}

resource "digitalocean_droplet" "ubuntu" {
    image     = "Ubuntu 22.10 x64"
    name      = "ubuntu"
    region    = "nyc1"
    size      = "s-1vcpu-1gb"
    user_data = file("autopilot_dashboard_app.yaml")
    ipv4_address = "143.244.155.214"
}
