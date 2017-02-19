Static framework using PHP
==================

With all those fancy Front-End development frameworks, sometimes you just need to use PHP to build your static website.

> **Note:**

> The code is derived from [PIP](http://gilbitron.github.io/PIP/).

## Docker

I've added Docker for anybody who uses it, for further improvement please refer to their [documents](https://www.docker.com/).


```sh
// Build Docker
$ docker build -t mysite .
```

> **Note:**

> Some paths are not rewritable on mac, for further information consult the Docker's documentation.

```sh
// Create server
$ docker run -p 8888:80 -d -v /Users/rahmathidayat/Documents/Kerja/2017/phpstatic/www:/var/www/site mysite
```

```sh
// Stop and destroy Docker
$ docker stop $(docker ps -a -q) && docker rm $(docker ps -a -q)
```

## Documentation

> **Note:**

> The documentation will describe some of the modifications that I have done, for other details please refer to the [PIP's documentation](http://gilbitron.github.io/PIP/).

### Controllers

By default, will not be dependent on the path's name anymore, all views are centralized to [one master controller](https://github.com/bebensiganteng/PHP-Static-Framework/blob/master/www/application/controllers/page.php).

### Views

As explained above, the Controller doesn't need any change; to add a view just add a new file.

Each View will extract the file name and use it as a unique $pageID, this unique name can be assigned as Javascript and/or CSS names, such as below;

```html
<!-- CSS -->
<link rel="stylesheet" href="<?php echo BASE_URL; ?>static/css/<?php echo $pageID ?>.css" type="text/css" media="screen" />

<!-- JS -->
<script src="<?php echo BASE_URL; ?>static/js/<?php echo $pageID ?>"></script>
```

For subpaths, such as;

```sh
/views/post/item00.php
```

You need the format below;

```html
<?php

    // ticker is used to prevent controller.php from calling the include directive
    if(!isset($ticker)) include(APP_DIR .'views/header.php');

?>

// Add your content here.

<?php

    // ticker is used to prevent controller.php from calling the include directive
    if(!isset($ticker)) {

        include(APP_DIR .'views/footer.php');

    }
?>

```
> **Note:**
 
> Subpaths that is more than 1 level deep has not been tested.

If a library of Javascript files are needed for each View, those can be customized through the [config.php](https://github.com/bebensiganteng/PHP-Static-Framework/blob/master/www/application/config/config.php).

```php

// Add your vendors here.
$common_vendor = ["jquery.min.js", "TweenMax.min.js"];

if($config['debug']) {

   // Add additional script here
  // array_push($common_vendor, "dat.gui.js");

}

$config['vendor'] = $common_vendor;

```
