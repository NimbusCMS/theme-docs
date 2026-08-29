# Docs — a NimbusCMS theme

A fast documentation + marketing theme for [NimbusCMS](https://github.com/NimbusCMS/nimbus).
Plain PHP templates, **one hand-written stylesheet, zero JavaScript, system fonts** —
it lives the performance claim. Extracted from nimbuscms.dev. An official theme.

## Look

A centered reading column for prose and legal pages, a landing hero for the home
singleton, and a documentation surface with a grouped sidebar (`docnav`). Light and
dark both handled by the single stylesheet.

## Install

A theme is a directory. Drop it into your site's `themes/` folder as `docs/`:

```
git clone https://github.com/NimbusCMS/nimbus-theme-docs themes/docs
```

Then pick it in the admin (**Settings → Theme**), or set it in `config/theme.php`:

```php
<?php return 'docs';
```

## What it expects

- a **`home`** singleton for the landing page (`entry-home`);
- a **`pages`** collection for prose/legal pages (`entry`);
- optionally a **`docs`** collection for the documentation surface (`entry-docs`,
  `collection-docs`, and the `docs` nav sidebar). Pairs well with the official
  **Markdown** plugin for page bodies.

Drop the `docs` templates and the `nav` key from `theme.json` to run it as a plain
marketing + prose site.

## Structure

```
theme.json          # metadata + template map
templates/*.php     # layout, header, footer, entry-home, entry, entry-docs,
                    # collection-docs, docnav, markdown, 404
assets/app.css      # the one stylesheet, served at /theme/assets/app.css
```

MIT licensed.
