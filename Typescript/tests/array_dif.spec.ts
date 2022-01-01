import { arrayDiff } from "../src/array_diff";

describe("- Typescript/array_diff/index.js", () => {
  it("Codewars Test Refactory with Filter", () => {
    expect(new arrayDiff([], [4, 5]).with_filter()).toStrictEqual([]);
    expect(new arrayDiff([3, 4], [3]).with_filter()).toStrictEqual([4]);
    expect(new arrayDiff([1, 8, 2], []).with_filter()).toStrictEqual([1, 8, 2]);
    expect(new arrayDiff([1, 2, 3], [1, 2]).with_filter()).toStrictEqual([3]);
  });

  it("Codewars Test Refactory with Map", () => {
    expect(new arrayDiff([], [4, 5]).with_map()).toStrictEqual([]);
    expect(new arrayDiff([3, 4], [3]).with_map()).toStrictEqual([4]);
    expect(new arrayDiff([1, 8, 2], []).with_map()).toStrictEqual([1, 8, 2]);
    expect(new arrayDiff([1, 2, 3], [1, 2]).with_map()).toStrictEqual([3]);
  });
});
