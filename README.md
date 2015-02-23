# Keyboard Maestro Macro Export

## kmexport.php

Creates `.kmmacros` files for all of the following:

 1. Your entire Keyboard Maestro Collection `macros/Keyboard Maestro Macros.plist`
 2. Each Group within your collection `macros/groups/{{Group Name}}.plist`
 3. Each Macro within your groups `macros/groups/{{Group Name}}/{{Macro Name}}.plist`

## Usage

Clone the repo:

```sh
git clone https://github.com/chauncey-garrett/keyboard-maestro-export-macros.git "Keyboard Maestro Macros" && cd "Keyboard Maestro Macros"
```

Get Composer for dependency management:

```sh
curl -s http://getcomposer.org/installer | php
```

Install dependencies:

```sh
php composer.phar install
```

Export the macros:

```sh
./kmmexport.php
```

## Like it?

If you have feature suggestions, please open an [issue](https://github.com/chauncey-garrett/keyboard-maestro-export/issues "chauncey-garrett/keyboard-maestro-export/issues"). If you have contributions, open a [pull request](https://github.com/chauncey-garrett/keyboard-maestro-export/pulls "chauncey-garrett/keyboard-maestro-export/pulls"). I'd love to make this project as reliable and efficent as is possible.

## Author(s)

* [Keyboard Maestro](http://www.stairways.com/action/kmdiscount?REF4PDX)

* kmmexport tool based in-part on [michaelfox/keyboard-maestro-macros](https://github.com/michaelfox/keyboard-maestro-macros) which was based on doubledrones's ruby version [doubledrones/kmmexport](https://github.com/doubledrones/kmmexport).

*The author(s) of this module should be contacted via the [issue tracker](https://github.com/chauncey-garrett/keyboard-maestro-export/issues "chauncey-garrett/keyboard-maestro-export/issues").*

  - [Chauncey Garrett](https://github.com/chauncey-garrett "chauncey-garrett")
  - [Michael Fox](https://github.com/michaelfox "michaelfox")

[![](/img/tip.gif)](http://chauncey.io/reader-support/)
