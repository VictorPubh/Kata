const assert = require("assert/strict");
const isPangram = require("../src/detect_pangram");

describe("- Javascript/detec_pangram/index.js", () => {
  it("Codewars Test Refactory #1", () => {
    assert.equal(
      isPangram("The quick brown fox jumps over the lazy dog."),
      true
    );

    assert.equal(isPangram("This is not a pangram."), false);
  });
  it("Codewars Test with Phrase in Portuguese", () => {
    assert.equal(
      isPangram("Vi que ex-janota gordo fez show com playback."),
      true
    );

    assert.equal(isPangram("Jovem ex-quenga picha frase da Blitz"), false);
  });
});
