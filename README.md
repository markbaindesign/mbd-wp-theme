# Khyentse Vision

## By Bain Design

### Version: 1.3.1

## Table of contents

-  [Requirements](#requirements)
-  [Conventions](#conventions)
-  [Setup](#setup)
-  [Development](#development)

## Requirements

This project requires the following to run:

-  [Sass]
-  [Grunt]
-  [npm]

## Conventions

This project makes use of the following conventions

-  [Git Flow]
-  [Semantic Versioning]

## Setup

The following steps should be taken to install the project environment locally.

-  Open project directory in terminal and run `npm install` to install all grunt plugins. See `package.json` for details.
-  Install `git flow` locally to the project, using the following branch names:
   -  `master`
   -  `develop`
   -  `hotfix`
   -  `release`

You are now ready to work on the project.

## Development

When you want to make a change to the project code,

-  Start a new `feature` or `hotfix` branch (See [Git Flow])
-  In the project root folder, run the `grunt` command to

   -  open the local version of the site at http://localhost:3001/
   -  start the watch task, which will
      -  monitor the project files for changes, refreshing the local site as required
      -  compile changes to your [Sass] files into CSS

-  Make your changes to the code
-  When you are ready to create a numbered release,
   -  Start a new `release` branch (See [Git Flow] & [Semantic Versioning])
   -  Run `grunt bump:{major|minor|patch}`to increment the version number throughout the project (See [Semantic Versioning])
   -  Run `grunt build` to
      -  output production-ready build files to `/release`.

See `Gruntfile.js` for more details.

[npm]: https://www.npmjs.com/
[semantic versioning]: https://semver.org/
[git flow]: https://nvie.com/posts/a-successful-git-branching-model/
[sass]: https://sass-lang.com/
[grunt]: https://gruntjs.com/