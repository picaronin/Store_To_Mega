[![phpBB](https://www.phpbb-es.com/foro/styles/flat-style/theme/images/logo_new_small.png)](https://www.phpbb-es.com/foro/viewtopic.php?f=147&t=42204)
# [3.2][RC] StoreToMega 3.2.8
This Extension endows our forum with the option to upload and host any type of file in [MEGA](https://mega.nz) when we are creating or editing a thread. Once uploaded, he make the download link to include in our forum message.
* You need to configure from the ACP the maximum size of the file to host, as well as the login data of the [MEGA](https://mega.nz) account to be used.
* It is totally viable to use a FREE account of [MEGA](https://mega.nz), which finally includes 15GB of free storage.

## Requirements
* This Extension REQUIRES that has INSTALLED and OPERATING on OUR server, the [MEGATOOLS](https://megatools.megous.com/) tool.
* This Extension REQUIRES a server under [Debian](https://www.debian.org/) or [Ubuntu](https://ubuntu.com/)
* phpBB >= 3.2.8
* PHP >= 7.1.0
* This Extension is has checked on a server under Debian Buster with [MEGATOOLS](https://megatools.megous.com/) installed from [this Debian Repository](https://packages.debian.org/sid/amd64/megatools/download).
* **WARNING: IF YOUR SERVER DOES NOT MEET THESE REQUIREMENTS, THIS EXTENSION WILL NOT SERVE YOU FOR ANYTHING.**
* **Important ::: Previous Step ::: Completely uninstall / Remove version 1.0.0 of the extension if it was previously installed.**

## Install
1. Download the latest release.
2. In the `ext` directory of your phpBB board, copy the `pikaron/storetomega` folder. It must be so: `/ext/pikaron/storetomega`
3. Navigate in the ACP to `Customise -> Manage extensions`.
4. Look for `Store To Mega` under the Disabled Extensions list, and click its `Enable` link.
5. Configure by navigating in the ACP -> POSTING -> Post settings -> Extension: `Store To Mega`

## Uninstall
1. Navigate in the ACP to `Customise -> Extension Management -> Extensions`.
2. Look for `Store To Mega` under the Enabled Extensions list, and click its `Disable` link.
3. To permanently uninstall, click `Delete Data` and then delete the `/ext/pikaron/storetomega` folder.

## License
[GNU General Public License v2](http://opensource.org/licenses/GPL-2.0)
