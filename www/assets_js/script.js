document.getElementById('add-dispo').addEventListener('click', () => {
  const jour = document.getElementById('jour-select').value;
  const heure = document.getElementById('heure-select').value.replace('h', '');
  const minute = document.getElementById('minute-select').value;
  const ul = document.getElementById('liste-dispo');

  const li = document.createElement('li');
  li.textContent = `${jour} à ${heure}h${minute}`;
  ul.appendChild(li);

  li.innerHTML += `
    <input type="hidden" name="dispo_jour[]" value="${jour}">
    <input type="hidden" name="dispo_time[]" value="${heure}:${minute}:00">
    <button type="button" onclick="this.parentElement.remove()">✖</button>
  `;
});
