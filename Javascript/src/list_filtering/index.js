const filter_list = (matrix) => {
  const filtered = matrix.filter((m) => {
    if (typeof m === "number") {
      return Math.sign(m) >= 0 ? true : false;
    }
  });

  return filtered;
};

module.exports = filter_list;
