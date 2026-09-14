const seasonRanges = Array.from({ length: Math.ceil(seasons.length / 10) }, (_, index) =>
  seasons.slice(index * 10, index * 10 + 10),
);

function seasonKey(number) {
  return `s${String(number).padStart(2, '0')}`;
}

function setSeasonVisibility(number, visible) {
  const key = seasonKey(number);
  const hidden = !visible;

  document.querySelectorAll(`.col-${key}`).forEach((cell) => {
    cell.classList.toggle('hidden', hidden);
  });

  const button = document.getElementById(key);
  button.classList.toggle('yes', visible);
  button.classList.toggle('no', hidden);
  button.setAttribute('aria-pressed', String(visible));
  localStorage.setItem(key, visible ? 'yes' : 'no');
}

function showRange(range) {
  const rangeNumbers = new Set(range.map((season) => season.number));
  seasons.forEach((season) => setSeasonVisibility(season.number, rangeNumbers.has(season.number)));

  document.querySelectorAll('.range-button').forEach((button) => {
    button.classList.toggle('active', button.dataset.range === range[0].number.toString());
  });
}

function renderTable() {
  const table = document.createElement('table');
  table.className = 'difftable';
  const header = table.insertRow();

  const addCell = (row, className, html) => {
    const cell = row.insertCell();
    cell.className = className;
    cell.innerHTML = html;
  };

  addCell(header, 'difftable top left', 'Season');
  seasons.forEach((season) => {
    addCell(header, `difftable top diff col-${seasonKey(season.number)}`, `Season ${season.number}`);
  });
  addCell(header, 'difftable top right', 'Season');

  seasonFields.forEach((field) => {
    const row = table.insertRow();
    addCell(row, 'difftable left', field.label);
    seasons.forEach((season) => {
      addCell(row, `difftable col-${seasonKey(season.number)}`, season.values[field.key] || '—');
    });
    addCell(row, 'difftable right', field.label);
  });

  document.getElementById('tablediv').replaceChildren(table);
}

function renderRangeControls() {
  const controls = document.getElementById('range-controls');
  seasonRanges.forEach((range) => {
    const button = document.createElement('button');
    button.type = 'button';
    button.className = 'range-button';
    button.dataset.range = range[0].number;
    button.textContent = `Seasons ${range[0].number}–${range[range.length - 1].number}`;
    button.addEventListener('click', () => showRange(range));
    controls.append(button);
  });
}

function renderSeasonControls() {
  const controls = document.getElementById('season-controls');
  seasonRanges.forEach((range) => {
    const group = document.createElement('section');
    group.className = 'season-group';

    const rangeButton = document.createElement('button');
    rangeButton.type = 'button';
    rangeButton.className = 'group-range-button';
    rangeButton.textContent = `Show ${range[0].number}–${range[range.length - 1].number}`;
    rangeButton.addEventListener('click', () => showRange(range));
    group.append(rangeButton);

    const buttons = document.createElement('div');
    buttons.className = 'individual-season-controls';
    range.forEach((season) => {
      const key = seasonKey(season.number);
      const button = document.createElement('button');
      button.type = 'button';
      button.className = 'season-toggle yes';
      button.id = key;
      button.textContent = season.number;
      button.setAttribute('aria-label', `Toggle Season ${season.number}`);
      button.setAttribute('aria-pressed', 'true');
      button.addEventListener('click', () => {
        setSeasonVisibility(season.number, button.classList.contains('no'));
      });
      buttons.append(button);
    });
    group.append(buttons);
    controls.append(group);
  });
}

function loadSettings() {
  const hasSavedSettings = seasons.some((season) => localStorage.getItem(seasonKey(season.number)) !== null);
  if (!hasSavedSettings) {
    showRange(seasonRanges[seasonRanges.length - 1]);
    return;
  }

  seasons.forEach((season) => {
    setSeasonVisibility(season.number, localStorage.getItem(seasonKey(season.number)) !== 'no');
  });
}

function openModal() {
  document.getElementById('customize-modal').classList.remove('hidden');
  document.getElementById('customize-close').focus();
}

function closeModal() {
  document.getElementById('customize-modal').classList.add('hidden');
  document.getElementById('customize-button').focus();
}

renderTable();
renderRangeControls();
renderSeasonControls();
loadSettings();

document.getElementById('customize-button').addEventListener('click', openModal);
document.getElementById('customize-close').addEventListener('click', closeModal);
document.getElementById('customize-modal').addEventListener('click', (event) => {
  if (event.target.id === 'customize-modal') closeModal();
});
document.getElementById('hide-all').addEventListener('click', () => {
  seasons.forEach((season) => setSeasonVisibility(season.number, false));
});
document.getElementById('show-all').addEventListener('click', () => {
  seasons.forEach((season) => setSeasonVisibility(season.number, true));
});
document.addEventListener('keydown', (event) => {
  if (event.key === 'Escape' && !document.getElementById('customize-modal').classList.contains('hidden')) {
    closeModal();
  }
});
