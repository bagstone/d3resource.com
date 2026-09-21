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
conquests, rewards, and Haedrig's Gift sets. Dates live separately in
`journey/data/schedule.json`.

The tracker selects the newest season whose preceding season has ended (the
first tracker appears on its own start date).
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

- Keep schedule dates in `YYYY-MM-DD`; use `null` for an unknown end date.
- Local `journey/.env` overrides, copied from `.env.example`, can simulate
  date transitions without changing committed data.
- Use `journey/?season=NN` to check a future season before it becomes current.
- Preserve nine cells per `journeyRows` row; use `null` for an empty cell.

Initial migrated/prepared data files are `season39.json` through
`season42.json`. Update `schedule.json` when official season dates are
announced; template edits should be unnecessary for ordinary season content
changes.

## Season countdown

`/countdown/` is a deliberately standalone, header/footer-free answer to
“when does the current Diablo 3 season end / the next one start?”. It reads
the same `journey/data/schedule.json` and local `journey/.env` overrides as
the Journey tracker, so announcing a date only requires the normal schedule
or environment update. It does not need a separate source of truth.

When an end or start date is announced, it shows separate Console, NA, EU,
and Asia timers; each is calculated as 5 p.m. on that calendar date in the
region’s local timezone. The end timers include a disclaimer that Blizzard's
posts have not made clear whether endings are regional or simultaneous at the
Americas time. The page intentionally uses
the Journey stylesheet for the established site appearance, plus
`countdown/countdown.css` for the centered card layout.

If the current end date is unannounced, the page says so, links the 79–121
day maintenance-era range to the Seasons overview, and provides conservative
estimated dates. The estimate bands are 86/93 days from launch through day
72, 93/100 from day 73 through 84, and 114/121 from day 85 onward.

Each known timer has a minimal stream-overlay endpoint containing only that
timer:

- `/countdown/end/`
- `/countdown/end-console/`
- `/countdown/end-na/`
- `/countdown/end-eu/`
- `/countdown/end-asia/`
- `/countdown/start-console/`
- `/countdown/start-na/`
- `/countdown/start-eu/`
- `/countdown/start-asia/` (with `/countdown/start/asia/` as an alias)

The root `.htaccess` contains temporary (`302`) redirect aliases for
`/next-season`, `/season-end`, `/when-is-next-season`, and
`/is-season-over-yet`, all pointing to `/countdown/`. Change them to `301`
only when the aliases and destination are settled, because browsers cache
permanent redirects aggressively.
