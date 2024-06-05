![gatherpress-demo-data-playground](https://raw.githubusercontent.com/carstingaxion/gatherpress-demo-data/main/assets/gatherpress-demo-data-playground.png)


# What

This repo provides the latest version of [GatherPress](https://github.com/GatherPress/gatherpress/releases) as zip archive, to be used with different `blueprint.json` files to run WordPress playground instances for the following purposes:

- Install and activate GatherPress to be able [start creating demo-data](https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/carstingaxion/gatherpress-demo-data/main/gatherpress-blank-install-blueprint.json).
- Install and activate GatherPress and use the demo-data to *test the main branch of the plugin* during development. ([#8](https://github.com/carstingaxion/gatherpress-demo-data/issues/8))
- Install and activate GatherPress and use the demo-data to [showcase the plugin](https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/carstingaxion/gatherpress-demo-data/main/gatherpress-demo-blueprint.json).
- Install and activate GatherPress and use the demo-data to [showcase the plugin to editors](https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/carstingaxion/gatherpress-demo-data/main/gatherpress-editor-demo-blueprint.json).
- Install and activate GatherPress and use the demo-data to *showcase block-variation experiments*.

## How

- The `...-blueprint.json` files are made & validated using the playground-based [blueprint builder](https://playground.wordpress.net/builder/builder.html#{%22$schema%22:%22https://playground.wordpress.net/blueprint-schema.json%22,%22landingPage%22:%22https://playground.wordpress.net/events%22,%22preferredVersions%22:{%22php%22:%228.2%22,%22wp%22:%226.5%22},%22phpExtensionBundles%22:[%22kitchen-sink%22],%22features%22:{%22networking%22:true},%22steps%22:[{%22step%22:%22setSiteOptions%22,%22options%22:{%22blogname%22:%22GatherPress%22,%22blogdescription%22:%22Powering%20Communities%20with%20WordPress.%22,%22users_can_register%22:1}},{%22step%22:%22login%22,%22username%22:%22admin%22,%22password%22:%22password%22},{%22step%22:%22installPlugin%22,%22pluginZipFile%22:{%22resource%22:%22url%22,%22url%22:%22https://github-proxy.com/proxy/?repo=GatherPress/gatherpress&release=0.29.0%22},%22options%22:{%22activate%22:true}},{%22step%22:%22importFile%22,%22file%22:{%22resource%22:%22url%22,%22url%22:%22https://raw.githubusercontent.com/carstingaxion/gatherpress-demo-data/main/GatherPress-demo-data-2024.xml%22}}]})

   ![gatherpress-demo-data-playground-builder](https://raw.githubusercontent.com/carstingaxion/gatherpress-demo-data/main/assets/gatherpress-demo-data-playground-builder.png)
- **Images can only be referenced by URL**, that's why I added them to this repo and used the `raw.githubusercontent.com`-URLs [within WordPress](https://github.com/carstingaxion/gatherpress-demo-data/issues/4#issuecomment-2083850813).
- The exported demo-data is **cleaned up manually** from all default contents, that got added during the default WordPress installation *(inside the WordPress playground)*.
- The exported & cleaned up demo-data [needs to be uploaded](https://github.com/carstingaxion/gatherpress-demo-data/compare) to this repository, maybe as new one or as replacement for an existing demo-data set.

# Why

I was not able to run a WordPress playground using any of the existing URLs of zipped plugin versions.

While the playground docs suggest to use raw.githubusercontent.com for CORS reasons, I was not able to find a working, *non 404*, URL structure.

I tried and failed, with:

- https://raw.githubusercontent.com/GatherPress/gatherpress/archive/refs/tags/0.28.0.zip
- https://raw.githubusercontent.com/GatherPress/gatherpress/releases/download/0.28.0/gatherpress.zip

So I created [this repo](https://github.com/carstingaxion/gatherpress-demo-data), which houses the zip file of the current version of *GatherPress*, as well as the `blueprint.json` files to create demo-data and to run a demo using that data.

# Ressources

- [Introduction to Playground: running WordPress in the browser](https://developer.wordpress.org/news/2024/04/05/introduction-to-playground-running-wordpress-in-the-browser/) – WordPress Developer Blog
- [Load Blueprint from a URL](https://wordpress.github.io/wordpress-playground/blueprints-api/using-blueprints/#load-blueprint-from-a-url) - Using Blueprints | WordPress Playground
- [Blueprint builder](https://playground.wordpress.net/builder/builder.html)
- [WordPress Playground demos](https://playground.wordpress.net/demos/index.html)
- [Blueprint examples](https://github.com/WordPress/wordpress-playground/wiki/Blueprint-examples) - WordPress/wordpress-playground Wiki
- [How to add demo content in WordPress](https://learn.wordpress.org/lesson-plan/how-to-add-demo-content-in-wordpress/) - Learn WordPress
