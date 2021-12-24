const number = (stops) => {
  let pass = 0;

  stops.map((stop) => {
    const cameIn = stop[0];
    const cameOut = stop[1];

    pass = pass + cameIn - cameOut;
  });

  return pass;
};

module.exports = number;
