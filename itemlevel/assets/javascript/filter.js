function filterItems()
{
    var nameInput, lvlInput, namefilter, lvlfilter, table, tr, tdName, tdLevel, i;

    nameInput = document.getElementById("nameInput");
    lvlInputMin = document.getElementById("levelInputMin");
    lvlInputMax = document.getElementById("levelInputMax");
    namefilter = nameInput.value.toUpperCase();
    lvlFilterMin = lvlInputMin.value;
    lvlFilterMax = lvlInputMax.value;
    table = document.getElementById("table");
    tr = table.getElementsByTagName("tr");

    for (i = 0; i < tr.length; i++)
    {
        if (!lvlFilterMin || !lvlFilterMax) {
            lvlFilterMin = 1;
            lvlFilterMax =70;
        }
        tdName = tr[i].getElementsByTagName("td")[0];
        tdLevel = tr[i].getElementsByTagName("td")[1];

        if (tdName && tdLevel)
        {
            if ((tdName.innerHTML.toUpperCase().indexOf(namefilter) > -1) &&
                (Number(tdLevel.innerHTML) >= lvlFilterMin) &&
                (Number(tdLevel.innerHTML) <= lvlFilterMax))
            {
                tr[i].style.display = "";
            }
            else
            {
                tr[i].style.display = "none";
            }
        }
    }
}
