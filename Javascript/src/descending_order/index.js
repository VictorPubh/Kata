const descendingOrder = (n) => {
  var splitted = Array.from(String(n), Number);
  const order = splitted
    .sort((a, b) => {
      if (a > b) return -1;
      if (b > a) return 1;

      return 0;
    })
    .join("");

  return Number(order);
};

module.exports = descendingOrder;
