function rotate(tableau, n) {
  // Votre code ici
  let steps = n % tableau.length;
  for (let i = 0; i < steps; i++) {
    tableau.unshift(tableau.pop());
  }
  return tableau;
}

let tableau1 = [1, 2, 3, 4, 5];
console.log(rotate(tableau1, 2));
