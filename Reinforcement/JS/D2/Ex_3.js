const commande = {
  id: "CMD-001",
  client: { nom: "Dupont", email: "dupont@mail.com" },
  total: 18.5,
  livree: false,
};
const user = { id: 42, nom: "Alice", role: "admin", ville: "Paris" };

const { nom, role } = user;

console.log();

function resumeCommande({ id, client, total }) {}
