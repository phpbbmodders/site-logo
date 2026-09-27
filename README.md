# Site Logo

Allows board administrators to change the board's logo in the ACP.

## Installation

1. Download the extension
2. Copy the whole archive content to /ext/phpbbmodders/sitelogo
3. Go to your phpBB board > Administration Control Panel > Customise > Manage extensions > Site Logo: enable

## Update instructions

1. Go to your phpBB board > Administration Control Panel > Customise > Manage extensions > Site Logo: disable
2. Delete all files of the extension from /ext/phpbbmodders/sitelogo
3. Upload all the new files to the same locations
4. Go to your phpBB board > Administration Control Panel > Customise > Manage extensions > Site Logo: enable
5. Purge the board cache

## Upgrading from `kaileymsnay/sitelogo`

This extension used to be installed as `kaileymsnay/sitelogo`. It is now `phpbbmodders/sitelogo`. To switch an existing board without losing the logo settings:

1. Go to your phpBB board > Administration Control Panel > Customise > Manage extensions > Site Logo: disable. Do **not** delete its data.
2. Delete the `/ext/kaileymsnay/sitelogo` folder
3. Upload this version to `/ext/phpbbmodders/sitelogo` and enable it. The old install's settings, ACP module and migration history are moved to the new name automatically.
4. Purge the board cache

If you disable the old extension from the command line (`bin/phpbbcli.php`) instead of the ACP, run `bin/phpbbcli.php cache:purge` before enabling the new one.

## License

[GNU General Public License v2](license.txt)
