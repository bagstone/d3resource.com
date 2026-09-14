# Journey season data

Each `seasonNN.json` is the complete page-specific content. The shared PHP template and `journey.js` render it, so a new season does not require copying an `indexNN.php` file. `journeyRows` is a grid: each row has nine cells, and each non-empty cell has an editable `classes` category and `content`. `null` is an empty cell.

Required schedule fields:

- `startDate`: launch date, in `YYYY-MM-DD`.
- `endDate`: set it to `null` until Blizzard announces it.
- `visibleFrom`: usually the calendar day after the previous season ends. This is when the root tracker changes to this file, allowing its start countdown to appear.

During the seven days after `startDate`, the page says `STARTED`; afterwards it shows an end countdown only if `endDate` is known. The countdown uses Blizzard's 5 p.m. local launch time for NA/Console, EU, and Asia.

`conquests` is split into Softcore and Hardcore groups, and `haedrigSets` is a seven-item list with optional official item URLs. Use `journey/?season=40` to review a prepared file. A season whose `visibleFrom` is `null` is a prepared, non-live file; fill its three schedule fields when dates are announced.
