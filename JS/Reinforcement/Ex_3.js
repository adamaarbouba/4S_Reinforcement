function flatten(tableau) {
  // Votre code ici -- sans utiliser flat() ni flatMap()
  let newtableau = [];
  tableau.forEach((e) => {
    e.forEach((i) => {
      newtableau.push(i);
    });
  });
  return newtableau;
}
let tableau1 = [
  [1, 2, 3, 4, 5],
  [6, 7, 8, 9, 10],
  [11,12,13,14,15],
];
console.log(flatten(tableau1));
