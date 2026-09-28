# Site Logo

[![Tests](https://github.com/phpbbmodders/site-logo/actions/workflows/tests.yml/badge.svg)](https://github.com/phpbbmodders/site-logo/actions/workflows/tests.yml) [![Lint](https://github.com/phpbbmodders/site-logo/actions/workflows/lint.yml/badge.svg)](https://github.com/phpbbmodders/site-logo/actions/workflows/lint.yml)

Change the board logo, and its size, from the ACP.

## Features

- Set the logo image by full URL or a path relative to the board root.
- Optional width and height in pixels.
- Settings changes are recorded in the admin log.

## Requirements

- phpBB 3.3.0 or later
- PHP 7.4 or later

## Installation

1. Copy the extension to `/ext/phpbbmodders/sitelogo`
2. In the Administration Control Panel, go to **Customise → Manage extensions**
3. Enable the **Site Logo** extension
4. Set the logo under **ACP → Extensions → Site Logo**

### Update instructions

1. Go to your phpBB board > Administration Control Panel > Customise > Manage extensions > Site Logo: disable
2. Delete all files of the extension from /ext/phpbbmodders/sitelogo
3. Upload all the new files to the same locations
4. Go to your phpBB board > Administration Control Panel > Customise > Manage extensions > Site Logo: enable
5. Purge the board cache

### Upgrading from `kaileymsnay/sitelogo`

This extension used to be installed as `kaileymsnay/sitelogo`. It is now `phpbbmodders/sitelogo`. To switch an existing board without losing the logo settings:

1. Go to your phpBB board > Administration Control Panel > Customise > Manage extensions > Site Logo: disable. Do **not** delete its data.
2. Delete the `/ext/kaileymsnay/sitelogo` folder
3. Upload this version to `/ext/phpbbmodders/sitelogo` and enable it. The old install's settings, ACP module and migration history are moved to the new name automatically.
4. Purge the board cache

If you disable the old extension from the command line (`bin/phpbbcli.php`) instead of the ACP, run `bin/phpbbcli.php cache:purge` before enabling the new one.

## Contributing

Contributions are welcome!

- **Bug reports**: [Open an issue](https://github.com/phpbbmodders/site-logo/issues).
- **Everything else** (questions, feature requests, ideas, general discussion): [Use Discussions](https://github.com/orgs/phpbbmodders/discussions), or the [community forum](https://www.phpbbmodders.com/community/).
- Pull requests are welcome for bug fixes or discussed features.

## Acknowledgments

- Original extension by Kailey Snay.
- Code review, bug fixes, and documentation assisted by [Claude](https://www.anthropic.com/claude).

## License

This extension is licensed under the **GNU General Public License v2.0**.

See [license.txt](license.txt) for more information.
