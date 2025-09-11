function loadSettings() {
	$.each(localStorage, function(key, value){
		$('td#'+key).addClass(value);
	})
};

// set conqitem
function setConq(i) {
	if(!$('#conq'+i).hasClass('done')) {
		$('#conq-'+i).addClass('done');
		localStorage.setItem('conq-'+i, 'done');
	}
}

// unset conqitem
function unsetConq(i) {
	if($('#conq-'+i).hasClass('done')) {
		$('#conq-'+i).removeClass('done');
		localStorage.setItem('conq-'+i, 'not');
	}
}

// set sjitem
function setSJ(i, j) {
	if(!$('#td-sj'+i+''+j).hasClass('done')) {
		$('#td-sj'+i+''+j).addClass('done');
		localStorage.setItem('td-sj'+i+j, 'done');
	}
}

// unset sjitem
function unsetSJ(i, j) {
	if($('#td-sj'+i+''+j).hasClass('done')) {
		$('#td-sj'+i+''+j).removeClass('done');
		localStorage.setItem('td-sj'+i+j, 'not');
	}
}

function resetAll() {
	var abc = "abcdefghijklmnopqrstuvwxyz";
	for(i=0; i<10; i++) {
		unsetConq(abc.charAt(i));
	}
	for(i=1; i<=9; i++) {
		for(j=0; j<12; j++) {
			unsetSJ(i, abc.charAt(j));
		}
	}
}

// check completed chapters
function checkComplete() {
	var criterion = [0, 9, 11, 11, 12, 10, 10, 8, 8, 6];
	var current = 1;
	while($('td.sjitem.done.cat'+current).length == criterion[current]) {
		$('#td-sj'+current+'m, #complete'+current).removeClass('current');
		$('#td-sj'+current+'m, #complete'+current).addClass('complete');
		$('#complete'+current).html('Complete!');
		current++;
	}
	
	// mark the current
	if(current<10) {
		$('#td-sj'+current+'m, #complete'+current).addClass('current');
		$('#complete'+current).html('Current');
	}
	
	// mark all above as incomplete
	for(i=current+1; i < 10; i++) {
		$('#td-sj'+i+'m, #complete'+i).removeClass('current');
		$('#td-sj'+i+'m, #complete'+i).removeClass('complete');
		$('#complete'+i).html('');
	}
}

// Convert "YYYY-MM-DD 17:00:00" in a given IANA time zone to a UTC epoch ms.
// Works without libraries and handles DST correctly.
function atLocalTimeInZone(isoDate, timeZone, hour = 17, minute = 0, second = 0) {
  const [y, m, d] = isoDate.split('-').map(Number);
  const utcGuess = Date.UTC(y, m - 1, d, hour, minute, second, 0);

  // Get the zone offset (in minutes) at a given UTC ms using Intl
  const offsetAt = (utcMs) => {
    const dtf = new Intl.DateTimeFormat('en-US', {
      timeZone,
      year: 'numeric', month: '2-digit', day: '2-digit',
      hour: '2-digit', minute: '2-digit', second: '2-digit',
      hour12: false
    });
    const parts = dtf.formatToParts(new Date(utcMs));
    const vals = {};
    for (const p of parts) if (p.type !== 'literal') vals[p.type] = Number(p.value);
    // Local (in the zone) components interpreted as UTC gives us the offset
    const asUTC = Date.UTC(vals.year, vals.month - 1, vals.day, vals.hour, vals.minute, vals.second);
    return (asUTC - utcMs) / 60000; // minutes east of UTC (e.g., Paris summer = 120)
  };

  // First pass
  let offset = offsetAt(utcGuess);
  let utc = utcGuess - offset * 60000;

  // One correction pass in case DST boundary shifts the offset
  const offset2 = offsetAt(utc);
  if (offset2 !== offset) {
    utc = utcGuess - offset2 * 60000;
  }
  return utc; // epoch ms
}
