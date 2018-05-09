interface userInterface{
  name:string;
  email:string;
  age:number;
  register();
  payInvoice();
}

class user implements userInterface{
    name:string; // private
    email:string; // public
    age:number;  // protected

    constructor(name:string, email:string, age:number){
        this.name = name;
        this.email = email;
        this.age = age;
        console.log('user created : '+this.name)
    }
    register(){
      console.log(this.name+' is now registered');
    }
    payInvoice(){
      console.log(this.name+" paid payInvoice");
    }
}
class member extends user {
    id:number;
    constructor(id:number, name:string, email:string, age:number ){
      super(name,email,age);
      this.id = id;
    }
    payInvoice(){
        super.payInvoice();
    }
}

//let Mehmood = new user('Mehmood','halcyoona@gmail.com',20);
//console.log(Mehmood.age);
//Mehmood.register();
let Mehmood = new member(1, 'Mehmood Munir','halcyoona',21);
Mehmood.payInvoice();
