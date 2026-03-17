function intersection(a, b) {
  return a.filter((e) => b.includes(e));
}
function difference(a, b) {
    return a.filter((e) => !b.includes(e));
}

console.log(intersection([1, 2, 3], [4, 5, 6]));
console.log(intersection([1, 2, 3, 4], [2, 4, 6]));
console.log(difference([1, 2, 3, 4], [2, 4]));
console.log(difference([1, 2, 3], [1, 2, 3, 4]));
