export function getMiddle(entry: string) {
  const lenString = entry.length;
  const normalizeMiddle = Math.floor(lenString / 2);

  return lenString % 2 === 0
    ? entry[normalizeMiddle - 1] + entry[normalizeMiddle]
    : entry[normalizeMiddle];
}
