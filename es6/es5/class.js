/**
 * Created by asus on 2018/4/1.
 */


/**
 * Created by asus on 2018/4/1.
 */
class Person{
    constructor(name,age){
        this.name = name;
        this.age = age;
    }
    showInfo(){
        console.log(`姓名:${this.name}年龄:${this.age}`);
    }
}
let person1 = new Person("xiaoming","17");
person1.showInfo();

class Teacher extends  Person{
    constructor(name,age,school){ //继承 不需要改变this指向
        super(name,age);
        this.school = school;//添加属性
    }
    showSchool(){
        console.log(this.school);
    }
}
let teacher1 = new Teacher("1230","11","0");
teacher1.showInfo();
teacher1.showSchool();