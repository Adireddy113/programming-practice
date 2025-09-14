let nums = [1,2,3,4,5,6];
let evensum = nums.filter(n=>n%2==0)
                  .reduce((sum,n)=>sum+n,0);
console.log("Sum of Even numbers: ", evensum);