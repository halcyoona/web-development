"use strict"

// Set
/*
let myArray = [11,22,33,44];
let mySet = new Set(myArray);
mySet.add('100');
mySet.add({a:1 , b:2});
mySet.delete(11);
mySet.clear();
mySet.add('100');
mySet.add('1');
//console.log(mySet.size);

mySet.forEach(function(val){
  console.log(val);
});
*/

// Map
/*
let  myMap = new Map([['a1','Hello'],['b2','GoodBye']]);
myMap.set('c3','doo');
myMap.delete('b2');
console.log(myMap);
console.log(myMap.size);
*/



// Weak set
/*
let carWeakSet = new WeakSet()
let car1 = {
  make:'Audi',
  Model:'A8'
}
let car2 = {
  make:'Honda',
  Model:'Civic'
}
carWeakSet.add(car1);
carWeakSet.add(car2);
carWeakSet.delete(car2);

console.log(carWeakSet);
*/




// Weak Map
/*
let carWeakMap = new WeakMap();
let key1 = {
  id:1
}
let car1 = {
  make:'Audi',
  Model:'A8'
}
let key2 = {
  id:2
}
let car2 = {
  make:'Honda',
  Model:'Civic'
}
carWeakMap.set(key1,car1);
carWeakMap.set(key2,car2);
carWeakMap.delete(key2,car2);
console.log(carWeakMap);
*/
