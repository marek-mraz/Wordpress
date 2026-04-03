# Custom WordPress Deployment

Custom Docker-based WordPress deployment with plugin management and OAuth2 authentication.

## What's Included

- **WordPress** (latest) as the base image
- **WP-CLI** for command-line WordPress management
- **Composer** for PHP dependency and plugin management
- **Git** for version-controlled plugin/theme installation
- **OAuth2 authentication** integration

## Getting Started

```bash
docker build -t custom-wordpress .
docker run -d -p 8080:80 custom-wordpress
```

Then open [http://localhost:8080](http://localhost:8080) to complete the WordPress setup wizard.

## Adding Plugins

Use WP-CLI inside the container:

```bash
docker exec -it <container> wp plugin install <plugin-name> --activate --allow-root
```

Or add Composer-managed plugins by mounting a `composer.json` into the project.
# Wordpress
# Wordpress
