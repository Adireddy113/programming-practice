function gradeCalculator(marks) {
let grade;

if(marks >= 90) {
grade = "A";
}

else if (marks >= 70) {
grade = "B";
}

else if (marks >= 35) {
grade = "C";
}

else {
grade = "D";
}

switch(grade) {

case "A":
console.log(`Grade : ${grade} Excellent`);
break;

case "B":
console.log(`Grade : ${grade} Good Job`);
break;

case "C":
console.log(`Grade : ${grade} Needs Improvement`);
break;

case "D":
console.log(`Grade : ${grade} Failed`);
break;

default:
console.log("Invalid Marks");

}
}

gradeCalculator(56);