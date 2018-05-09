"use strict"
class User{
  constructor(username, email, pasword){
    this.username = username;
    this.email = email;
    this.pasword = pasword;
  }
  static countUsers(){
    console.log('there are 50 user');
  }
  register(){
    console.log(this.username+' is now registered');
  }
}

//let Mehmood = new User('Mehmood', 'halcyoona@gmail.com', '121122');
//Mehmood.register();
//User.countUsers();

class Member extends User{
  constructor(username, email, pasword, memberpackage){
    super(username, email, pasword);
    this.memberpackage = memberpackage;
  }
  getPackage(){
    console.log(this.username+" is subcribed to the "+this.memberpackage+" package");
  }
}
let Ali = new Member('Ali', 'Ali@gamil.com', '121111','standard');
//Ali.getPackage();
Ali.register();
