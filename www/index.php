<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaire de contact</title>
  <link rel="stylesheet" href="assets_css/style.css">
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const addButton = document.querySelector("button[type='button']");
      const listeDispo = document.getElementById("liste-dispo");
      const selectJour = document.querySelector("select[name='jour']");
      const selectHeure = document.querySelector("select[name='heure']");
      const selectMinute = document.querySelector("select[name='minute']");

      addButton.addEventListener("click", function () {
        const jour = selectJour.value;
        const heure = selectHeure.value;
        const minute = selectMinute.value;

        const li = document.createElement("li");
        li.textContent = `${jour} à ${heure}${minute} `;

        const supprimer = document.createElement("span");
        supprimer.textContent = "✖";
        supprimer.style.cursor = "pointer";
        supprimer.style.marginLeft = "0.5rem";
        supprimer.addEventListener("click", () => li.remove());

        li.appendChild(supprimer);
        listeDispo.appendChild(li);
      });
    });
  </script>
</head>
<body>
  <div class="container">
    <h1>Contactez-nous</h1>
    <form action="submit_form.php" method="POST">
      <div class="form-columns">
        <div class="col-left">
          <!-- Coordonnées -->
          <fieldset>
            <legend>Vos coordonnées</legend>
            <div class="radio-group">
              <label><input type="radio" name="civilite" value="Mme" required> Mme</label>
              <label><input type="radio" name="civilite" value="M"> M</label>
            </div>

            <div class="row">
              <input type="text" name="nom" placeholder="Nom" required>
              <input type="text" name="prenom" placeholder="Prénom" required>
            </div>
            <input type="email" name="email" placeholder="Adresse mail" required>
            <input type="tel" name="telephone" placeholder="Téléphone">
          </fieldset>

          <!-- Disponibilités -->
          <fieldset>
            <legend>Disponibilités pour une visite</legend>
            <div class="row">
              <select name="jour">
                <option>Lundi</option>
                <option>Mardi</option>
                <option>Mercredi</option>
                <option>Jeudi</option>
                <option>Vendredi</option>
              </select>
              <select name="heure">
                <option>9h</option>
                <option>10h</option>
                <option>11h</option>
              </select>
              <select name="minute">
                <option>00</option>
                <option>15</option>
                <option>30</option>
                <option>45</option>
              </select>
              <button type="button">Ajouter dispo</button>
            </div>
            <ul id="liste-dispo"></ul>
          </fieldset>
        </div>

        <div class="col-right">
          <!-- Message -->
          <fieldset>
            <legend>Votre message</legend>

            <div class="radio-group">
              <label><input type="radio" name="sujet" value="visite" required> Demande de visite</label>
              <label><input type="radio" name="sujet" value="rappel"> Être rappelé·e</label>
              <label><input type="radio" name="sujet" value="photos"> Plus de photos</label>
            </div>

            <textarea name="message" placeholder="Votre message" required></textarea>
          </fieldset>
        </div>
      </div>

      <button type="submit">Envoyer</button>
    </form>
  </div>
</body>
</html>
