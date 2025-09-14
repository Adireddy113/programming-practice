let nums = [1,2,3,4];
nums.forEach(n=>console.log(n*2));


let ums = [1,2,3,4];
let doubled = ums.map(n=>n*2);
console.log(doubled);


let ms = [1,2,3,4,5,6];
let evens = ms.filter(n=>n%2==0);
console.log(evens);


let s = [1,2,3,4];
let sum = s.reduce((acc,curr) => acc+curr,0);
console.log(sum);
