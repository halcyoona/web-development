function getSum(num1, num2) {
    return num1 + num2;
}
//console.log(getSum(1,25));
var mySum = function (num1, num2) {
    if (typeof num1 == 'string') {
        num1 = parseInt(num1);
    }
    if (typeof num2 == 'string') {
        num1 = parseInt(num1);
    }
    return num1 + num2;
};
//console.log(mySum('2',2));
function getName(firstName, lastName) {
    if (lastName == undefined) {
        return firstName;
    }
    return firstName + " " + lastName;
}
console.log(getName('Mehmood'));
