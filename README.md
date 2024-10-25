# DIVI Stubs

This package provides stub declarations for [DIVI](https://www.elegantthemes.com) core functions, classes, interfaces, and global variables.  These stubs can help plugin and theme developers leverage static analysis tools like [Psalm](https://getpsalm.org/) and plugins like Intellisense, Intelephense.

## Installation

Require this package as a dev-dependency with [Composer](https://getcomposer.org):

```
composer require --dev aarsteinmedia/divi-stubs
```

Alternatively, you may download `divi-stubs.php` directly.

## Usage with Psalm

Update your Psalm config to include the section:

```xml
<stubs>
    <file name="vendor/aarsteinmedia/divi-stubs/divi-stubs.php" />
</stubs>
```

Furthermore, ensure DIVI core code is _not_ included under `<projectFiles>`.

## Usage for Intellisense

If your editor has trouble parsing all of DIVI classes, functionc, etc, you may find the stubs useful for enabling code completion and related features.  For example, [here](https://github.com/bmewburn/vscode-intelephense/issues/113) are instructions for usage with VSCode's [Intelephense](https://marketplace.visualstudio.com/items?itemName=bmewburn.vscode-intelephense-client) extension. Or in a local workspace for intelephense create a ```.php``` file and add 
``{
    "intelephense.stubs": [
    "/vendor/aarsteinmedia/divi-stubs/divi-stubs.php"
  ]
}``

## Versioning

This package is versioned to match the DIVI version from which the stubs are generated.  If any fixes to stubs are required, subsequent releases will be versioned as `DIVI_VERSION.X`.

## Generating stubs for a different WordPress version

You should be running PHP 7.1 or later to follow these steps, so any function definitions that are polyfills for older versions of PHP are excluded from the stubs.  Additionally, the Stubs Generator package at least requires PHP 7.1.

1. Clone this repository and `cd` into it.
2. Download DIVI theme source from [Elegant Themes](https://www.elegantthemes.com) & place it inside this project.
3. Run `composer install`
4. Run `./generate.sh`

The `divi-stubs.php` file should now be updated.  Feel free to submit a Pull Request if you'd like to see a release for a newer version.  If things have fallen behind, please generate stubs for each missing version in a distinct commit so we can have a continuous release history.

### Credits

This package is highly dependent on GiacoCorsiglia's stub packages.

### License
[GPLv2](LICENSE)