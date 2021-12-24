const assert = require("assert/strict");
const getCount = require("../src/vowel_count");

describe("- Javascript/vowel_count/index.js", () => {
  it("Codewars Test Refactory", () => {
    assert.equal(getCount("abracadabra"), 5);
  });
});
