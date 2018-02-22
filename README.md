# Timber Starter Theme

This theme uses Timber framework.
Also includes Gulp workflow, basic dotfiles, Foundation 6 and Timmy for advanced image manipulation.

## Working with the Theme

### Compatibility

One of the requirements for new versions of Timber (>1.3) is PHP7, so make sure your server is running PHP7 or higher.

In other cases, if you really need to support older PHP, change versions in `composer.json` and run `composer update`:

```
{
    "require": {
        "timber/timber": "1.2.*",
        "mindkomm/timmy": "0.10.*",
		"twig/twig": "1.*.*"
    }
}
```

### Installing

1. Download the zip for this theme (or clone it) and move it to `wp-content/themes` in your WordPress installation.
2. Rename the folder to something that makes sense for you website. It should be a short name with no spaces - underscores and hyphens are okay - and all lowercase.
3. Activate the theme in Appearance > Themes.
4. If you would see a notice that Timber needs to be downloaded: see step 3. in `To get started` section
5. Set a static home page in Settings > Reading and choosing "A Static Page". This will automatically act as your home page and will reference the `views/front-page.twig` template.
6. Make sure you have installed the plugin Advanced Custom Fields PRO or other CF plugin.

### Getting Started

You'll need:

* NPM or Yarn
* SASS
* Composer
* linters

To get started:

1. Clone this repo to your WordPress themes directory
2. Run `$ yarn install` or `$ npm install` to download dependencies
3. Run `$ composer install` to download Timber and Timmy
4. Adjust the Foundation variables file in `assets/scss/_settings.scss` to your needs
5. Set your localhost dev domain in `gulpfile.js` for BrowserSync to work
6. Select which Foundation js plugins and utils you wish to use in `gulpfile.js`

To generate assets:

* run the default gulp task (`gulp`) to generate development files. they are not prefixed or minified and contain source maps
* run `gulp build` to generate files used in production. minified, autoprefixed and everything
* development/production assets are loaded based on the `WP_DEBUG` constant defined in `wp-config.php`

## Structure

`assets/` contains static front-end files and images. In other words, your Sass files, JS files, SVGs, or any PNGs would live here.

`assets/images/icons` contains SVG icons

`acf-json/` contains JSON files for tracking Advanced Custom Fields. This is incredibly useful for version control. After cloning this repository, you can go into Custom Fields from the Dashboard and select "Sync" to import these custom fields into your theme.

`lib/` contains custom functionality and files for custom post type, taxonomies, widgets. These are added to WordPress inside functions.php and could be included there, but are separated into other files to keep functions.php a bit cleaner.

`views/` contains all of your Twig templates. These correspond 1 to 1 with the PHP files that make the data available to the Twig templates.

`views/partials` contains Twig components

Example:
`front-page.php` and `views/front-page.twig` are templates for a static home page should you choose to use one. This template will automatically be applied to that page whatever its name may be.

## Related docs

* http://timber.github.io/timber/
* https://twig.sensiolabs.org/doc/2.x/
* https://github.com/MINDKomm/timmy
