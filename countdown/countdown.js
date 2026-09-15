(function () {
  'use strict';
  function localTime(date, zone) {
    // Seasons start at 5 p.m. in each region, matching the Journey countdown.
    var parts = new Intl.DateTimeFormat('en-CA', { timeZone: zone, year: 'numeric', month: '2-digit', day: '2-digit', hour: '2-digit', minute: '2-digit', second: '2-digit', hourCycle: 'h23' }).formatToParts(new Date(date + 'T12:00:00Z'));
    var values = {}; parts.forEach(function (part) { values[part.type] = part.value; });
    var guess = Date.UTC(values.year, values.month - 1, values.day, 17, 0, 0);
    var rendered = new Intl.DateTimeFormat('en-US', { timeZone: zone, hour: 'numeric', hourCycle: 'h23' }).format(new Date(guess));
    return guess + (17 - Number(rendered)) * 3600000;
  }
  function endTime(date, zone) { return localTime(date, zone); }
  function format(ms) { if (ms <= 0) return 'NOW'; var s = Math.floor(ms / 1000); return Math.floor(s / 86400) + 'd ' + String(Math.floor(s % 86400 / 3600)).padStart(2, '0') + 'h ' + String(Math.floor(s % 3600 / 60)).padStart(2, '0') + 'm ' + String(s % 60).padStart(2, '0') + 's'; }
  function draw() { document.querySelectorAll('.timer').forEach(function (timer) { var target = timer.dataset.kind === 'end' ? endTime(timer.dataset.date, timer.dataset.zone) : localTime(timer.dataset.date, timer.dataset.zone); timer.textContent = format(target - Date.now()); }); }
  draw(); setInterval(draw, 1000);
}());
