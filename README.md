FooPlugin
=========

Jumping off point for CraftCMS plugin. Has a lot of the necessary files without too much bloat.

What's it do
------------

Takes a segment from the action controller and displays it in the browser. Anonomous users allowed.
Also makes a call to the FooService and outputs a property from the returned data in the template.

What's it for
------------

Copying and re-purposing into an actual, usable plugin


Instructions
------------

- Upload to craft/plugins/
- Open Craft
- Install plugin
- Go to /actions/foo/text/{something}
- Web browser will display {something}

Future
------------

Build a plugin builder script that pumps out the base files with the necessary prefixes.
