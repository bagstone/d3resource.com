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
  function localTime(date, zone) { return atLocalTimeInZone(date, zone); }
  function startCountdown(date, label) {
    if (!date) return;
    $('#countdowndiv').removeClass('hidden');
    var zones = { na: 'America/Los_Angeles', eu: 'Europe/Paris', asia: 'Asia/Seoul' };
    function draw() {
      var now = Date.now();
      $.each(zones, function (name, zone) {
        var distance = localTime(date, zone) - now;
        $('#countdown_' + name).text(distance <= 0 ? label : Math.floor(distance / 86400000) + 'd ' + String(Math.floor(distance % 86400000 / 3600000)).padStart(2, '0') + 'h ' + String(Math.floor(distance % 3600000 / 60000)).padStart(2, '0') + 'm ' + String(Math.floor(distance % 60000 / 1000)).padStart(2, '0') + 's');
      });
    }
    draw(); setInterval(draw, 1000);
  }
  $(function () {
    $.each(localStorage, function (storedKey, value) {
      if (storedKey.indexOf(storagePrefix) === 0 && value === 'done') $('#' + storedKey.slice(storagePrefix.length)).addClass('done');
    });
    updateCompletion();
    var today = new Date().toISOString().slice(0, 10);
    var startedThrough = new Date(new Date(season.startDate + 'T00:00:00Z').getTime() + 7 * 86400000).toISOString().slice(0, 10);
    if (today < season.startDate) startCountdown(season.startDate, 'STARTED');
    else if (today <= startedThrough) startCountdown(season.startDate, 'STARTED');
    else if (season.endDate && today <= season.endDate) startCountdown(season.endDate, 'ENDED');
    $('td.sjitem, td.conqitem').on('click', function () { ($(this).hasClass('done') ? unset : set)(this.id); updateCompletion(); });
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
