# Component factory

This package is made to ease a little "element-component" pattern development.

- [Setup](#setup)
  - [Composer](#composer)
  - [Config](#config)
    - [Configurable](#configurable)

## Setup

This section contains all the information regarding to setup and environment 
configuration.

### Composer

To install this package run:
```bash
composer require --dev ezitisitis/component-factory
```

**NB!** This package is not thought for production environment.

### Config

To publish config execute:
```bash
php artisan vendor:publish --tag=component-factory-config
```

#### Configurable

| .env variable | Config key  | Description |
| ---------------------------------------- | ---------------------------------------- | ----------- |
| `COMPONENT_FACTORY_COMPONENT_VIEW_PATH`  | `component-factory.path.component.view`  | Defines resource path of component `.blade.php` files    |
| `COMPONENT_FACTORY_COMPONENT_STYLE_PATH` | `component-factory.path.component.style` | Defines resource path of component `.scss`/`.sass` files |
| `COMPONENT_FACTORY_ELEMENT_VIEW_PATH`    | `component-factory.path.element.view`    | Defines resource path of element `.blade.php` files      |
| `COMPONENT_FACTORY_ELEMENT_STYLE_PATH`   | `component-factory.path.element.style`   | Defines resource path of element `.scss`/`.sass` files   |

## TO-DO

6. Add flag in case when livewire is in use.
7. Comment config file.
8. Comment and document code
9. Add tests
10. Add check for already existing file
11. Refactor

## Credits

- [Marks Bogdanovs](https://www.ezitisitis.com)
