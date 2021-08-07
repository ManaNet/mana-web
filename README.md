## :tada: Mana's Official Website
The official source code of the Mana Discord bot website, containing all its PHP source code, etc. There are many stuff here that are legacy, for example, the status page
and all those other pieces of junks which will be rewritten in the far future without the use of any single framework (probably Tailwind CSS), we were using a very old and
bulky static generator for the legacy ones with a little HTML edit which led to its huge filesize.

## :package: How to build?
To build this, all you need is to install Composer packagist and run the command:
```ssh
composer install
```

After which, Composer should download all the dependencies needed and the site should be ready to go with the exception of the NGINX configuration
and the other details like the .env file. For the NGINX configuration, all you need is to set the try files to point to router.php:
```nginx
try_files $url /router.php;
```

As for the .env:
```env
CONNECTION_ADDRESS=""
```

You may not be able to access the Connection Address as it is composed of several secrets (a subdomain, several secret paths and several extra paths).

## :wave: Contributing
To contribute, feel free to replace the PHP code inside the index.php for connection address to a placeholder, for example, replace all the instances of
the method calls that heads to the connection address to some kind of value like `72k users and 795 servers` and it should be running fine, please ensure
that those method calls are placed back once development is finished.
