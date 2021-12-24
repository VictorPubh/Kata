export function findOutlier(integers: number[]): number {
  const oddArray = [];
  const evenArray = [];

  for (let integer of integers) {
    if (integer % 2 === 0) {
      evenArray.push(integer);
    } else {
      oddArray.push(integer);
    }
  }
  return oddArray.length === 1 ? oddArray[0] : evenArray[0];
}
