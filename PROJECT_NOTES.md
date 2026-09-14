# Project notes

This is a public, maintenance-focused record of the two September 2026 updates.
It deliberately contains implementation decisions only; do not add private
conversation content, credentials, or unpublished plans here.

## Seasons overview: responsive cards

The Seasons overview remains a full table on larger screens.  At widths below
`44rem`, it defaults to a single-season card, which is more readable than a
wide, horizontally compressed table.  Mobile visitors can switch between
**Cards** and the scrollable **Table**; that choice is stored in
`localStorage` as `seasonMobileView`.

The card view only offers seasons currently selected by the existing range and
Customize controls.  It includes Previous/Next controls and a season picker.
Keeping selection state shared means the range, table, cards, and Customize
dialog always describe the same set of seasons.

Relevant files:

- `seasons/index.php` — view-control and card containers.
- `seasons/seasons.js` — card rendering, navigation, shared visibility state,
  and persisted view preference.
- `seasons/main-style.css` — mobile breakpoint and card/table presentation.

## Journey tracker: data-driven seasons

`journey/index.php` is now one shared PHP template.  It discovers and renders
`journey/data/seasonNN.json` files rather than requiring a copied page per
season.  Season-specific content includes the chapters, journey grid,
conquests, rewards, Haedrig's Gift sets, and dates.

The tracker selects the newest season whose `visibleFrom` date has arrived.
`journey/?season=NN` intentionally overrides that choice for reviewing a
prepared season.  Per-season completion is stored separately in the browser
under the `journey-NN-` prefix, so progress from one season cannot affect
another.

`journey/journey.js` owns shared interactive behaviour: checklist state,
chapter completion, category highlighting, reset/share dialogs, and regional
countdowns.  Continue using the existing table IDs/classes in the JSON data;
they are the contract used by that script and the page styles.

The data format and seasonal hand-off procedure are documented in
`journey/data/README.md`.  In particular:

- Keep dates in `YYYY-MM-DD`; use `null` for an unknown end date.
- Set `visibleFrom` to the date the root tracker should change over (normally
  the day after the prior season ends).
- Use `journey/?season=NN` to check a future season before it becomes current.
- Preserve nine cells per `journeyRows` row; use `null` for an empty cell.

Initial migrated/prepared data files are `season39.json` through
`season42.json`.  Update the relevant JSON file when official season details
are announced; template edits should be unnecessary for ordinary season
content changes.
