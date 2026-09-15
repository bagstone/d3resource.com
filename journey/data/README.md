# Journey season data

Each `seasonNN.json` contains page-specific content. The shared PHP template and `journey.js` render it, so a new season does not require copying an `indexNN.php` file. `journeyRows` is a grid: each row has nine cells, and each non-empty cell has an editable `classes` category and `content`. `null` is an empty cell.

`schedule.json` contains the only volatile information, keyed by season number:

- `startDate`: launch date, in `YYYY-MM-DD`.
- `endDate`: set it to `null` until Blizzard announces it.
- `endTimeZone`: IANA zone for the single worldwide end instant. Use the zone
  Blizzard announces (currently `America/Los_Angeles` for 5 p.m. PDT/PST).
- The first tracker becomes visible on its start date. Each later tracker becomes visible the calendar day after the prior season ends, allowing its start countdown to appear.

During the seven days after `startDate`, the page says `STARTED`; afterwards it shows an end countdown only if `endDate` is known. Starts use one calendar date, converted to Blizzard's 5 p.m. local launch time for NA/Console, EU, and Asia (including DST). Ends use one countdown labelled “All regions/platforms”, calculated from the announced timezone rather than reinterpreted for every region.

`conquests` is split into Softcore and Hardcore groups, and `haedrigSets` is a seven-item list with optional official item URLs. Use `journey/?season=40` to review a prepared file. A season with no start date is prepared but not live.

For local date testing, copy `journey/.env.example` to `journey/.env` and add overrides such as `S39_END=2026-09-15` and `S40_START=2026-09-16`. The override file is ignored by Git. A blank `SNN_END=` simulates an unknown end date.

The standalone `/countdown/` page reads this same schedule and `.env` file.
Do not maintain dates separately for it.
