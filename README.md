
# About

Creates `.kmmacros` files for all of the following: 

 1. Your entire Keyboard Maestro Collection `macros/Keyboard Maestro Macros.plist`
 2. Each Group within your collection `macros/groups/{{Group Name}}.plist`
 3. Each Macro within your groups `macros/groups/{{Group Name}}/{{Macro Name}}.plist`

## How to use it

	git clone https://github.com/michaelfox/keyboard-maestro-macros.git
	cd keyboard-maestro-macros
	./kmmexport

## Links

* [KeyboardMaestro](http://www.keyboardmaestro.com)

* kmmexport tool based on [doubledrones's ruby version](https://github.com/doubledrones/kmmexport)