const seasonRanges = Array.from({ length: Math.ceil(seasons.length / 10) }, (_, index) =>
  seasons.slice(index * 10, index * 10 + 10),
);
let mobileSeasonNumber = seasons[seasons.length - 1].number;

function setMobileView(view) {
  document.body.dataset.mobileView = view;
  localStorage.setItem('seasonMobileView', view);
  document.querySelectorAll('#view-controls button').forEach((button) => {
    const selected = button.dataset.view === view;
    button.classList.toggle('active', selected);
    button.setAttribute('aria-pressed', String(selected));
  });
}

function seasonKey(number) {
  return `s${String(number).padStart(2, '0')}`;
}

function setSeasonVisibility(number, visible, refreshMobile = true) {
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
  if (refreshMobile) renderMobileView();
}

function showRange(range) {
  const rangeNumbers = new Set(range.map((season) => season.number));
  seasons.forEach((season) => setSeasonVisibility(season.number, rangeNumbers.has(season.number), false));
  mobileSeasonNumber = range[range.length - 1].number;
  renderMobileView();

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

function visibleSeasons() {
  return seasons.filter((season) => localStorage.getItem(seasonKey(season.number)) !== 'no');
}

function renderMobileView() {
  const container = document.getElementById('mobile-season-view');
  const visible = visibleSeasons();
  if (!visible.length) {
    container.innerHTML = '<p class="mobile-empty">No seasons are selected. Use Customize to choose one or more seasons.</p>';
    return;
  }

  let currentIndex = visible.findIndex((season) => season.number === mobileSeasonNumber);
  if (currentIndex === -1) currentIndex = visible.length - 1;
  const current = visible[currentIndex];
  mobileSeasonNumber = current.number;

  const selector = document.createElement('select');
  selector.id = 'mobile-season-select';
  selector.setAttribute('aria-label', 'Season to display');
  visible.forEach((season) => {
    const option = new Option(`Season ${season.number}`, season.number, false, season.number === current.number);
    selector.add(option);
  });
  selector.addEventListener('change', () => {
    mobileSeasonNumber = Number(selector.value);
    renderMobileView();
  });

  const previous = document.createElement('button');
  previous.type = 'button';
  previous.className = 'mobile-season-nav';
  previous.textContent = 'Previous';
  previous.disabled = currentIndex === 0;
  previous.addEventListener('click', () => {
    mobileSeasonNumber = visible[currentIndex - 1].number;
    renderMobileView();
  });

  const next = document.createElement('button');
  next.type = 'button';
  next.className = 'mobile-season-nav';
  next.textContent = 'Next';
  next.disabled = currentIndex === visible.length - 1;
  next.addEventListener('click', () => {
    mobileSeasonNumber = visible[currentIndex + 1].number;
    renderMobileView();
  });

  const navigation = document.createElement('div');
  navigation.className = 'mobile-season-navigation';
  navigation.append(previous, selector, next);

  const card = document.createElement('article');
  card.className = 'mobile-season-card';
  const title = document.createElement('h3');
  title.textContent = `Season ${current.number}`;
  card.append(title);

  const details = document.createElement('dl');
  seasonFields.forEach((field) => {
    const label = document.createElement('dt');
    label.innerHTML = field.label;
    const value = document.createElement('dd');
    value.innerHTML = current.values[field.key] || '—';
    details.append(label, value);
  });
  card.append(details);

  container.replaceChildren(navigation, card);
}

function loadSettings() {
  const hasSavedSettings = seasons.some((season) => localStorage.getItem(seasonKey(season.number)) !== null);
  if (!hasSavedSettings) {
    showRange(seasonRanges[seasonRanges.length - 1]);
    return;
  }

  seasons.forEach((season) => {
    setSeasonVisibility(season.number, localStorage.getItem(seasonKey(season.number)) !== 'no', false);
  });
  renderMobileView();
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
renderMobileView();

setMobileView(localStorage.getItem('seasonMobileView') || 'cards');
document.querySelectorAll('#view-controls button').forEach((button) => {
  button.addEventListener('click', () => setMobileView(button.dataset.view));
});

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
