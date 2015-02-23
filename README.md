
# kmexport.php

Creates `.kmmacros` files for all of the following:

 1. Your entire Keyboard Maestro Collection `macros/Keyboard Maestro Macros.plist`
 2. Each Group within your collection `macros/groups/{{Group Name}}.plist`
 3. Each Macro within your groups `macros/groups/{{Group Name}}/{{Macro Name}}.plist`

## Usage

```sh
# download the repo
git clone https://github.com/chauncey-garrett/keyboard-maestro-export.git "Keyboard Maestro Macros" && cd "Keyboard Maestro Macros"

# get composer for dependancy management
curl -s http://getcomposer.org/installer | php

# install dependancies
php composer.phar install

# export the macros
./kmmexport.php
```

## Links

* [Keyboard Maestro](http://www.stairways.com/action/kmdiscount?REF4PDX)

* kmmexport tool based in-part on [michaelfox/keyboard-maestro-macros](https://github.com/michaelfox/keyboard-maestro-macros) which was based on doubledrones's ruby version [doubledrones/kmmexport](https://github.com/doubledrones/kmmexport).
