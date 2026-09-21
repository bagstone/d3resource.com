/* Shared behaviour for every JSON season file. */
(function ($, season) {
  'use strict';
  var letters = 'abcdefghijkl';
  var criteria = [0, 9, 11, 11, 12, 10, 10, 8, 8, 6];
  var storagePrefix = 'journey-' + season.number + '-';
  function key(id) { return storagePrefix + id; }
  function set(id) { $('#' + id).addClass('done'); localStorage.setItem(key(id), 'done'); }
  function unset(id) { $('#' + id).removeClass('done'); localStorage.removeItem(key(id)); }
  function updateCompletion() {
    var current = 1;
    while (current < 10 && $('.sjitem.cat' + current + '.done').length === criteria[current]) current++;
    for (var i = 1; i < 10; i++) {
      $('#td-sj' + i + 'm, #complete' + i).removeClass('current complete');
      if (i < current) $('#td-sj' + i + 'm, #complete' + i).addClass('complete');
      if (i === current) $('#td-sj' + i + 'm, #complete' + i).addClass('current');
      $('#complete' + i).text(i < current ? 'Complete!' : i === current ? 'Current' : '');
    }
  }
  function formatCountdown(distance) {
    return Math.floor(distance / 86400000) + 'd ' + String(Math.floor(distance % 86400000 / 3600000)).padStart(2, '0') + 'h ' + String(Math.floor(distance % 3600000 / 60000)).padStart(2, '0') + 'm ' + String(Math.floor(distance % 60000 / 1000)).padStart(2, '0') + 's';
  }
  // Starts are simultaneous at 5 p.m. in each region's local time. One calendar
  // date is deliberately converted for each region, including its DST offset.
  function startCountdown(date, label) {
    if (!date) return;
    $('#countdowndiv').removeClass('hidden');
    $('#start-countdowns').removeClass('hidden');
    $('#end-countdown').addClass('hidden');
    var zones = { na: 'America/Los_Angeles', eu: 'Europe/Paris', asia: 'Asia/Seoul' };
    function draw() {
      var now = Date.now();
      $.each(zones, function (name, zone) {
        var distance = atLocalTimeInZone(date, zone) - now;
        $('#countdown_' + name).text(distance <= 0 ? label : formatCountdown(distance));
      });
    }
    draw(); setInterval(draw, 1000);
  }
  // As with launches, each region's season end is shown at 5 p.m. on the
  // announced calendar date in that region.
  function endCountdown(date) {
    if (!date) return;
    $('#countdowndiv').removeClass('hidden');
    $('#start-countdowns').addClass('hidden');
    $('#end-countdown').removeClass('hidden');
    var zones = { na: 'America/Los_Angeles', eu: 'Europe/Paris', asia: 'Asia/Seoul' };
    function draw() {
      var now = Date.now();
      $.each(zones, function (name, zone) {
        var distance = atLocalTimeInZone(date, zone) - now;
        $('#end_countdown_' + name).text(distance <= 0 ? 'ENDED' : formatCountdown(distance));
      });
    }
    draw(); setInterval(draw, 1000);
  }
  $(function () {
    if (window.journeySharedProgress) {
      $.each(window.journeySharedProgress.conquests, function (_, id) { $('#' + id).addClass('done'); });
      $.each(window.journeySharedProgress.items, function (_, id) { $('#' + id).addClass('done'); });
    }
    $.each(localStorage, function (storedKey, value) {
      if (storedKey.indexOf(storagePrefix) === 0 && value === 'done') $('#' + storedKey.slice(storagePrefix.length)).addClass('done');
    });
    updateCompletion();
    var now = Date.now();
    var startCountdownThrough = season.startDate && Date.parse(season.startDate + 'T00:00:00Z') + 7 * 86400000;
    if (startCountdownThrough && now <= startCountdownThrough) startCountdown(season.startDate, 'STARTED');
    else if (season.endDate) endCountdown(season.endDate);
    $('td.sjitem, td.conqitem').on('click', function () {
      var wasDone = $(this).hasClass('done');
      (wasDone ? unset : set)(this.id);
      if (!wasDone && $(this).hasClass('rift') && this.id.slice(-1) === 'a') {
        var column = Number(this.id.match(/td-sj(\d+)/)[1]);
        for (var riftColumn = 1; riftColumn < column; riftColumn++) set('td-sj' + riftColumn + 'a');
      }
      // Reaching artisan level 12 necessarily means all three artisans reached
      // their Chapter II level-10 milestones.
      if (!wasDone && this.id === 'td-sj2g') ['td-sj1h', 'td-sj1i', 'td-sj1j'].forEach(set);
      if (wasDone && $(this).hasClass('rift') && this.id.slice(-1) === 'a') {
        var clearedColumn = Number(this.id.match(/td-sj(\d+)/)[1]);
        for (var higherRiftColumn = clearedColumn + 1; higherRiftColumn <= 9; higherRiftColumn++) unset('td-sj' + higherRiftColumn + 'a');
      }
      if (wasDone && ['td-sj1h', 'td-sj1i', 'td-sj1j'].indexOf(this.id) !== -1) unset('td-sj2g');
      updateCompletion();
    });
    $('th.header').on('click', function () {
      var col = this.id.slice(3), complete = $('.sjitem.cat' + col + '.done').length === criteria[col];
      $('.sjitem.cat' + col).each(function () { (complete ? unset : set)(this.id); }); updateCompletion();
    });
    $('span.categories').on('click', function () { var id = this.id; $(this).toggleClass('selected'); $('td.sjitem.' + id).toggleClass('selected'); if (id === 'conquests') { $('#conqdiv').toggleClass('hidden'); $('td.conqitem').toggleClass('selected'); } });
    $('#resetdialog').dialog({ autoOpen:false, modal:true, buttons:{ Reset:function(){ $('.sjitem, .conqitem').each(function(){ unset(this.id); }); updateCompletion(); $(this).dialog('close'); }, Cancel:function(){ $(this).dialog('close'); } } });
    $('#resetall').on('click', function(){ $('#resetdialog').dialog('open'); });
    $('#sharedialog').dialog({ autoOpen:false, buttons:{ Close:function(){ $(this).dialog('close'); } } });
    $('#shareprogress').on('click', function(){ var link='http://d3resource.com/journey/share/'; $('.conqitem.done').each(function(){ link += this.id.slice(-1); }); link += '/'; $('.sjitem.done').each(function(){ link += this.id.slice(-2); }); $('#shareinput').val(link).select(); $('#sharedialog').dialog('open'); });
  });
}(jQuery, window.journeySeason));
