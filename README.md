# MBD WP Theme website

## By Mark Bain Design

### Version: 2.2.0

## Table of contents

- [Requirements](#requirements)
- [Convertions](#conventions)
- [Setup](#setup)
- [Development](#development)
- [Deployment](#deployment)

## Requirements

This project requires the following to run:

- Sass
- Grunt
- [NPM]

[Go back to the top](#table-of-contents)

## Conventions

This project makes use of the following conventions

- Git Flow development flow
- Semantic versioning

[Go back to the top](#table-of-contents)

## Setup

The following steps should be taken to install the project environment locally.

- Open project directory in terminal and run `npm install` to install all grunt plugins. See `package.json`for details. 
- Run `bower install` to download Bower components (and their dependencies) to `/bower_components`. See `bower.json`for details.
- Run `grunt copyassets`to copy assets from `/bower_components`to the appropriate theme directory. See `Gruntfile.js`for details.

You are now ready to work on the project. 

[Go back to the top](#table-of-contents)

## Development

The development process makes use of the Grunt taskrunner.

- Run `grunt` to compile your Sass and run the watch task. See `Gruntfile.js`for details.
- Run `grunt build` to output build files to `/release`. See `Gruntfile.js`for details.

[Go back to the top](#table-of-contents)

## Deployment

For maximum flexibility, this project outputs build files as an archive, ready to upload to any server. 

### Creating a release

- Follow the Git Flow process for creating a release branch
- Releases are versioned following [Semantic Versioning]

#### Versioning

- Run `grunt bump:{major|minor|patch}`to increment the version number in `package.json`, 
- Run `grunt version`to copy the new version number to additional relevant project files:
	- `README.md`
	- `sass/styles.scss`
	- `{custom_theme}/style.css`
	- `bower.json`
	- `{custom_plugin/custom_plugin.php}`


### Deployment Scripts


This project comes with a set of shell scripts to aid with deployment, [MBD WP Deploy Scripts]. These scripts can either be run manually, or via grunt tasks.

- For configuration instructions, see [MBD WP Deploy Scripts README.md].
- Run `grunt import`to run the import script and install the archive currently in `/import`to your local environment.
- Run `grunt export`to run the export script which creates an archive of your local install in `/export`, ready to upload to your remote environment (staging/production).
- For server-side instructions, see [MBD WP Deploy Scripts README.md]

### Replacing URLs

Once you have run the import script, you need to change all the URLs in the database. I suggest using [interconnectit/Search-Replace-DB]. 

[Go back to the top](#table-of-contents)

[Interconnectit/Search-Replace-DB]: https://github.com/interconnectit/Search-Replace-DB
[MBD WP Deploy Scripts]: https://github.com/markbaindesign/mbd-wp-deploy-scripts
[MBD WP Deploy Scripts README.md]: https://github.com/markbaindesign/mbd-wp-deploy-scripts/blob/master/scripts/README.md
[NPM]: https://www.npmjs.com/
[Semantic Versioning]: #