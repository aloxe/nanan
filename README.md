# nanan
Update your website directly from the page people see.

This tool is targeted at small websites whose owners don't want to bother with technical stuff but still want to update their pages. Only specific text on existing pages can be updated with a few formatting options.

No database,
no back-end,
no programming language,
no heavy nonsense.

#Install

* Make a nice site
* copy `ecrire` folder to the root of your website
* create `memoire` folder and make it writable
* in your pages:
   * add the class names `"content-NAME mutant"` to the blocks you want to make editable (`NAME` as you want)
   * add the line `<?php include ("ecrire/papier.php"); ?>` just under the `<body>` tag of the page
* voilà

#Use

* Go to page url with `?login`
* Login
* Edit
* Save
