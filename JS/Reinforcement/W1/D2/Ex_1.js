const fiche = { prenom: "Bob", nom: "Dupont", age: 34, ville: "Lyon" };

function getProp(obj, key) {
  return obj[key];
}

function renommerCle(obj, oldKey, newKey) {
  obj[newKey] = obj[oldKey];
  delete obj[oldKey];
}

console.log(getProp(fiche, "nom"));
renommerCle(fiche, "nom", "name");
console.log(fiche);
