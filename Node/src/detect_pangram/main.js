const isPangram = (phrase) => {
  const array = Array.from(Array(26)).map((e, i) => i + 97);
  const alphabet = array.map((x) => String.fromCharCode(x));
  const alpha = phrase.toLowerCase().split("");

  alpha.map((letter) => {
    if (alphabet.includes(letter)) {
      alphabet[alphabet.indexOf(letter)] = true;
    }
  });

  return alphabet.filter((a) => a !== true).length === 0;
};

module.exports = isPangram;
