const produits = [
  { nom: "Stylo", categorie: "ecriture", prix: 1.5 },
  { nom: "Cahier", categorie: "papier", prix: 3.5 },
  { nom: "Feutre", categorie: "ecriture", prix: 2.0 },
  { nom: "Post-it", categorie: "papier", prix: 3.8 },
  { nom: "Ciseaux", categorie: "bureau", prix: 6.5 },
];

function groupBy(tableau, cle) {
  // retourne un objet { valeurDeLaCle: [elements], ... }

  return tableau.reduce((acc, produit) => {
    let key = produit[cle];
    if (!acc[key]) {
      acc[key] = [];
    }
    acc[key].push(produit);
    return acc;
  }, {});
}
console.log(groupBy(produits, "categorie"));
