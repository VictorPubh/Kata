const assert = require("assert/strict");
const filter_list = require("../list_filtering/main");

describe("- Node/list_filtering/main.js", () => {
  it("Codewars Test Refactory", () => {
    assert.deepEqual(filter_list([1, 2, "a", "b"]), [1, 2]);
    assert.deepEqual(filter_list([1, "a", "b", 0, 15]), [1, 0, 15]);
    assert.deepEqual(filter_list([1, 2, "aasf", "1", "123", 123]), [1, 2, 123]);
    assert.deepEqual(filter_list([1, 2, "aasf", "1", "123", -3]), [1, 2]);
  });
});
