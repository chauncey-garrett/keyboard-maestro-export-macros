# Keyboard Maestro Macro Export

This macro set does two things well:

1. Easily export all your macros with kmexport.php.
2. Export macro groups **with images** using the [export macros](#export-macros)

## <a name="kmmexport"></a> [kmexport.php](/kmmexport.php)

Creates `.kmmacros` files for all of the following:

 - Your entire Keyboard Maestro Collection `macros/Keyboard Maestro Macros.plist`
 - Each Group within your collection `macros/groups/{{Group Name}}.plist`
 - Each Macro within your groups `macros/groups/{{Group Name}}/{{Macro Name}}.plist`

### Using [kmexport.php](/kmmexport.php)

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

## <a name="export-macros"></a>Exporting macros to a Markdown file with images

I wish this was built into [Keyboard Maestro](http://www.stairways.com/action/kmdiscount?REF4PDX) but here is a way to easily generate a formatted list, with images, of a macro group you wish to share with others (especially for somewhere like Github).

- Setup [kmmexport.php](/kmmexport.php), as [above](#kmmexport).
- Add the [macro group](/• Keyboard Maestro - Export macros.kmmacros) to Keyboard Maestro.
- Set the variables in [• Keyboard Maestro _ Export macro - set variables](/• Keyboard Maestro - Export macros/Keyboard Maestro _ Export macro - set variables.kmmacros) to your liking.
- **Change the repeat action *n* times in [Keyboard Maestro | Export macro group with image](/• Keyboard Maestro - Export macros/Keyboard Maestro | Export macro group with image.kmmacros) to the number of macros in the group you wish to export.**
- Execute [Keyboard Maestro | Export macro group with image](/• Keyboard Maestro - Export macros/Keyboard Maestro | Export macro group with image.kmmacros).
- Cleanup the markdown file to your liking. In particular, ensure no newlines (\n) were added at the end of the filenames. If you find this happens often, you may need to increase the pauses within the macros, as the previous steps are dependent on processing power.
- Share!

### What you get:

- A markdown file of the macros, with images. See [• Keyboard Maestro _ Export macro](/• Keyboard Maestro - Export macros.md) for an example.
- The entire group of macros in one `kmmacros` file.
- Each individual `kmmacros` file.

## Like it?

**[Get a discount on Keyboard Maestro](http://www.stairways.com/action/kmdiscount?REF4PDX).**

If you have feature suggestions, please open an [issue](https://github.com/chauncey-garrett/keyboard-maestro-export/issues "chauncey-garrett/keyboard-maestro-export/issues"). If you have contributions, open a [pull request](https://github.com/chauncey-garrett/keyboard-maestro-export/pulls "chauncey-garrett/keyboard-maestro-export/pulls"). I'd love to make this project as reliable and efficent as is possible.

## Author(s)


*The author(s) of this module should be contacted via the [issue tracker](https://github.com/chauncey-garrett/keyboard-maestro-export/issues "chauncey-garrett/keyboard-maestro-export/issues").*

  - [Chauncey Garrett](https://github.com/chauncey-garrett "chauncey-garrett")
  - [Michael Fox](https://github.com/michaelfox "michaelfox") for [kmmexport.php](/kmmexport.php), which is based in-part on [michaelfox/keyboard-maestro-macros](https://github.com/michaelfox/keyboard-maestro-macros) and inspired by doubledrones's ruby version [doubledrones/kmmexport](https://github.com/doubledrones/kmmexport).

[![](/img/tip.gif)](http://chauncey.io/reader-support/)
