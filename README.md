<p align="center">
  <img src="media/bitmap/silverware-logo.png" width="200" height="200" title="SilverWare" alt="SilverWare">
</p>

# SilverWare Application

[![Latest Stable Version](https://poser.pugx.org/silverware/app/v/stable)](https://packagist.org/packages/silverware/app)
[![Latest Unstable Version](https://poser.pugx.org/silverware/app/v/unstable)](https://packagist.org/packages/silverware/app)
[![License](https://poser.pugx.org/silverware/app/license)](https://packagist.org/packages/silverware/app)

SilverWare is a component framework built upon SilverStripe. This repository sets up a new
application environment, downloading everything needed to get underway. Files are also included for
easy application deployment using [Deployer][deployer].

## Contents

- [Requirements](#requirements)
- [Installation](#installation)
- [Configuration](#configuration)
- [Issues](#issues)
- [To-Do](#to-do)
- [Contribution](#contribution)
- [Attribution](#attribution)
- [Maintainers](#maintainers)
- [License](#license)

## Requirements

- [SilverStripe Framework v4][silverstripe-framework]
- [SilverStripe CMS v4][silverstripe-cms]
- [SilverWare][silverware]
- [SilverWare Theme][silverware-theme]

## Installation

Installation is via [Composer][composer]:

```
composer create-project silverware/app /path/to/app
```

After Composer finishes creating the project folder, SilverWare will ask a series of questions via
the console to configure your installation.

## Configuration

Configuration is via YAML files. Upon build, your SilverWare application uses a series of YAML fixture
files to create database objects. Please browse the `fixtures` folder to see what is created by default.

You can inform SilverWare when it is appropriate to build objects from fixtures using configuration:

```yaml
SilverWare\Core\App:
  load_fixtures: true
  load_fixtures_once: false
```

Using SilverStripe's environment-specific configuration, you can configure whether or not SilverWare
should build from fixture files, and whether or not SilverWare should build only once, or upon each build.

These settings are particularly useful for application deployment.

## Issues

Please use the [GitHub issue tracker][issues] for bug reports and feature requests.

## To-Do

- Tests

## Contribution

Your contributions are gladly welcomed to help make this project better.
Please see [contributing](CONTRIBUTING.md) for more information.

## Attribution

- Logo icon designed by [Freepik](http://www.freepik.com) from [www.flaticon.com](http://www.flaticon.com)
  and released under a [Creative Commons BY 3.0](https://creativecommons.org/licenses/by/3.0) license.
- includes configuration for [Deployer][deployer], a most excellent PHP application deployment tool by
  [@antonmedv](https://github.com/antonmedv)

## Maintainers

[![Colin Tucker](https://avatars3.githubusercontent.com/u/1853705?s=144)](https://github.com/colintucker) | [![Praxis Interactive](https://avatars2.githubusercontent.com/u/1782612?s=144)](http://www.praxis.net.au)
---|---
[Colin Tucker](https://github.com/colintucker) | [Praxis Interactive](http://www.praxis.net.au)

## License

[BSD-3-Clause](LICENSE.md) &copy; Praxis Interactive

[silverware]: https://github.com/praxisnetau/silverware
[silverware-theme]: https://github.com/praxisnetau/silverware-theme
[composer]: https://getcomposer.org
[silverstripe-framework]: https://github.com/silverstripe/silverstripe-framework
[silverstripe-cms]: https://github.com/silverstripe/silverstripe-cms
[issues]: https://github.com/praxisnetau/silverware-app/issues
[deployer]: https://github.com/deployphp/deployer
