import { likes } from "../src/who_likes_it";

describe("- Typescript/who_likes_it/index.js", () => {
  it("Codewars Test Refactory", () => {
    expect(likes([])).toBe("no one likes this");
    expect(likes(["Peter"])).toBe("Peter likes this");
    expect(likes(["Jacob", "Alex"])).toBe("Jacob and Alex like this");
    expect(likes(["Max", "John", "Mark"])).toBe("Max, John and Mark like this");
    expect(likes(["Alex", "Jacob", "Mark", "Max"])).toBe(
      "Alex, Jacob and 2 others like this"
    );
  });
});
