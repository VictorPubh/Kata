const getCount = (str) => {
  const str_array = str.split("");
  const vowels = ["a", "e", "i", "o", "u"];
  let vowelsCount = 0;

  str_array.map((letter) => {
    if (vowels.includes(letter)) {
      vowelsCount += 1;
    }
  });

  return vowelsCount;
};

module.exports = getCount;
