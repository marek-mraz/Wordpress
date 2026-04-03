# WordPress Helm Chart

A production-ready Helm chart for deploying WordPress with built-in OIDC (OpenID Connect) authentication, custom environment plugins, and persistence.

## Features

- **Built-in OIDC**: Seamlessly configured for Keycloak / OAuth2 authentication out-of-the-box using the `daggerhart-openid-connect-generic` plugin.
- **Custom Plugin Pre-loading**: Must-use plugin (`mu-plugins/oidc.php`) is loaded into the Docker image directly.
- **High Availability Ready**: Pod disruption budgets, resource limits, scaling configurations.
- **Security Hardened**: Non-root configurations, capabilities dropped, NetworkPolicies.
- **Persistence**: MariaDB and WordPress data are persisted using PVCs.

## Prerequisites

- Kubernetes 1.22+
- Helm 3.x
- [Sealed Secrets](https://github.com/bitnami-labs/sealed-secrets) controller (optional, but enabled by default)
- A default StorageClass in your cluster (for PVCs)
- Traefik Ingress Controller (if using IngressRoute)

## Installation

1. Create a `values-production.yaml` with your custom configuration:

```yaml
ingress:
  host: "www.your-domain.com"
  
oauth:
  enabled: true
  clientId: "wordpress-client"
  endpointLogin: "https://auth.example.com/realms/realm/protocol/openid-connect/auth"
  # ... configure other OIDC endpoints

# Ensure you override sealed secrets or disable it and use plain secrets.
```

2. Generate Sealed Secrets if `sealedSecret.enabled: true`:

```bash
echo -n 'super-secret-db-root' | kubeseal --raw --namespace default --name wordpress-credentials --from-file=/dev/stdin
```

3. Deploy the chart:

```bash
helm upgrade --install my-wordpress ./helm-chart/wordpress -f values-production.yaml --namespace default
```

## How Plugins and Images are Managed

### The Docker Image
Plugins are natively injected into the custom Docker image via Composer and file copy operations.
In the `Dockerfile`:
1. `composer.json` is used to install `wpackagist-plugin/daggerhart-openid-connect-generic`.
2. A custom must-use plugin `plugins/mu-plugins/oidc.php` is copied into `/usr/src/wordpress/wp-content/mu-plugins/oidc.php`.

When the WordPress container initializes, it copies everything from `/usr/src/wordpress` to the `/var/www/html` persistent volume.

### Post-Start Initialization
The Helm chart includes a `postStart` lifecycle hook that uses WP-CLI to automatically:
- Activate the OIDC plugin (`daggerhart-openid-connect-generic`).
- Install and activate any themes passed via `app.theme`.
- Install and activate any additional plugins passed via `app.plugins`.

This means the OIDC plugin is not just installed, but automatically activated and fully configured by environment variables the moment your cluster comes online!

### Persistent Storage
- **WordPress Core & Uploads**: Stored in a PersistentVolumeClaim bound to `/var/www/html`.
- **Database**: Stored in a PersistentVolumeClaim bound to `/var/lib/mysql`.
- Because plugins and themes are copied to the PVC on initialization, your uploads and activated plugins survive pod restarts.