"use strict"

let name = 'Mehmood';

function makeUppercase(word){
  return word.toUpperCase();
}

let template =
`<h1>${makeUppercase('Hello')}, ${name}</h1>
<p>this is a simple template in js</p>`;
document.getElementById('template').innerHTML = template;
