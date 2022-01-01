export class arrayDiff {
  a_array: number[];
  b_array: number[];

  constructor(a: number[], b: number[]) {
    this.a_array = a;
    this.b_array = b;
  }

  with_filter() {
    const non_coincident = this.a_array.filter(
      (num) => !this.b_array.includes(num)
    );

    return non_coincident;
  }

  with_map() {
    let coincident: number[] = [];
    let non_coincident: number[] = [];

    this.a_array.map((num) => {
      if (this.b_array.includes(num)) {
        coincident.push(num);
      } else {
        non_coincident.push(num);
      }
    });

    return non_coincident;
  }
}
