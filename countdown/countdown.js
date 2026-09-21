(function () {
  'use strict';
  function localTime(date, zone) {
    // `date` is the announced local calendar date for every region. Never
    // derive it by formatting a UTC timestamp: that can move it a day when a
    // browser's and a region's offsets are far apart.
    var values = date.split('-').map(Number);
    var guess = Date.UTC(values[0], values[1] - 1, values[2], 17, 0, 0);
    function offsetAt(utcMs) {
      var parts = new Intl.DateTimeFormat('en-US', { timeZone: zone, year: 'numeric', month: '2-digit', day: '2-digit', hour: '2-digit', minute: '2-digit', second: '2-digit', hourCycle: 'h23' }).formatToParts(new Date(utcMs));
      var local = {}; parts.forEach(function (part) { if (part.type !== 'literal') local[part.type] = Number(part.value); });
      return (Date.UTC(local.year, local.month - 1, local.day, local.hour, local.minute, local.second) - utcMs) / 60000;
    }
    var offset = offsetAt(guess);
    var target = guess - offset * 60000;
    var correctedOffset = offsetAt(target);
    return correctedOffset === offset ? target : guess - correctedOffset * 60000;
  }
  function format(ms) { if (ms <= 0) return 'NOW'; var s = Math.floor(ms / 1000); return Math.floor(s / 86400) + 'd ' + String(Math.floor(s % 86400 / 3600)).padStart(2, '0') + 'h ' + String(Math.floor(s % 3600 / 60)).padStart(2, '0') + 'm ' + String(s % 60).padStart(2, '0') + 's'; }
  function draw() { document.querySelectorAll('.timer').forEach(function (timer) { var target = localTime(timer.dataset.date, timer.dataset.zone); timer.textContent = format(target - Date.now()); }); }
  draw(); setInterval(draw, 1000);
}());
