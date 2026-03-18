let tableau1 = [3, 1, 2, 1, 3, 0, "", 5, null, 2];
let tableau2 = [false, 7, 7, "", 8, undefined, 8];
let tableau3 = [0, 0, 0];

function nettoyer(tableau) {
  // Votre code ici
  let newtableau = tableau
    .filter((nb) => nb > 0)
    .filter((item, index, arr) => arr.indexOf(item) === index);

  newtableau.sort((a, b) => a - b);

  return newtableau;
}

console.log(nettoyer(tableau1));
