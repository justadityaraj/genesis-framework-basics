# Genesis framework basics

One Paragraph of project description goes here

---

## Table of Contents

- [Prerequisites](#Prerequisites)
- [Installation](#installation)
- [Features](#features)
- [Contributing](#contributing)
- [Authors](#authors)
- [License](#license)

---

## Prerequisites

- Access to root directory of you website. (eg. Cpanel)
- Access to backend  of your wordpress website.

---

## Installation

- All the `code` required to get started
- Images of what it should look like

```php
// code away!
<?php
/**
 * @package  Genesis
 * @author   StudioPress
 * @license  GPL-2.0-or-later
 * @link     https://my.studiopress.com/themes/genesis/
 */

require_once dirname( __FILE__ ) . '/lib/init.php';

//* Custom footer
remove_action( 'genesis_footer', 'genesis_do_footer' );
}

```

---

## Contributing

Please read [CONTRIBUTING.md](txt/Contributing.md) for details on our code of conduct, and the process for submitting pull requests to us.

## Authors

* **Aditya Raj** - *Initial work* - [GitHub](https://github.com/justadityaraj)

See also the list of [contributors](https://github.com/wprumors/genesis-framework-basics/graphs/contributors) who participated in this project.

## License

This project is licensed under the GPL License - see the [LICENSE](LICENSE) file for details

---
