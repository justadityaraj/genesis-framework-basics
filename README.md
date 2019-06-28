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
- WinSCP recommended. 

---

## Installation

- All the `code` required to get started
- Images of what it should look like

```php
// This is what your functions.php code should look like!
<?php
/**
 * @package  Genesis
 * @author   StudioPress
 * @license  GPL-2.0-or-later
 * @link     https://my.studiopress.com/themes/genesis/
 */

require_once dirname( __FILE__ ) . '/lib/init.php';

//* Custom footer (this is how you can edit functions)
remove_action( 'genesis_footer', 'genesis_do_footer' );
add_action( 'genesis_footer', 'sp_custom_footer' );
function sp_custom_footer() {
	?>
	<p>Copyright &copy; 20XX - 2019 &middot; <a href="#">yourwebsite.com</a> &middot; All Rights Reserved.</p>
	<?php
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
