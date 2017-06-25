<table width="100%">
	<tr>
		<td align="left" width="75%">
			<strong>Scratch - A WordPress starter theme based upon scratch</strong>
		</td>
		<td rowspan="2" width="25%">
			<img src="https://wp-agency.co.uk/wp-content/uploads/2013/09/wpgreen1.png" width="175" />
		</td>
	</tr>
	<tr>
		<td>
			Dev Lead: Matt Peacock
		</td>
	</tr>
</table>

# Scratch #

This is a starter theme called `scratch` which is heavily based upon [_s by Automattic](https://github.com/Automattic/_s/). This is the starting point for all [WP Agency](https://wp-agency.co.uk/) development.

This is very much a starting point for all theme dev so its ultra minimal although it does include some additional things to _s to make it easier for you to develop sites.

* A just right amount of lean, well-commented, modern, HTML5 templates.
* A helpful 404 template.
* Custom namespacing to help prevent any possible code conflicts
* Custom template tags in `inc/templatetags/templatetags.php` that keep your templates clean and neat and prevent code duplication.
* Some small tweaks in `inc/templatefunctions/templatefunctions.php` that can improve your theming experience.
* A script at `js/navigation.js` that makes your menu a toggled dropdown on small screens (like your phone), ready for CSS artistry. It's enqueued in `inc/enqueueing/enqueueing.php`.
* 2 sample CSS layouts in `layouts/` for a sidebar on either side of your content.
* Sass all set up and ready to go, just use your favourite compiler and set it to compile to css/style.css as this is the enqueued stylesheet.
* scripts.js added to allow for custom javascript functions to be added into the site. Needs to be compiled into scripts-min.js as this is the enqueued js file.

Enjoy
