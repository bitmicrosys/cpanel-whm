## cPanel/WHM API PHP
Manage your WHM/cPanel server with this PHP library. Simple to use. With this PHP library, you can manage your cPanel/WHM server.

### Installation

You can install this library with composer.

```bash
composer require lightslab/cpanel-whm:dev-master
```

### Usage
```php
<?php
require "vendor/autoload.php";

//Build WHM Client
use LightsLab\cPanelWHM\WHM\Accounts;
use LightsLab\cPanelWHM\WHMClient;

require "vendor/autoload.php";
$whmClient = new WHMClient("WHM_USERNAME","API_TOKEN", "yourwhmserver.com", 2087);
$accounts = new Accounts($whmClient);

var_dump($accounts->searchAccounts());
```

#### WHM Client

To access and use WHM related functionality you must need to build WHM client with configuration
and credentials.

To configure your WHM client, you must provide your WHM username (you use to login into your WHM panel) and API Token. 

If you have an API token you can use that if proper permissions are configured, otherwise
you can create a new API token from your WHM.

Create API token from https://your-whm-server:2087/cpsessxxxxxx/scripts7/apitokens/home

Learn more about WHM API Token from [https://documentation.cpanel.net/display/64Docs/Manage+API+Tokens](https://documentation.cpanel.net/display/64Docs/Manage+API+Tokens)
```php
<?php
use LightsLab\cPanelWHM\WHMClient;
$whmClient = new WHMClient("WHM_USERNAME","API_TOKEN", "yourwhmserver.com", 2087);
```

### Available Functionality
- WHM
  - Accounts
    - searchAccounts (List of all accounts)
    - getDetails (Details of a specific account)
    - create (Create a new account)
    - availableFunctions (List of API functions available for current authenticated user)
    - userDomainDetails (Get a hosted domain details)
    - changeDiskSpaceQuota (Modify an user's disk space quota)
    - forcePasswordChange (Force user to change their password at their next login)
    - getDomains (List of domains exists in the server)
    - hasDigestAuth (Digest auth is enabled or disabled)
    - hasMyCnfInHomeDirectory (.my.cnf file exists in user's home directory or not)
    - limitBandwidth (Modify bandwidth limit)
    - getUsers (List of all users in server)
    - getLockedAccounts (List of all locked accounts)
    - getSuspendedAccounts (List of all suspended accounts)
    - createUserSession()
    - changePlan()    
