[![phpBB](https://www.phpbb.com/theme/images/logos/blue/160x52.png)](http://www.phpbb.com)
# [3.2][RC] StoreToMega 1.0.0
This Extension endows our forum with the option to upload and host any type of file in [MEGA](https://mega.nz) when we are creating or editing a thread. Once uploaded, he make the download link to include in our forum message.
* You can configure from the ACP the maximum size of the file to host, as well as the login data of the [MEGA](https://mega.nz) account to be used.
* It is totally viable to use a FREE account of [MEGA](https://mega.nz), which includes 50GB of free storage.

## Requirements
* This Extension REQUIRES that has INSTALLED and OPERATING on OUR server, the [MEGATOOLS](https://megatools.megous.com/) tool.
* This Extension is has checked on a server under Debian Jessie with [MEGATOOLS](https://megatools.megous.com/) installed from [this Debian Repository](https://packages.debian.org/sid/amd64/megatools/download).
* **WARNING: IF YOUR SERVER DOES NOT MEET THESE REQUIREMENTS, THIS EXTENSION WILL NOT SERVE YOU FOR ANYTHING.**
* phpBB >= 3.2.0
* PHP >= 5.3.3

## Install
1. Download the latest release.
2. In the `ext` directory of your phpBB board, copy the `Picaron/StoreToMega` folder. It must be so: `/ext/Picaron/StoreToMega`
3. Navigate in the ACP to `Customise -> Manage extensions`.
4. Look for `Store To Mega` under the Disabled Extensions list, and click its `Enable` link.
5. Configure by navigating in the ACP -> POSTING -> Post settings -> Extension: `Store To Mega`

## Uninstall
1. Navigate in the ACP to `Customise -> Extension Management -> Extensions`.
2. Look for `Store To Mega` under the Enabled Extensions list, and click its `Disable` link.
3. To permanently uninstall, click `Delete Data` and then delete the `/ext/Picaron/StoreToMega` folder.

## License
[GNU General Public License v2](http://opensource.org/licenses/GPL-2.0)
