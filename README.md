# ACF Extended


Register [advanced custom fields](https://www.advancedcustomfields.com) with object oriented PHP.

ACF Extended provides an object oriented API to register fields, groups and layouts with ACF.  Oh, and you don't have to worry about unique field keys.

- [Installation](#installation)
- [Usage](#usage)
- [Resources](#resources)

## Installation

Require this package, with [Composer](https://getcomposer.org), in the root directory of your theme.

```bash
$ composer require techalica/acf-extended
```
Download the [Advanced Custom Fields Pro](https://www.advancedcustomfields.com/pro) plugin and put it in either the `plugins` or `mu-plugins` directory. Visit the WordPress dashboard and activate the plugin. Please note that this package supports ACF version 5.6 or later.

## Usage

All the fields can be generated through calling their respective 'type' name function with a label as an argument.
 ```bash
fields()->text('Name')
 ```
## Resources

Below you'll find a list of articles which can help you getting started and advance your custom fields knowledge.

- [A Beginner’s Guide to Advanced Custom Fields](https://www.advancedcustomfields.com/blog/beginners-guide-advanced-custom-fields)
- [Best Practices when Designing Custom Fields](https://www.advancedcustomfields.com/blog/best-practices-designing-custom-fields)
- [Organizing Custom Fields Inside of WordPress with ACF](https://www.advancedcustomfields.com/blog/organizing-custom-fields-inside-wordpress-acf)
- [Wait, ACF Has Settings?](https://www.advancedcustomfields.com/blog/acf-has-settings)

## License

[MIT](LICENSE) © [Imad Beyg](http://techalica.com/)