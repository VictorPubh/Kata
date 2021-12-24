const assert = require("assert/strict");
const number = require("../src/number_of_people_in_the_bus");

describe("- Javascript/number_of_people_in_the_bus/index.js", () => {
  it("Codewars Test Refactory", () => {
    assert.strictEqual(
      number([
        [10, 0],
        [3, 5],
        [5, 8],
      ]),
      5
    );
    assert.strictEqual(
      number([
        [3, 0],
        [9, 1],
        [4, 10],
        [12, 2],
        [6, 1],
        [7, 10],
      ]),
      17
    );
    assert.strictEqual(
      number([
        [3, 0],
        [9, 1],
        [4, 8],
        [12, 2],
        [6, 1],
        [7, 8],
      ]),
      21
    );
    assert.strictEqual(number([[0, 0]]), 0);
  });
});
