# What

This repo provides the latest version of GatherPress as zip archive, to be used with two different blueprint.json files to run WordPress playground instances for the following purposes:

1. Install and activate GatherPress to be able start creating demo-data.
2. Install and activate GatherPress and import the created demo-data to showcase the plugin.

# Why

I was not able to run a WordPress playground using any of the existing URLs of zipped plugin versions.

While the playground docs suggest to use raw.githubusercontent.com for such purposes, I was not able to find a working, not 404, URL structure.
I tried :

- https://raw.githubusercontent.com/GatherPress/gatherpress/archive/refs/tags/0.28.0.zip
- https://raw.githubusercontent.com/GatherPress/gatherpress/releases/download/0.28.0/gatherpress.zip

So I created that repo, which houses the zip file of the current version og GatherPress, as well as the blueprint.json files to create demo-data and tu run a demo using that data.
