export function countBits(n: number): number {
  const base = n.toString(2).split("");
  const result = base.reduce((sum, num) => sum + Number(num), 0);

  return result;
}
