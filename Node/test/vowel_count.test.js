const assert = require("assert/strict");
const getCount = require("../src/vowel_count/main");

describe("- Node/vowel_count/main.js", () => {
  it("Codewars Test Refactory", () => {
    assert.equal(getCount("abracadabra"), 5);
  });
});
