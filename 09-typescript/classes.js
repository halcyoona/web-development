var __extends = (this && this.__extends) || (function () {
    var extendStatics = Object.setPrototypeOf ||
        ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
        function (d, b) { for (var p in b) if (b.hasOwnProperty(p)) d[p] = b[p]; };
    return function (d, b) {
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
var user = /** @class */ (function () {
    function user(name, email, age) {
        this.name = name;
        this.email = email;
        this.age = age;
        console.log('user created : ' + this.name);
    }
    user.prototype.register = function () {
        console.log(this.name + ' is now registered');
    };
    user.prototype.payInvoice = function () {
        console.log(this.name + " paid payInvoice");
    };
    return user;
}());
var member = /** @class */ (function (_super) {
    __extends(member, _super);
    function member(id, name, email, age) {
        var _this = _super.call(this, name, email, age) || this;
        _this.id = id;
        return _this;
    }
    member.prototype.payInvoice = function () {
        _super.prototype.payInvoice.call(this);
    };
    return member;
}(user));
//let Mehmood = new user('Mehmood','halcyoona@gmail.com',20);
//console.log(Mehmood.age);
//Mehmood.register();
var Mehmood = new member(1, 'Mehmood Munir', 'halcyoona', 21);
Mehmood.payInvoice();
