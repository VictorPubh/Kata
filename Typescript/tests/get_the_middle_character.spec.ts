import { getMiddle } from "../src/get_the_middle_character";

describe("- Typescript/find_the_parity_outlier/index.js", () => {
  it("Codewars Test Refactory", () => {
    expect(getMiddle("test")).toBe("es");
    expect(getMiddle("testing")).toBe("t");
  });
});
